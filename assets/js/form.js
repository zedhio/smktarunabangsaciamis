$('input,textarea').focus(function(){
            $(this).parents('.form-focused').addClass('focused');
        });

        $('input,textarea').blur(function(){
            var inputValue = $(this).val();
            if ( inputValue == "" ) {
                $(this).removeClass('filled');
                $(this).parents('.form-focused').removeClass('focused');  
            } else {
                $(this).addClass('filled');
            }
        })  

        // add input text

        