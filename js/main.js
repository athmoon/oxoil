$(function(){
    var wellMain = $('.well-main');
    var wellSide = $('.well-news');
    console.log( wellMain.height() );
    console.log( wellSide.height() );
    wellSide.css( 'margin-top', wellMain.height() - wellSide.height() + 29 );
});