<?php include 'header.php'?>
<section class="py-5 bg-warning">
    <div class="container py-5 ">
        <div class="row p-3">
            <div class="col-md-6 mx-auto">
                <div class="card border-3 border-dark">
                    <div class="card-header fw-bold border-3 border-dark bg-dark text-warning">
                        LOGIN
                    </div>
                    <div class="card-body bg-warning-subtle">
                        <p class="text-danger fw-bold text-center"><?php echo isset($_GET['message']) ? $_GET['message'] : '';?></p>
                        <form action="web.php" method="post">
                            <div class="row mb-5 ">
                                <label for="" class="col-md-5 fw-bold">User Name:</label>
                                <div class="col-md-7 ">
                                    <input type="text" class="form-control fw-bold border-3 border-dark" name="user_name">
                                </div>
                            </div>

                            <div class="row mb-5 ">
                                <label for="" class="col-md-5 fw-bold">Password:</label>
                                <div class="col-md-7 ">
                                    <input type="password" class="form-control fw-bold border-3 border-dark" name="password">
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <div class="col-md-9 mx-auto px-3 ps-3">
                                    <input type="submit" name="login_btn" class="fw-bold border-3 border-dark btn btn-info" value="Login">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
