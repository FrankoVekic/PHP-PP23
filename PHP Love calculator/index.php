
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Love Calculator</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br>
    
    <div class="large-3 large-centered columns">
    <div class="login-box" style="margin-top: 100px; margin-left:-300px; margin-right:350px;">
    <div class="row">
    <div class="text1">
               <p>Napiši svoje ime i ime svoje simpatije.
                 Nakon toga ispod svakog slova napiši koliko se puta
                 ono ponavlja. Svaki prvi broj ispod svog imena i 
                 posljednji broj ispod imena tvoje simpatije, i tako 
                 ponovi sa svakim sljedećim brojem. Kad završiš s 
                 prvim retkom, prijeđi na zbrajanje brojeva u drugom 
                 retku, a onda u trećem. Na kraju, kad dobiješ zbroj u 
                 četvrtom retku, saznat ćeš koliko posto šanse imaš 
                 razviti ljubav sa svojom simpatijom. Što si bliže 
                 broju 100, to bolje! Sretno!
               </p>
            </div>
            <hr>
    <div class="large-12 columns">
        <h4 class="text-center"><p>Upišite željena imena</p></h4>
        <form action="" method="post">
        <div class="row">
           <div class="large-12 columns">
               <input type="text" name="name1" placeholder="Prvo ime" />
            </div>
        </div>
        <div class="row">
           <div class="large-12 columns">
               <input type="text" name="name2" placeholder="Drugo ime" />
           </div>
         </div>

</div>
    </div>
        <div class="row">
          <div class="large-12 large-centered columns">
            <input type="submit" name="submit" class="button expand" value="Izračunaj postotak ljubavi."/>
          </div>
          </div>
         </div>
            <div class="output">
            <?php

              include 'lovecalc.php';

              ?>
              </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

