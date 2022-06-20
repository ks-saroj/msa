<?php
$post_id = getIdBySlug('section-counter','sections');
$counters = CFS()->get('counter',$post_id);
//?>
<section class="counter-section ks-spt">
    <div class="container">
        <div class="counter-row">
            <?php foreach($counters as $counter):
                ?>
            <div>
                <figure>
                    <img src="<?php echo $counter['icon']; ?>" class="img-fluid cover-image" alt="<?php echo $counter['count_description']; ?>">
                </figure>
                <span class="count-number"><?php echo $counter['count_value']; ?></span>
                <p>
                    <?php echo $counter['count_description']; ?>
                </p>
            </div>
           <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<!---->
<?php
//$post_id = getIdBySlug('section-counter','sections');
//$counters = CFS()->get('counter',$post_id);
//?>
<!--<section class="counter-section ks-spt">-->
<!--    <div class="container">-->
<!--        <div class="counter-row">-->
<!--            --><?php //foreach($counters as $counter): ?>
<!--                <div>-->
<!--                    <figure>-->
<!--                        <img src="--><?php //echo $counter['icon']; ?><!--" alt="">-->
<!--                    </figure>-->
<!--                    <span class="count-number">--><?php //echo $counter['count_value']; ?><!--</span>-->
<!--                    <p>-->
<!--                        --><?php //echo $counter['count_description']; ?>
<!--                    </p>-->
<!--                </div>-->
<!--            --><?php
//            endforeach;
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->