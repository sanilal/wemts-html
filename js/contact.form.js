/**
*
* -----------------------------------------------------------------------------
*
* Template : RS Construction - Construction & Building HTML Template
* Author : rs-theme
* Author URI : http://www.rstheme.com/
*
* -----------------------------------------------------------------------------
*
**/

jQuery(document).ready(function($) {
    'use strict';

    // Get the form.
    var form = $('#contact-form');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
		$(formMessages).text('');
        // Serialize the form data.
        var formData = $(form).serialize();
		$(formMessages).addClass('error');
        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            //alert(response);
			 $(formMessages).text(response);
			if(response=='success'){
            	$(formMessages).addClass('success');
				$(formMessages).removeClass('error');
				$('#fname, #lname, #email, #subject, #message').val('');
				$(formMessages).text('Your Message has been sent successfully');
				setTimeout(function () {
                     $(formMessages).text('');
                 }, 2500);
			}

            // Set the message text.
           

            // Clear the form.
            
        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    });

});