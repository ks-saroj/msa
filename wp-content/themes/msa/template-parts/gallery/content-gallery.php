<?php
$gallery = CFS()->get('gallery');
if($gallery):
    ?>
    <section class="ks-gallery">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 px-xs-0">
                        <div class="ks-gallery-grid two-col-grid">
                            <?php
                            foreach ($gallery as $item):
                                ?>
                                <div class="ks-gallery-grid-item">
                                    <a href="<?php echo $item["image"]; ?>" class="gallery-link">
                                        <div
                                                class="boxes"
                                                data-aos="fade-down"
                                                data-aos-duration="2000"
                                        >
                                            <div class="images-box">
                                                <img
                                                        src="<?php echo $item["image"]; ?>"
                                                        class="img-fluid"
                                                        alt="<?php echo $item["caption"]; ?>"
                                                />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>