
<?php
setlocale(LC_TIME, 'fr', 'fr_FR.UTF8');

$security = "https://www.01net.com/rss/actualites/securite/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssSecurity = simplexml_load_file($security);
$appli = "https://www.01net.com/rss/actualites/applis-logiciels/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssAppli = simplexml_load_file(utf8_decode($appli));
$culture = "https://www.01net.com/rss/actualites/culture-medias/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssCulture = simplexml_load_file($culture);
$login = $_POST['login'];
$password = $_POST['password'];
$loginValid = 'Moi';
$passwordValid = 'Moi';
$color = $_POST['color'];
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
        <?php if (isset($_POST['login']) && isset($_POST['password'])) {
            if ($loginValid == $_POST['login'] && $passwordValid == $_POST['password']) {
                ?>




                <div class="row">
                    <div class="col s3"> 
                        <?php
                        echo '<ul>';
                        foreach ($rssSecurity->channel->item as $item) {
                            ?><p><?php
                             echo $item->enclosure;
                                echo $item->title;
                                
                                echo $item->guid;
                                echo $item->description;
                                ?></p><?php
                            $datetime = date_create($item->pubDate);
                            $date = date_format($datetime, strftime('%A %d %B %Y.'));
                            echo '<li><a href="' . utf8_decode($item->link) . '">' . utf8_decode($item->title) . '</a> (' . $date . ')</li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <div class="col s3">
                        <?php
                        echo '<ul>';
                        foreach ($rssAppli->channel->item as $item) {?>

<p><?php
                             echo $item->enclosure{'url'};
                                echo $item->title;
                                
                                echo $item->guid;
                                echo $item->description;
                                ?></p><?php
                           
                            $datetime = date_create($item->pubDate);
                            $date = date_format($datetime, 'd M Y, H\hi');
                            echo '<li><a href="' . $item->link . '">' . utf8_decode($item->title) . '</a> (' . $date . ')</li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <div class="col s3">
                        <?php
                        echo '<ul>';
                        foreach ($rssCulture->channel->item as $item) {?>
                          <ul class="collection">
    <li class="collection-item avatar">
      <img src="<?php   echo $item->enclosure{'url'};?>" alt="" class="circle">
      <span class="title"><?php echo $item->title;?></span>
      <p><?php echo $date ?><br>
         
      </p>
       <a href="<?php echo$item->link;?>" class="secondary-content"><i class="material-icons">grade</i></a>
    </li></ul>
                            <p><?php
                       
                                echo $item->description;
                                ?></p><?php
                             $datetime = date_create($item->pubDate);
                            $datetime = date_create($item->pubDate);
                            $date = date_format($datetime, 'd M Y, H\hi');
                            echo '<li><a href="' . $item->link . '">' . utf8_decode($item->title) . '</a> (' . $date . ')</li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                </div><?php
            } else {
                
            }
        } else {
            ?>
            <form method="post" action="index.php">
                <label for="login">Login :</label><input id="login" name="login" type="text" />
                <label for="password">Mot de passe :</label><input name="password" type="password" />
                <label>
                    <input name="color" type="checkbox" value="rouge" />
                    <span>Rouge</span>
                </label>
                <label>
                    <input name="color" type="checkbox" value="bleu" />
                    <span>Bleu</span>
                </label>
                <label>
                    <input name="color" type="checkbox" value="noir" />
                    <span>Noir</span>
                </label>
                <input type="number" max="3"/>


                <div><input  type="submit" value="Valider"/></div>
            </form> 
            <?php
        }
        ?> 













        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
        <script src="script.js"></script>
    </body>
</html>