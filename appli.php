 <?php 
if (!count($_GET)||isset($_GET['/0'])) {
        foreach($rssAppli->channel->item as $item){
  $numberItem++;
?>
                            
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <img src="<?php echo $item->enclosure{'url'}; ?>" alt="" class="circle">
                                    <span class="title <?php echo $color; ?>"><?php echo $item->title; ?></span>
                                    <p><?php echo $date ?><br>
                                                                     <a class="waves-effect waves-light btn modal-trigger" href="#modal<?php echo $numberItem ?>">Description</a>

                                        <!-- Modal Structure -->
                                    <div id="modal<?php echo $numberItem ?>" class="modal">
                                        <div class="modal-content">
                                            <h4><?php echo $item->title; ?></h4>
                                            <p><?php echo $item->description; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href=" #! " class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                        </div>
                                    </div>



                                    <a href="<?php echo utf8_decode($item->link); ?>">lien vers l'article</a>
                                        <a href="<?php echo utf8_decode($item->link); ?>">lien vers l'article</a>
                             

                                </li></ul>
                            <p><?php
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
    ?>  </p>
  
                                    

                                </li></ul>

<?php }}else{
    for($article=0;$article<$_COOKIE['number'];$article++){

     

?>
                            
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <img src="<?php echo $rssAppli->channel->item[$article]->enclosure{'url'}; ?>" alt="" class="circle">
                                    <span class="title <?php echo $color; ?>"><?php echo $rssAppli->channel->item[$article]->title; ?></span>
                                    <p><?php echo $date ?><br>
                                                                     <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                                        <!-- Modal Structure -->
                                    <div id="modal<?php echo $modal?>" class="modal">
                                        <div class="modal-content">
                                            <h4><?php echo $rssAppli->channel->item[$article]->title; ?></h4>
                                            <p><?php echo $rssAppli->channel->item[$article]->description; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href=" #! " class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                        </div>
                                    </div>



                                    <a href="<?php echo utf8_decode($rssAppli->channel->item[$article]->link); ?>">lien vers l'article</a>
                                        <a href="<?php echo utf8_decode($rssAppli->channel->item[$article]->link); ?>">lien vers l'article</a>
                                    </p>

                                </li></ul>
                            <p><?php
                                $datetime = date_create($rssAppli->channel->item[$article]->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
    ?>  </p>
  
                                    

                          
                            
        <?php }}?>
