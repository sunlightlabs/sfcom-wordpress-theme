var CONFIG_URL = '/engage/brandingbar/config/',
    PROCESS_URL = '/engage/donate/remote/';

// old salsa way
// var CONFIG_URL = 'https://engage.sunlightfoundation.com/donations/config/',
//    PROCESS_URL = 'https://engage.sunlightfoundation.com/donations/remote/';

$(document).ready(function() {

   // Get publishable key from Stripe so we can process donation server side
  $.getJSON(CONFIG_URL, function(data) {
    Stripe.setPublishableKey(data.stripe.key);
  });

  // Step 1 (address information input)
	$(".bb-modal-form-step-1 .js-next-frame").click(function(e) {
		e.preventDefault();

    // grab donation amount from checked radio
    var donationRadios = document.getElementsByName('amount');

    for (var i = 0; i < donationRadios.length; i++) {
        if (donationRadios[i].checked) {
            var donationValue = donationRadios[i].value;

            // update donation amount in messages
            var donationUpdate = document.querySelectorAll('.js-val-donation');
            for (var j = 0; j < donationUpdate.length; j++) {
              donationUpdate[j].innerHTML = '$' + donationValue;
            }
            break;
        }
    }

    var errors = [];
    var form = document.querySelector('#bb-transaction-form');
    var amountOther = document.querySelector('.bb-input_other-amount');
    var fieldNames = ['given_name', 'family_name', 'address', 'city', 'state', 'zipcode'];

    $(amountOther).removeClass('bb-input_error');

    if (form.elements.amount.value === 'custom') {
      fieldNames.push('amount_other')
    }

    errors = errors.concat(validateRequired(form, fieldNames));

    var errContainer = form.querySelector('.bb-modal-form-step-1 .bb-error-message');

    $(errContainer).html("");

    if (errors.length > 0) {
      displayErrors(errContainer, errors);
    } else {
			toggleFrame(1, "hide")
			toggleFrame(2, "show")
    }
	});

  // Step 2 (card information input)
	$(".bb-modal-form-step-2 .js-next-frame").click(function(e) {
    // don't double charge
    if ($(this).hasClass("disabled")) {
      return false;
    };

    var emailAddress = document.querySelector('.bb-input[data-input-email]').value;
    document.querySelector('.js-val-email').innerHTML = emailAddress.toString();

    var form = document.querySelector('#bb-transaction-form');

    var errors = [];
    errors = errors.concat(validateRequired(form, ['email']));
    errors = errors.concat(validateRequired(form, ['number', 'exp-month', 'exp-year', 'cvc'], 'data-stripe'));

    var errContainer = form.querySelector('.bb-modal-form-step-2 .bb-error-message');
    $(errContainer).html("")
    if (errors.length > 0) {
      displayErrors(errContainer, errors);
    } else {
      $(errContainer).hide();
      $(this).addClass('disabled')
      Stripe.card.createToken(form, stripeResponseHandler);
    }
	});

  // Handle 'go back' link
	$(".js-prev-frame").click(function(e) {
		e.preventDefault();
		var current_frame = getCurrentFrameNumber(this);
		toggleFrame(current_frame, "hide")
		toggleFrame(current_frame - 1, "show")
	})

  // Logic for custom amounts
  $('.bb-input_other-amount').click(function(e){
		$('.bb-input[data-radio-custom]').attr('checked', 'checked')
  });
  $('.bb-input_other-amount').change(function(e){
		var amount = document.querySelector('input[name=amount_other]');
		$('.bb-input[data-radio-custom]').val(formatAmount(amount))
  });

  // Show optional fields when checkbox is checked
  $('.js-trigger-note').change(function(e) {
    $('.bb-form-additional-fields').toggleClass('is-active')
  })
});

var getCurrentFrameNumber =	function(current_frame) {
	var frame_number = $(current_frame).parents("[class^=bb-modal-form]").attr('data-frame');
	return parseInt(frame_number);
}
var toggleFrame = function(frame_number, visibility) {
	if (visibility === "show") {
		$("[data-frame=" + frame_number + "]").addClass('is-active')
	} else {
		$("[data-frame=" + frame_number + "]").removeClass('is-active')
	}
}

