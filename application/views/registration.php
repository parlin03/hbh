<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-4 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Peserta <br>HBH IKATEK UNHAS 2024</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('registration') ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama" value="<?= set_value('name') ?>">

                                <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="Stambuk/NIM" value="<?= set_value('nim') ?>">
                                <?= form_error('nim', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="angkatan" name="angkatan" placeholder="Angkatan (Tahun Masuk Kuliah)" value="<?= set_value('angkatan') ?>">
                                <?= form_error('angkatan', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="baju" name="baju" placeholder="Ukuran Baju" value="<?= set_value('baju') ?>">
                                <?= form_error('baju', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat ..."></textarea>
                                <?= form_error('alamat', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="hp" name="hp" placeholder="No. Telpon" value="<?= set_value('hp') ?>">
                                <?= form_error('hp', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Registrasi
                            </button>

                        </form>
                        <!-- <hr> -->
                        <!-- <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>