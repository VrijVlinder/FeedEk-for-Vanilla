          
$(document).ready(function() {

$('#Panel').prepend('<div id="divRss"></div>');

$('#divRss').FeedEk({
    FeedUrl : 'http://rss.cnn.com/rss/edition.rss',
    MaxCount : 5,
    ShowDesc : true,
    ShowPubDate:true,
    DescCharacterLimit:100,
    TitleLinkTarget:'_blank',
    DateFormat:'MM/DD/YYYY',
    DateFormatLang:'en'
 
  });

});