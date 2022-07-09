<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <?php
    include_once 'navbar.php';
    ?>
    <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 pl-5">
                <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 text-center h3">Employee Registration</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="empFName"
                                        aria-describedby="emailHelp">
                                   <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Last Name</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">NIC</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <small></small>
                                
                                </div>
                                <div class="mb-3">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                
                                    <small></small>
                                </div>
                                <button type="submit" class="btn btn-success" id='btn'>Submit</button>
                                <button type="submit" class="btn btn-primary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


           <!-- Footer Start -->
    <?php
    include_once 'footer.php';