$(function(){
    var wellMain = $('.well-main');
    var wellSide = $('.well-news');
    var shortFeedRssTitles = $('.short-feeds .rss-aggregator a');
    console.log( wellMain.height() );
    console.log( wellSide.height() );

    setTimeout(function(){
        wellSide.css( 'margin-top', wellMain.height() - wellSide.height() + 300 );
    }, 1000);

    // limit each RSS titles
    shortFeedRssTitles.each(function( index ){
        var limit = 90; var linkText = $(this).text();

        if($(this).text().length > limit){
            $(this).text(linkText.substring(0,limit) + '...');
        }
    });
});