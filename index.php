<?php

$bg_color = 'DodgerBlue';
$hostname = gethostbyname();

#<?php echo($bg_color);?>

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: DodgerBlue;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: White;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: DodgerBlue;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h2>Simple PHP APP</h2>
        </header>
        <section>
            <article>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Integer enim neque volutpat ac tincidunt vitae semper. Id eu nisl nunc mi ipsum faucibus vitae aliquet. 
                Et pharetra pharetra massa massa ultricies. Nisl condimentum id venenatis a condimentum vitae sapien. 
                Posuere ac ut consequat semper viverra. Facilisi etiam dignissim diam quis enim. Sed odio morbi quis commodo. 
                Neque gravida in fermentum et. Pellentesque pulvinar pellentesque habitant morbi. 
                Massa ultricies mi quis hendrerit dolor magna. Aliquam malesuada bibendum arcu vitae. 
                Mi sit amet mauris commodo quis imperdiet massa. In est ante in nibh mauris cursus mattis. 
                Ac tortor vitae purus faucibus ornare.
                <p>
            </article>
        </section>
        <footer>
            <?php print "<p> Content Served by container id: ".$hostname. "</p>";?>
        </footer>
        
        <script src="" async defer></script>
    </body>
</html>