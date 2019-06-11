
<?php
$security = "https://www.01net.com/rss/actualites/securite/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssSecurity = simplexml_load_file($security);
$appli = "https://www.01net.com/rss/actualites/applis-logiciels/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssAppli = simplexml_load_file($appli);
$culture = "https://www.01net.com/rss/actualites/culture-medias/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssCulture = simplexml_load_file($culture);
?>
<!DOCTYPE html>
 <html lang="fr" dir="ltr">
 <head>
<meta charset="utf-8" />
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link type="text/css" rel="stylesheet" href="style.css"/>
<title>Projet Xml</title>

  </head>

  <body>

      <div class="row"><div class="col s3"><?php
echo '<ul>';
foreach ($rssSecurity->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
}
echo '</ul>';?>
              </div>
          <div class="col s3">
              <?php
echo '<ul>';
foreach ($rssAppli->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
}
echo '</ul>';?>
          </div>
          <div class="col s3">
              <?php
echo '<ul>';
foreach ($rssCulture->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
}
echo '</ul>';?>
          </div>
</div>




 

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script src="script.js"></script>
    </body>
</html>

