<?php
include_once 'header.php';
?>


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                       <p class='text-center' style="font-size: 2em;">ABC Company</p>
                       <form id='empLogForm'>
                            <div class="form-floating mb-4 mt-4">
                                <input type="email" class="form-control empLogEmail" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                <small class="errorText" id='empLogEmailError'></small>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control empLogPwd" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <small class="errorText" id='empLogPwdError'></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                            </div>
                            <button type="submit" class="btn btn-success py-3 w-100 mb-4">Sign In</button>
                            <button type="reset" class="btn btn-primary py-3 w-100 mb-4">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery-confirm.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>