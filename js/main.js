$(function(){
    var wellMain = $('.well-main');
    var wellSide = $('.well-products-sidebar');
    console.log( wellMain.height() );
    wellSide.css( 'margin-top', wellMain.height() );
});