$(document).ready(function () {

    var source = $("#card-template").html();
    var template = Handlebars.compile(source);


     $.ajax( {
          url: 'server.php',
          method: 'GET',
          success: function (data) {
               console.log(data);
               var albums = data;
               for (var i = 0; i < albums.length; i++) {
                    var album = albums[i];
                    var dataAlbum = {
                    cover: album.cover,
                    album: album.title,
                    artist: album.artist,
                    year: album.year
                    }
                var albumCard = template(dataAlbum);
                $('.card-container').append(albumCard);

               }
          },
          error: function (error) {
               alert('BOOM');
          }
     });














});
