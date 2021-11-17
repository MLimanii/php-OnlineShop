/*--------------------------------------------------------------------*/
/* Flex Slider														  */
/*--------------------------------------------------------------------*/

$(function(){
    // SyntaxHighlighter.all();
});
$(window).load(function(){
$('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
        $('body').removeClass('loading');
    }
});
});

/* end FlexSlider */

$(document).ready(function(){
    $('.modal').click(function(){
        $('.modal-close').click();
    });
});	

$(document).ready(function(){
    $('.ico-search').click(function(){
        $('#mySearchForm').toggleClass('form-search');	
        $('.ico-search').toggleClass('toggle');							
    })
})

$(document).ready(function(){
    $('.ico-login').click(function(){
        $('#myLoginForm').toggleClass('form-login');	
        $('.ico-login').toggleClass('toggle');							
    })
})
$(document).ready(function(){
    $('.ico-cart').click(function(){
        $('#myCart').toggleClass('form-cart');	
        $('.ico-cart').toggleClass('toggle');							
    })
})

$(document).ready(function(){
    $('.ico-login').click(function(){
        $('.form-search').click();
    });
});	
