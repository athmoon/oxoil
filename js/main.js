$(function(){
    var wellMain = $('.well-main');
    var wellSide = $('.well-news');
    var shortFeedRssTitles = $('.short-feeds .rss-aggregator a');
    console.log( wellMain.height() );
    console.log( wellSide.height() );
    wellSide.css( 'margin-top', wellMain.height() - wellSide.height() + 29 );

    shortFeedRssTitles.each(function( index ){
        console.log($(this).text().length);
    });
    /*shortFeedRssTitles.filter(function(title){

    });*/

});