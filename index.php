<?php

session_start();
if(isset($_POST['number'])) {
setcookie('number',$_POST['number'],time()+360,'/','ProjetXml',false,true);
}
if(isset($_POST['login'])) {
setcookie('login',$_POST['login'],time()+360,'/','ProjetXml',false,true);
}
if(isset($_POST['password'])) {
setcookie('password',$_POST['password'],time()+360,'/','ProjetXml',false,true);
}
if(isset($_POST['color'])) {
setcookie('color',$_POST['color'],time()+360,'/','ProjetXml',false,true);
}
if(COUNT($_POST)===4){
    header('Location: index.php');
}
setlocale(LC_TIME, 'fr', 'fr_FR.UTF8');

$security = "https://www.01net.com/rss/actualites/securite/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssSecurity = simplexml_load_file($security);
$appli = "https://www.01net.com/rss/actualites/applis-logiciels/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssAppli = simplexml_load_file(utf8_decode($appli));
$culture = "https://www.01net.com/rss/actualites/culture-medias/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rssCulture = simplexml_load_file($culture);

$password = $_POST['password'];
$deconnexion=$_POST['deconnexion'];
if(!empty($deconnexion)){
    session_abort();
       header('Location: index.php');
}

$page=[0,1,2,3];
$numberItem=0;
//if(isset($color)&&$color==rouge){
//    
//}elseif(isset($color)&&$color==bleu){
//    
//}elseif(isset($color)&&$color==noir){
//    
//}
 

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

    <body class="">   
     
        <!-- **** NAVBAR ****-->
        <div class="navbar-fixed">
            <nav class="text-black">
               

                    <div class="nav-wrapper grey darken-4">
                        <ul class="hide-on-med-and-down menuAccueil">
                            <li><a href="/page=<?php echo $page[0] ?>.html">Accueil</a></li>
                             <li><img src="logo.png" /></li>
                        </ul>
                        <!-- Logo -->
                       
                      
                        <!-- MENU -->
                        <ul class="hide-on-med-and-down menuText">
                           
                            <li><a href="/page=<?php echo $page[1] ?>.html" class="">Sécurité</a></li>
                            <li><a href="/page=<?php echo $page[2] ?>.html">Application</a></li>
                            <li><a href="/page=<?php echo $page[3] ?>.html" class="">Culture et Média</a></li>
                        </ul> 
                        <!-- LOGIN -->
                        <ul class="hide-on-med-and-down right">
                            <li><a href="#modalLogin" class="menuLogin modal-trigger"><i class="material-icons left">
                                        account_circle</i>Login</a>
                                  <!-- Modal Trigger -->
<!--  <a class="waves-effect waves-light btn modal-trigger" >Modal</a>-->

  <!-- Modal Structure -->
  <div id="modalLogin" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
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
                 
                    <div> <label><input name="number" type="checkbox" value="3"/>
                        <span>3</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="5"/>
                        <span>5</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="8" />
                        <span>8</span>
                    </label></div>


                    <div></div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat"><input name="deconnexion" type="submit" value="Se déconnecter"/></a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat"><input  type="submit" value="Valider"/></a>
    </div>
                      </form> 

  </div>
                            </li>
                            <li> </li>
                                        
                                        
                            <li><a href="#modalRegister" class="menuLogin modal-trigger"><i class="material-icons left">lock</i>S'enregistrer</a>
                    
                      
                                    
                                  <!-- Modal Trigger -->
<!--  <a class="waves-effect waves-light btn modal-trigger" >Modal</a>-->

  <!-- Modal Structure -->
  <div id="modalRegister" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
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
                 
                    <div> <label><input name="number" type="checkbox" value="3"/>
                        <span>3</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="5"/>
                        <span>5</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="8" />
                        <span>8</span>
                    </label></div>


                    <div><input  type="submit" value="Valider"/></div>
                </form> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Valider</a>
    </div>
  </div>     
                            </li><li>
                            <a href="#settings" class="menuLogin modal-trigger">Paramètre</a>
                    
                      
                                    
                                  <!-- Modal Trigger -->
<!--  <a class="waves-effect waves-light btn modal-trigger" >Modal</a>-->

  <!-- Modal Structure -->
  <div id="settings" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4 class=" text-black">Modal Header</h4>
         <form method="post" action="index.php">
             <p class="text-black">changer de couleur</p>
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
                 
                    <div> <label><input name="number" type="checkbox" value="3"/>
                        <span>3</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="5"/>
                        <span>5</span>
                    </label>
                    <label>
                        <input name="number" type="checkbox" value="8" />
                        <span>8</span>
                    </label></div>


                    <div><input  type="submit" value="Modifier"/></div>
                </form> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Valider</a>
    </div>
  </div>  
                            </li>
                        </ul>
                    </div>
                    
                </nav>
            </div>
            <?php
          
            if (!count($_GET)) {
                require_once('index.php');
            }
            if (isset($_GET['/0'])) {
                 require_once('index.php');
            } else {
                
            }
            if (isset($_GET['/1'])) {
 require_once('security.php');
              
            } else {
                
            }
            if (isset($_GET['/2'])) {
                require_once('appli.php');
            } else {
                
            }
                 if (isset($_GET['/3'])) {
                require_once('culture.php');
            } else {
                
            }
            ?>



    <?php
    if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
     
           if(!count($_GET)||isset($_GET['/0'])){ ?>
                    <div class="row">

                        <div class="col s4"> <?php
            require_once('security.php');
            ?>
                        </div>
                        <div class="col s4">
                            <?php require_once('appli.php'); ?>

                        </div>
                        <div class="col s4">
                            <?php require_once('culture.php'); ?>
                        </div>
                    </div><?php
            } else {
                
            }
        } else {echo 'veuillez vous connecter';
            ?>
          
        <?php
    }
    ?> 





<!--            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo $item->enclosure{'url'}; ?>">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $item->title; ?><i class="material-icons right">more_vert</i></span>
                    <p><a href="<?php echo utf8_decode($item->link); ?>">lien vers l'article</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>-->



        <div class="separatorNav1"></div>
        <div class="separatorNav2"></div>
        <!-- Footer -->
        <footer>
            <div class="footer-copyright">
                <div class="container">
                    <span class="footerText">© 2019. Quentin / Dorian</span>
                </div>
            </div>
        </footer>


        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
        ></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>

        <script src="script.js"></script>

    </body>
</html>