
<div class="slider-area  slider-area-6  owl-carousel position-relative">
    <?php
    $result = $DB->query("SELECT * FROM nav_slider");
    foreach ($result as $row):
    ?>
    <div class="single-slide pb-185 pt-160" style="background-image: url(adminpanel/<?php echo $row['location'];?>);">
        <div class="slider-content slider-height ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-7 col-9 offset-xl-7 offset-lg-4 offset-md-2 offset-sm-2 offset-1">
                        <div class="hero-text pt-120">
                            <h1 class="pr-30 pb-10">
                                <?php echo $row['title'];?>
                            </h1>
                            <p><?php echo $row['text'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
   <!-- <div class="single-slide pb-185 pt-160" style="background-image: url(assets/img/slider/slider-bg-6.jpg);">
        <div class="slider-content slider-height ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-7 col-9 offset-xl-7 offset-lg-4 offset-md-2 offset-sm-2 offset-1">
                        <div class="hero-text pt-120">
                            <h1 class="pr-30 pb-10">
                                Men Ezy
                                Ankle Pants.
                            </h1>
                            <p>Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris. Morbi tortor arcu, commodo sit amet nulla sed.</p>
                            <a href="shop-detalis-page.html"><i class="fa fa-plus" aria-hidden="true"></i>Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide pb-185 pt-160" style="background-image: url(assets/img/slider/slider-bg-6.jpg);">
        <div class="slider-content slider-height ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-7 col-9 offset-xl-7 offset-lg-4 offset-md-2 offset-sm-2 offset-1">
                        <div class="hero-text pt-120">
                            <h1 class="pr-30 pb-10">
                                Men Ezy
                                Ankle Pants.
                            </h1>
                            <p>Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris. Morbi tortor arcu, commodo sit amet nulla sed.</p>
                            <a href="shop-detalis-page.html"><i class="fa fa-plus" aria-hidden="true"></i>Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

</div>