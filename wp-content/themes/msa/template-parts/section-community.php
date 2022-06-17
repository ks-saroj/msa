<?php
$communities = CFS()->get('community');
?>
<section class="community-section section-padding-top">
    <div class="container">
        <?php
        foreach ($communities as $k => $item):
        ?>
        <div class="row">
            <div class="col-md-12 boxes">
                <div class="container">
                    <div class="row <?php echo ($k % 2 == 0)?'flex-row-reverse':'' ?>">
                        <div class="col-md-6">
                            <div class="right-box">
                                <div class="team-logo" data-aos="fade-up" data-aos-duration="800">
                                    <img
                                        src="<?php echo $item['logo'] ?>"
                                        class="img-fluid"
                                        alt=""
                                    />
                                </div>
                                <div class="team-details" data-aos="fade-up" data-aos-duration="800">
                                    <h2 class="dark-blue"><?php echo $item['title']; ?></h2>
                                    <p>
                                        <?php echo $item['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-box" data-aos="fade-up" data-aos-duration="800">
                                <img
                                    src="<?php echo $item['thumbnail']; ?>"
                                    class="img-fluid"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</section>