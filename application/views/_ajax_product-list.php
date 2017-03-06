<!-- START: HOTEL LIST VIEW -->
<div class="switchable col-md-12 clear-padding">
    <?php foreach($product as $p ): ?>
        <div  class="hotel-list-view">
            <div class="wrapper">
                <div class="col-md-4 col-sm-6 switch-img clear-padding">
                    <img class="photo" src="<?= base_url() ?>uploads/<?=$p->image?>" alt="cruise">
                </div>
                <div class="col-md-6 col-sm-6 hotel-info">
                    <div>
                        <div class="hotel-header">
                            <h5>
                                <?=$p->title?> <span>
                                                    <?php if($p->star != 0 ){
                                                        ?>
                                                        <?= repeater( '<i class="fa fa-star colored"></i>' ,$p->star ) ?>
                                                        <?= repeater( '<i class="fa fa-star-o colored"></i>' , 5-$p->star) ?>
                                                        <?php
                                                    } ?>
                                                </span>
                            </h5>
                            <p><i class="fa fa-map-marker"></i><?= $p->location ?><i class="fa fa-phone"></i><?=$p->phone?></p>
                        </div>
                        <div class="hotel-desc">
                            <p><?= $p->short ?></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-2 rating-price-box text-center clear-padding">
                    <div class="room-book-box">
                        <div class="price">
                            <h5><?= $p->price ?>/= Avg/Night</h5>
                        </div>
                        <div class="book">
                            <a href="<?= current_url() ?>/detail/<?=url_title($p->title)?>/<?= $this->encrypt->myEncode( $p->id )?>">BOOK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END: HOTEL LIST VIEW -->
</div>
<div class="clearfix"></div>
<!-- START: PAGINATION -->
<div class="bottom-pagination">
    <nav class="pull-right">
        <ul class="pagination pagination-lg">
            <?php if (ceil($count / LIMIT) != 1): ?>
                <?php
                $link = $this->input->get('url')."?";
                foreach($this->input->get() as $k => $v ){
                    if(is_array($v))  {foreach($v as $x => $y ) if($y != ""){$link .=  $k."[$x]=".myUrlEncode($y)."&";}  }
                    else if( $k != 'page_id'  ) $link .=  "$k=".myUrlEncode($v)."&";
                }
                ?>
                <?php for ($i = 0; $i < ceil($count / LIMIT); $i++): ?>
                    <?php if ($i + 1 == $this->input->get('page_id') || (!$this->input->get('page_id') && $i == 0)): ?>
                        <li class="active"><a href="#"> <?= $i + 1 ?> <span class="sr-only">(current)</span></a></li>
                    <?php else : ?>
                        <li><a href="<?= $link ?>page_id=<?= $i + 1 ?>"> <?= $i + 1 ?> <span class="sr-only">(current)</span></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<!-- END: PAGINATION -->