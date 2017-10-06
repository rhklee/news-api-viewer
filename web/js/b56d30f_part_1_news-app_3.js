$(document).ready(function(){

});




// $(document).ready(function(){
//    $('.sources').click(function(event){
//          event.preventDefault(); // stay here on page
//          var newsSourceId = $(this).attr("id");
//          var jqxhr = 
//          $.ajax({
//             type: "POST",
//             url: "/getArticles",
//             data: { newsId : newsSourceId },
//             success: function(returnJson) {
//              $('ol#'+newsSourceId).empty();
//              alert(returnJson.articles.length);

//              for(i = 0; i < returnJson.articles.length; i++){
//                $('ol#' + newsSourceId).append(
//                   "<li><a target='_blank' href='"+returnJson.articles[i].url+"'>"
//                   + returnJson.articles[i].title
//                   + "</a></li>");
//              }
//             },
//             error: function(XMLHttpRequest){
//                alert( "error" );
//             }
//          });
//     });

//    var filterList = new List('test-list', { valueNames: ['newsSiteName']});