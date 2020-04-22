<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="dist/css/app.css">
          <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
          <title>Spotify </title>
     </head>
     <body>

          <header>
               <div class="header container">
                    <div id="logo">
                         <a href="#">
                              <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.soft32.com%2Fblog%2Fwp-content%2Fuploads%2F2016%2F08%2Fspotify_logo.png&f=1&nofb=1" alt="logo">
                         </a>
                    </div>
               </div>
          </header>

          <main>

               <div class="card-container">

               </div>
               <script id="card-template" type="text/x-handlebars-template">
                    <div class="card" data-genere="{{genere}}">
                        <img class="cover"src="{{cover}}" alt="">
                        <h3 class="album">{{album}}</h3>
                        <span class="artist">{{artist}}</span>
                        <span class="year">{{year}}</span>
                    </div>
               </script>
          </main>

          <footer>
          </footer>


          <script src="dist/js/main.js" charset="utf-8"></script>

     </body>
</html>
