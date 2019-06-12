        <?php
      if (!count($_GET)||isset($_GET['/0'])) {
        foreach($rssSecurity->channel->item as $item){
            $numberItem++;
                          
                            $datetime = date_create($item->pubDate);
                              $date = date_format($datetime, 'd M Y, H\hi');
                            ?>
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <img src="<?php echo $item->enclosure{'url'}; ?>" alt="" class="circle">
                                    <span class="title <?php echo $_COOKIE['color']; ?>"><?php echo $item->title; ?></span>
                                    <p><?php echo $date ?><br></p>
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



                                    <a href="<?php echo utf8_decode($item[$article]->link); ?>">lien vers l'article</a>
                                    

                                </li></ul>

                            <?php
      }}else{
           for($article=0;$article<$_COOKIE['number'];$article++){
            
                          
                            $datetime = date_create($rssSecurity->channel->item[$article]->pubDate);
                            $date = date_format($datetime, strftime('%A %d %B %Y.'));
                            ?>
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <img src="<?php echo $rssSecurity->channel->item[$article]->enclosure{'url'}; ?>" alt="" class="circle">
                                    <span class="title <?php echo $color; ?>"><?php echo $rssSecurity->channel->item[$article]->title; ?></span>
                                    <p><?php echo $date ?><br></p>
                                        <a class="waves-effect waves-light btn modal-trigger" href="#modal<?php echo $article ?>">Description</a>

                                        <!-- Modal Structure -->
                                    <div id="modal<?php echo $article ?>" class="modal">
                                        <div class="modal-content">
                                            <h4><?php echo $rssSecurity->channel->item[$article]->title; ?></h4>
                                            <p><?php echo $rssSecurity->channel->item[$article]->description; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href=" #! " class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                        </div>
                                    </div>



                                    <a href="<?php echo utf8_decode($rssSecurity->channel->item[$article]->link); ?>">lien vers l'article</a>
                                    

                                </li></ul>
          
          
     <?php }}
                        ?>

