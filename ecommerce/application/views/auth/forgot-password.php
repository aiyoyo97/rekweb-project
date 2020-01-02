<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 font-weight-bolder mb-4 text-dark"> Forgot your password ? </h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/forgotpassword') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user shadow p-3 mb-5 bg-white rounded" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="font-weight-bolder badge badge-light text-wrap shadow bg-white rounded" style="width: 6rem"">
                                        Reset Password
                                    </button>
                                    </div>
                                </form>
                                    <hr>
                                    <div class=" text-center">
                                            <a class="small" href="<?= base_url('auth'); ?>">Back to Login</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>