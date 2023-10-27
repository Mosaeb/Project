<?php include 'header.php'?>
    <section class="py-5 bg-warning">
        <div class="container ">
            <div class="row p-3">
                <div class="col-md-6 mx-auto">
                    <div class="card border-3 border-dark">
                        <div class="card-header fw-bold border-3 border-dark bg-dark text-warning">
                            Calculator Program
                        </div>
                        <div class="card-body bg-warning-subtle">
                            <form action="web.php" method="post">
                            <div class="row mb-5 ">
                                <label for="" class="col-md-5 fw-bold">Enter Your First Number:</label>
                                <div class="col-md-7 ">
                                    <input type="number" class="form-control fw-bold border-3 border-dark" name="first_number">
                                </div>
                            </div>

                                <div class="row mb-5 ">
                                    <label for="" class="col-md-5 fw-bold">Enter Your Second Number:</label>
                                    <div class="col-md-7 ">
                                        <input type="number" class="form-control fw-bold border-3 border-dark" name="second_number">
                                    </div>
                                </div>
                            <div class="row mb-5 ">
                                <label for="" class="col-md-5 fw-bold">Result:</label>
                                <div class="col-md-7 ">
                                    <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : '';?>" class="form-control fw-bold border-3 border-dark">
                                </div>
                            </div>

                                <div class="row mb-3 ">
                                    <div class="col-md-9 mx-auto px-3 ps-3">
                                        <input type="submit" name="addition_btn" class="fw-bold border-3 border-dark btn btn-info" value="Sum">
                                        <input type="submit" name="subtraction_btn" class="fw-bold border-3 border-dark btn btn-info" value="Subtraction">
                                        <input type="submit" name="multiplication_btn" class="fw-bold border-3 border-dark btn btn-info" value="Multiplication">
                                        <input type="submit" name="division_btn" class="fw-bold border-3 border-dark btn btn-info" value="Division">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>