$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    // jQuery.validator.addMethod('answercheck', function (value, element) {
    //     return this.optional(element) || /^\bcat\b$/.test(value)
    // }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                address: {
                    required: true,
                    minlength: 4
                },
                city: {
                    required: true,
                    minlength: 2
                },
                telephone: {
                    required: true,
                    telephone: true
                },
                email: {
                    required: true,
                    email: true
                },
                comments: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name, don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                address: {
                    required: "come on, you have a address, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                city: {
                    required: "come on, what is your city, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                telephone: {
                    required: "come on, you have a number, don't you?",
                    minlength: "your Number must consist of at least 5 characters"
                },
                email: {
                    required: "no email, no message"
                },
                comments: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            
        })
    })
        
 })(jQuery)
})