<?php include 'header.php'?>
<section class="py-5">
    <div class="container bg-warning">
        <div class="row">
            <div class="col-md-6 pt-3">
                <div class="row mx-auto">
                    <div class="col-md-12 text-info-emphasis">
                        <h2>So, who am I?</h2>
                    </div>
                    <div class="col-md-12 pt-4">
                        <div class="container bg-dark text-warning rounded-5">
                            <p style="text-align: justify" class="py-4 fw-semibold text-justify"><?php echo $abouts['about']; ?></p>
                        </div>
                        <nav class="navbar navbar-expand py-3">
                            <ul class="navbar-nav mx-auto">
                                <p class="pt-1 pe-2 fw-bolder text-info-emphasis">Contact Me:</p>
                                <li><a href="https://www.facebook.com/profile.php?id=100009445450807&mibextid=2JQ9oc" class="text-dark nav-link nav1"><i class="fa-brands fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://github.com/Mosaeb" class="mb-3 nav-link text-dark nav1"><i class="fa-brands fa-github fa-lg"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/mosaeb-bin-mozib-251931264/" class="mb-3 nav-link text-dark nav1"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="col-md-6 py-3 px-3">
<!--                <div class="card card-body border-0 ">-->
                    <img class="img-fluid w-75 m-2 ms-5 border border-5 border-dark" src="<?php echo $abouts['image'];?>" alt="">
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
