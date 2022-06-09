<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan'); ?>
                                    <form class="user" method="POST" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="masukkan password" name="password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </form>
                                    <div class="text-center mt-3">
                                        <a class="small" href="<?php echo base_url('auth/daftar') ?>">Belum punya akun? klik disini</a>
                                        <a class="btn btn-warning form-control" href="<?php echo base_url('guest/index') ?>">Kembali ke dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>