<!DOCTYPE html>
<html>
  <head>
    <title>Academy Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

  </head>
  <body id="home">

    <section class="container">
        <div class="content row">
          
            <?php include "assets/php/header.php"; ?>
            <?php include "assets/php/carousel.php"; ?>
            <section class="main col col-lg-8">
               <?php include "assets/php/article-intro.php"; ?>
               <?php include "assets/php/article-about.php"; ?>
               <?php include "assets/php/article_featured.php"; ?>
          </section>
          <section class="main col col-lg-4">
            <?php include "assets/php/aside-register.php"; ?>
            <?php include "assets/php/aside-gallery.php"; ?>
            <?php include "assets/php/aside-accordion.php"; ?>
           <h2>Live Action Films</h2> 
           <ul>
             <li>1940s Serials</li>
               <ul>
                <a href="http://www.imdb.com/title/tt0035665/"> <li>Batman (1943)</li></a>
                <a href="http://www.imdb.com/title/tt0041162/"> <li>Batman and Robin (1949)</li></a>
             </ul>

             <li>1960s Batman</li>
               <ul>
                 <a href="http://www.imdb.com/title/tt0060153/"><li>Batman (1966)</li></a>
               </ul>
             <li>Burton and Schumacher Series</li>
             <ul>
               <a href="http://www.imdb.com/title/tt0096895/"><li>Batman (1989)</li></a>
               <a href="http://www.imdb.com/title/tt0103776/"><li>Batman Returns (1992)</li></a>
               <a href="http://www.imdb.com/title/tt0112462/"><li>Batman Forever (1995)</li></a>
               <a href="http://www.imdb.com/title/tt0118688/"><li>Batman & Robin (1997)</li></a>
             </ul>

             <li>Nolan Series</li>
             <ul>
               <a href="http://www.imdb.com/title/tt0372784/"><li>Batman Begins (2005)</li></a>
                <a href="http://www.imdb.com/title/tt0468569/"><li>The Dark Knight (2008)</li></a>
               <a href="http://www.imdb.com/title/tt1345836/"><li>The Dark Knight Rises (2012)</li></a>
             </ul>

           </ul>

         </section>
        </div>
         <?php include "assets/php/footer.php" ?>
    </section>  
    

  </body>
</html>