(function ($) {
	"use strict";


$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();

    //console.log("entro a funcion y valido ");


    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        //console.log("Dentro de submit ");
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {

            var url = "/contact.php";

            //console.log("entro por prevented ");

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    //data = JSON object that contact_ori.php returns
                    //console.log("success");
                    // we recieve the type of the message: success x danger and apply it to the
                    //console.log("la data es ",  data );
                    var messageAlert = 'alert-' + data.type;

                    var messageText = data.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#contact-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#contact-form')[0].reset();
                    }
                }
                ,
                error: function (xhr, ajaxOptions, thrownError) {
                    //console.log("error ");
                    //alert(xhr.status);
                    //alert(thrownError);
                    var messageAlert = 'alert-danger';
                    var messageText = "Error " + thrownError;
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#contact-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#contact-form')[0].reset();
                    }

                }

            });
            return false;
        }
    })
});
    
 })(jQuery);