$(document).ready(function(){
    $.getJSON("https://newsapi.org/v1/articles?source=ign&sortBy=top&apiKey=e1df48e5b2304cc7b79f558b2a24af08", function(data){
        var counter=0;
        $.each(data.articles, function(key, value){
            $('#news-list').append("<li><a href="
            + value.url + "><img src='"
            + value.urlToImage +"'/></a>"
            + "<h4><a href="
            + value.url +">"
            + value.title + "</a></h4></li>");
            counter++;
            //API didn't allow limit to results so just getting top 3 by counting
            if(counter == 3){
                return false;
            }
        })
    })
});