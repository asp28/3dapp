$(document).ready(function() {
    loadImages();
});

function loadImages()
{
    var txt = "sprite bottle";
    // Create a URI for the Flickr web service API call
    var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    $.getJSON(urlFlickr,
      {
        tags: txt,
        tagmode:"all",
        format: "json"
      },
      function(data) {
        $.each(data.items, function(i,item){
          $("<img class='card-img-top img-fluid img-thumbnail'/>").attr("src", item.media.m).appendTo("#images");
          if ( i == 6 ) return false;
        });
      });
}