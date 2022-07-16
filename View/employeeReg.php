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
            <div class="container-fluid pt-4 pl-5" >
                <div class="row g-4">
                <div class="col-sm-12 col-xl-12" >
                        <div class="bg-secondary rounded h-100 p-4 formBorder">
                            <p class="mb-4 text-center" style="font-size: 2rem;">Employee Registration</p>
                            <form id='empRegForm'>
                                <div class="mb-3">
                                    <label for="empFName" class="form-label whiteFont">First Name</label>
                                    <input type="text" class="form-control" id="empFName">
                                   <small class="errorText" id='empFNameError'></small>
                                </div>
                                <div class="mb-3">
                                    <label for="empLName" class="form-label whiteFont">Last Name</label>
                                    <input type="text" class="form-control" id="empLName">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="empEmail" class="form-label whiteFont">Email</label>
                                    <input type="text" class="form-control" id="empEmail">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="empPhone" class="form-label whiteFont">Phone Number</label>
                                    <input type="text" class="form-control" id="empPhone">
                                    <small></small>
                                </div>
                                <div class="mb-3">
                                    <label for="empNIC" class="form-label whiteFont">NIC</label>
                                    <input type="text" class="form-control" id="empNIC">
                                    <small></small>
                                
                                </div>
                                <div class="mb-3">
                                <label for="empAddress" class="whiteFont">Address</label>
                                <textarea class="form-control" id="empAddress" style="height: 150px;"></textarea>
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