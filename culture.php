 <?php
                   
                     for($article=0;$article<$_COOKIE['number'];$article++){
                            $datetime = date_create($rssAppli->channel->item[$article]->pubDate);
                           
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
                                            <h4>Modal Header</h4>
                                            <p><?php echo $rssAppli->channel->item[$article]->description; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href=" #! " class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                        </div>
                                    </div>
                                    
                                        <a href="<?php echo utf8_decode($rssAppli->channel->item[$article]->link); ?>">lien vers l'article</a>
                                    </p>

                                </li></ul>





                        <?php }
                        ?>
