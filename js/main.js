$(function(){
    var wellMain = $('.well-main');
    var wellSide = $('.well-news');
    var shortFeedRssTitles = $('.short-feeds .rss-aggregator a');
    console.log( wellMain.height() );
    console.log( wellSide.height() );
    wellSide.css( 'margin-top', wellMain.height() - wellSide.height() + 29 );

    shortFeedRssTitles.each(function(title){
        console.log(title.text().length);
    });
    /*shortFeedRssTitles.filter(function(title){

    });*/

});