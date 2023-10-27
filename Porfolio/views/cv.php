<?php include 'header.php'?>
<section class="py-5">
    <div class="container bg-warning">
        <div class="row">
            <div class="col-md-4 bg-warning-subtle pt-4 ps-3 text-info-emphasis">
                <img src="<?php echo $cvs['image'];?>" class="img-fluid w-25 m-2 rounded-circle" alt="">
                <h4>Contact</h4>
                <p class="mb-0 fw-semibold"><?php echo $cvs['name'];?></p>
                <p class="mb-0 fw-semibold"><?php echo $cvs['address'];?></p>
                <p class="mb-0 fw-semibold">Email Id:<?php echo $cvs['email'];?></p>
                <p class="mb-0 fw-semibold">Mobile No:<?php echo $cvs['mobile'];?></p>
                <p class="mb-0 fw-semibold">Linkedin: <a href="https://www.linkedin.com/in/mosaeb-bin-mozib-251931264/" class="mb-3 text-warning nav1"><i class="fa-brands fa-linkedin fa-lg"></i></a></p>
                <p class="mb-0 fw-semibold">GitHub    :<a href="https://github.com/Mosaeb" class="text-warning nav1 ms-2"><i class="fa-brands fa-github fa-lg"></i></a></p>
                <h5 class="pt-4">Language</h5>
                <hr class="new1">
                <p class="fw-semibold"> <?php echo $cvs['language'];?></p>
                <h5 class="pt-4">Hobies</h5>
                <hr class="new1">
                <p class="fw-semibold">
                <ul>
                    <li><?php echo $cvs['hobbies1'];?></li>
                    <li><?php echo $cvs['hobbies2'];?></li>
                    <li><?php echo $cvs['hobbies3'];?></li>
                    <li><?php echo $cvs['hobbies4'];?></li>
                </ul>
                </p>
                <h5 class="pt-4">Skills</h5>
                <hr class="new1">
                <p class="mb-0 fw-semibold">Language: <?php echo $cvs['programming'];?></p>
                <p class="mb-0 pt-1 fw-semibold">Database:<?php echo $cvs['database'];?></p>
                <p class="mb-0 pt-1 fw-semibold">Framework:<?php echo $cvs['framework'];?></p>
                <p class="mb-0  pt-1 fw-semibold">Development Tools:<?php echo $cvs['dev_tools'];?></p>
                <p class="pb-3 pt-1 fw-semibold">MS office:<?php echo $cvs['ms_office'];?></p>

            </div>
            <div class="col-md-8 pb-5 pt-4 text-dark-emphasis">
                <h5 class="pt-4">Objectives</h5>
                <hr class="new1">
                <p style="text-align: justify" class="mb-0 fw-semibold"><?php echo $cvs['Objectives'];?></p>

                <h5 class="pt-4">Internships</h5>
                <hr class="new1">
                <p class="mb-0 fw-semibold">Company:<?php echo $cvs['company'];?></p>
                <p class="mb-0 pt-2 fw-semibold">Post:<?php echo $cvs['post'];?></p>
                <p style="text-align: justify" class="mb-0 pt-2 fw-semibold"><?php echo $cvs['description'];?></p>

                <h5 class="pt-4">Educational Qualification</h5>
                <hr class="new1">
                <div class="row">
                        <div class="col-md-8">
                            <p class="mb-0 fw-semibold">Bachelor of Science in Software Engineering (B.Sc. SE )</p>
                            <p class="mb-0 pt-1"><?php echo $cvs['university'];?></p>
                            <p class="mb-0 pt-1">CGPA:<?php echo $cvs['cgpa'];?></p>

                            <p class="mb-0 pt-2 fw-semibold">Higher Secondary Certificate (H.S.C.)</p>
                            <p class="mb-0 pt-1"><?php echo $cvs['college'];?></p>
                            <p class="mb-0 pt-1">GPA:<?php echo $cvs['gpa1'];?></p>
                            <p class="mb-0 pt-1">Group:<?php echo $cvs['group1'];?></p>

                            <p class="mb-0 pt-2 fw-semibold">Secondary School Certificate (S.S.C.)</p>
                            <p class="mb-0 pt-1"><?php echo $cvs['school'];?></p>
                            <p class="mb-0 pt-1">GPA:<?php echo $cvs['gpa2'];?></p>
                            <p class="mb-0 pt-1">Group:<?php echo $cvs['group2'];?></p>
                        </div>
                        <div class="col-md-4 ">
                            <p class="mb-0 fw-semibold"><?php echo $cvs['passed1'];?></p>
                            <p class="mb-0 py-3 fw-semibold mt-5"><?php echo $cvs['passed2'];?></p>
                            <p class="mb-0 py-4 fw-semibold mt-5"><?php echo $cvs['passed3'];?></p>
                        </div>
                </div>
                <h5 class="pt-4">References</h5>
                <hr class="new1">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0" ><?php echo $cvs['t_name1'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_versity_name'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_designation1'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_email1'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_address'];?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0" ><?php echo $cvs['t_name2'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_versity_name'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_designation2'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_email2'];?></p>
                        <p class="mb-0"><?php echo $cvs['t_address'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
