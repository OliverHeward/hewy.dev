jQuery(document).ready(function() {
    jQuery('.skillbar').each(function() {
        jQuery(this).find('.skillbar-bar').animate({
            width: jQuery(this).attr('data-percent')
        }, 3000);
    })

    jQuery('.project-hover').hide();
    
    jQuery('.project-wrapper').bind('mouseenter', function(){
        jQuery(this).find('.project-hover').fadeIn(200);
    }).bind('mouseleave', function(){
        jQuery(this).find('.project-hover').fadeOut(200);
    });
})