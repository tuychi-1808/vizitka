<div class="about-area pt-50 m-50">
    <div class="container">
        <?php

        $result = $DB->query("SELECT * FROM product_sample");
        foreach ($result as $row):
        ?>
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="about-detalis">
                    <div class="section-title">
                        <h2><?php echo $row['title']?></h2>
                    </div>
                    <div class="about-text mb-35">
                        <p><?php echo $row['text']?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <a href="adminpanel/<?php echo $row['location']?>">
                    <img src="adminpanel/<?php echo $row['location']?>" width="300" height="300" alt="image" class="mb-50 img-responsive">
                </a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>