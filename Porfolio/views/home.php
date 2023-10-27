<?php include 'header.php'?>
                           <!--Carousel Start-->
<section>
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carousel1.jpg" class="w-100" height="500" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel2.jpg" class="w-100 " height="500" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel3.jpg" class="w-100" height="500" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel4.jpg" class="w-100" height="500" alt="">
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
                             <!-- Carousel End-->

<section class="py-5">
    <div class="container bg-dark text-warning mypic py-5 px-5">
        <div class="row">
            <h5>Hi!</h5>
            <h4>I am Mosaeb Bin Mozib</h4>
            <h3>Web Designer and Full-Stack Developer</h3>
            <h2>SkyDo Software Ltd</h2>
            <div class="col-md-12">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li><a href="https://www.facebook.com/profile.php?id=100009445450807&mibextid=2JQ9oc" class="text-warning nav-link nav1"><i class="fa-brands fa-facebook fa-lg"></i></a></li>
                        <li><a href="https://github.com/Mosaeb" class="mb-3 nav-link text-warning nav1"><i class="fa-brands fa-github fa-lg"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mosaeb-bin-mozib-251931264/" class="mb-3 nav-link text-warning nav1"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container bg-dark text-warning text-center">
        <div class="row">
            <h4>We making the following websites</h4>
        </div>
    </div>
</section>

                               <!--Card start-->
<section class="py-3">
    <div class="container">
        <div class="row bg-warning p-1 rounded-3">
            <?php foreach ($services as $service) { ?>
            <div class="col-md-3 mt-4 mb-4">
                <div class="card h-100 border border-5 border-info-subtle-subtle">
                    <img src="<?php echo $service['image'];?>"  alt="">
                    <div class="card-body bg-dark text-warning">
                        <h5><?php echo $service['name'];?></h5>
                        <hr/>
                        <a href="web.php?page=detail&&id=<?php echo $service['id'];?>" class="btn btn-warning text-dark text-info-emphasis">Read More</a>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
    </div>
</section>
                                <!--Card End-->
<?php include 'footer.php'?>
