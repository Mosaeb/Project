<?php include 'header.php'?>
<section class="py-5 bg-warning">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center text-info-emphasis">
                <h2>Project</h2>
                <hr class="new1">
            </div>
            <div class="col-md-4 py-3 text-danger-emphasis">
                <h4 class=""><?php echo $projects['p_name1']; ?></h4>
                <h4 class="pt-2"><?php echo $projects['p_name2']; ?></h4>
                <h4 class="pt-5"><?php echo $projects['p_name3']; ?></h4>
                <h4 class="pt-3"><?php echo $projects['p_name4']; ?></h4>
                <h4 class="pt-5"><?php echo $projects['p_name5']; ?></h4>
            </div>
            <div class="vl col-md-1"></div>
            <div class="col-md-7 py-3 ms-auto text-dark-emphasis">
                <h4 class="text-start"><?php echo $projects['p_title1']; ?></h4>
                <p style="text-align: justify"><?php echo $projects['p_description1']; ?></p>
                <h4 class="text-start"><?php echo $projects['p_title2']; ?></h4>
                <p style="text-align: justify"><?php echo $projects['p_description2']; ?></p>
                <h4 class="text-start"><?php echo $projects['p_title3']; ?></h4>
                <p style="text-align: justify"><?php echo $projects['p_description3']; ?></p>
                <h4 class="text-start"><?php echo $projects['p_title4']; ?></h4>
                <p style="text-align: justify"><?php echo $projects['p_description4']; ?></p>
                <h4 class="text-start"><?php echo $projects['p_title5']; ?></h4>
                <p style="text-align: justify"><?php echo $projects['p_description5']; ?></p>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php.'?>
