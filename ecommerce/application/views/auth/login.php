<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="img col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <img src="assets/img/login.jpg" max="100%">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h8 mt-5 font-weight-bolder mb-4 text-dark"> <Label>Login Page</Label> </h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user shadow p-3 mb-5 bg-white rounded" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user shadow p-3 mb-5 bg-white rounded" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class=" font-weight-bolder badge badge-light text-wrap shadow bg-white rounded" style="width: 6rem">
                                            <!-- <div class="badge badge-primary text-wrap" style="width: 6rem;"> -->
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>