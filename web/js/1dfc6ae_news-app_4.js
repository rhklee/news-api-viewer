$(document).ready(function(){
   var filterList = new List('news-site-list', { valueNames: ['newsSiteName'] });

   $('.sources').click(function(event){
      event.preventDefault();

      var newsSourceId = $(this).attr('id');
      var xhr = $.ajax({
         type: 'POST',
         url: '/news/getArticles',
         data: { newsId : newsSourceId },
         success: function(returnJson) {
            $('div#' + newsSourceId).empty();

            for(i=0; i < returnJson.articles.length; i++){
               $('div#' + newsSourceId).append(
                  "<a target='_blank' class='collection-item' href='" + 
                  returnJson.articles[i].url +
                  "'>" + returnJson.articles[i].title +
                  "</a>"
               );
            }
         },
         error: function(XMLHttpRequest){
            console.error('Error in making news article request for ' + newsSourceId);
         }
      });
   });
});
