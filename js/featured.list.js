var base_url = '';

$(document).ready(function(){

    //base_url = $('#base_url').data('baseurl');

    base_url = $('[name=base_ur]').prop('content');

    $(".featured-list").owlCarousel({

        autoPlay: 3000,
        items : 4

    });

    $(".list-5").owlCarousel({

        autoPlay: 3000,
        items : 5

    });

   /* console.log(base_url);*/
    $(".featured-list figure a").click(function(){

        $('.ajax-content').fadeOut(400);

        var post_id = $(this).data('id');

        $(".pre-loader").fadeIn(500);

        /*scrollTo('#featured-products');*/

        $.post(base_url,{
            action: 'get_post_content',
            id: post_id
        }, function(response){

            console.log(response);
            $(".pre-loader").delay(100).fadeOut(400);
            $('.ajax-content').fadeOut(400).html(response).delay(100).fadeIn(400);

        });


    });


    /*$('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            scrollTo(this.hash);
        }
    });*/



    /*$('ul.nav li').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown();

    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp();
    });
     */
    $(".dropdown-menu").each(function(){
        if(! $(this).find("li").length ){
            $(this).remove();
            $(".dropdown-menu .fa-chevron-right").remove();
        }
    });
});


function scrollTo(hash){

    var target = $(hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
        return false;
    }

}