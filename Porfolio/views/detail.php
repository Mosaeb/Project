<?php include 'header.php'?>
<section class="py-5">
    <div class="container bg-warning">
        <div class="row">
            <div class="col-md-6 py-3 px-3">
                <div class="card card-body ">
                    <img src="<?php echo $service['image1']; ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 pt-3 ">
                <h3 class="text-dark-emphasis"><?php echo $service['name']; ?></h3>
                <p style="text-align: justify" class="text-info-emphasis"><?php echo $service['description']; ?></p>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>