var stripeResponseHandler = function(status, response) {
  var form = $('#bb-transaction-form');
  var errContainer = $('.bb-modal-form-step-1 .bb-error-message');
  errContainer.html("");

  if (response.error) {
    displayErrors(errContainer, [response.error.message]);
    window.console && console.log(response.error.message);
    showWholeForm();
  } else {
		toggleFrame(1, "hide");
    toggleFrame(2, "hide");
		toggleFrame(3, "show");

    var token = response.id;
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'stripe_token';
    input.value = token;
    form.append(input);

    var data = serializeForm(form[0]);

    if (!data.amount) {
      data.amount = data.amount_other;
    }
    delete data.amount_other;

    $(errContainer).hide()

    var step2 = document.querySelectorAll('.bb-modal-form-step-2');
    var step3 = document.querySelectorAll('.bb-modal-form-step-3');

    $.ajax({
      type: 'POST',
      url: PROCESS_URL,
      data: data,
      dataType: 'json'
    }).done(function(response){
    	$(".bb-modal-message-progress").hide();
    	$(".bb-modal-message-thankyou").show();
    }).fail(function(response){
    	var response = $.parseJSON(response.responseText);
    	var errContainer = document.querySelector('.bb-modal-form-step-1 .bb-error-message');
    	displayErrors(errContainer, preprocessErrors(response.errors));
    	showWholeForm()
    });

  }
};

var validateRequired = function(form, fieldNames, attr) {
  attr = attr || 'name';
  var errors = [];
  for (var i = 0; i < fieldNames.length; i++) {
    var fieldName = fieldNames[i];
    var elem = form.querySelector('[' + attr + '=' + fieldName + ']');
    if (!elem.value) {
      errors.push(labelize(fieldName) + ' is a required field');
      $(elem).addClass('bb-input_error');
    } else {
      $(elem).removeClass('bb-input_error');
    }
  }
  return errors;
};

var labelize = function(name) {
  if (name === 'cvc') {
    name = 'CVC';
  } else if (name === 'amount_other') {
    name = 'Amount';
  } else {
    var properCase = function(txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    }
    name = name.replace('_', ' ')
               .replace('-', '. ')
               .replace(/\w\S*/g, properCase);
  }
  return name;
};

var preprocessErrors = function(errors) {
	error_list = [];
	$.each(errors, function(key,error) {
		error_list = error_list.concat(error)
	})
	return error_list;
}

var displayErrors = function(container, errors) {
  var list = document.createElement('ul');
  $(list).addClass('bb-error_list');
  for (var i = 0; i < errors.length; i++) {
    var item = document.createElement('li');
    item.innerHTML = errors[i];
    list.appendChild(item);
  }
  $(container).append(list);
  $(container).show();
}

var formatAmount = function(amount) {
  if (amount.value) {
    amount.value = parseFloat(amount.value).toFixed(2);
    return amount.value;
  }
};

var serializeForm = function(form) {
  var data = {};
  var elems = form.elements;
  for (var i = 0; i < elems.length; i++) {
    var elem = elems[i];
    if (elem.name) {
      if (elem.type === 'button') {
        // ignore
      } else if (elem.type === 'radio' || elem.type === 'checkbox') {
        if (elem.checked) {
          data[elem.name] = elem.value;
        }
      } else {
        data[elem.name] = elem.value;
      }
    }
  }
  return data;
};

var showWholeForm = function() {
  $("form [class^='bb-modal-form-step']").addClass('is-active');
  $('.bb-modal-form-step-2').addClass('is-active');
  $('.bb-modal-form-step-3').removeClass('is-active');
  $('.disabled').removeClass('disabled');
  $('.bb-form-fieldset_btns.step-1').hide();
  $(".bb-modal-message-progress").hide();
}
