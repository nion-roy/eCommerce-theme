<div class="modal slideUpIn" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign In</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                        <input type="email" class="form-control" id="formSigninEmail" placeholder="Email" required="">
                    </div>
                    <div class="col-12">
                        <!-- input -->
                        <div class="password-field position-relative">
                            <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                            <div class="password-field position-relative">
                                <input type="password" class="form-control fakePassword" id="formSigninPassword" placeholder="*****" required="">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- form check -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <!-- label -->
                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                        </div>
                        <div> Forgot password? <a href="forgot-password.html">Reset It</a></div>
                    </div>
                    <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign In</button></div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center"> You have no account? <a href="signup.php">Sign Up</a> </div>
        </div>
    </div>
</div>