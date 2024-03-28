<script src="<?= base_url('assets/') ?>js/jquery-2.2.3.min.js"></script>
<!-- <script src="<?= base_url('assets/') ?>js/select2.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.angkatan').select2();
    });
</script>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 ">Registrasi Peserta</h1>
                            <p>HBH IKATEK UHNHAS 2024</p>
                            <!-- <p><img class="ae-4 mb-4" width="200" src="<?= base_url(); ?>/assets/home/img/hbh-home-dark.png" alt=" HBH IKATEK UHNHAS 2024" data-action="zoom" /></p> -->

                        </div>
                        <form class="user" method="POST" action="<?= base_url('registration') ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user text-center" id="name" name="name" placeholder="Nama" value="<?= set_value('name') ?>">

                                <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user text-center" id="nim" name="nim" placeholder="Stambuk/NIM" value="<?= set_value('nim') ?>">
                                    <?= form_error('nim', '<small class="text-danger pl-3" >', '</small>'); ?>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <select id="jurusan" name="jurusan" class="form-control select2 text-center">
                                        <option value="" disabled selected hidden>Jurusan</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                        <option value="Arsitektur">Arsitektur</option>
                                        <option value="Teknik Geologi">Teknik Geologi</option>
                                        <option value="Teknik Industri">Teknik Industri</option>
                                        <option value="Teknik Kelautan">Teknik Kelautan</option>
                                        <option value="Teknik Sistem Perkapalan">Teknik Sistem Perkapalan</option>
                                        <option value="Teknik Perencanaan Wilayah Kota">Teknik Perencanaan Wilayah Kota</option>
                                        <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                    </select>
                                    <?= form_error('jurusan', '<small class="text-danger pl-3" >', '</small>'); ?>

                                </div>
                                <div class="col-sm-4">
                                    <select id="angkatan" name="angkatan" class="form-control  text-center  g">
                                        <option value="" disabled selected hidden>Angkatan</option>
                                        <?php foreach ($angkatan as $m) : ?>
                                            <option value="<?= $m['tahun']; ?>"><?= $m['tahun']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-user" id="angkatan" name="angkatan" placeholder="Angkatan (Tahun Masuk Kuliah)" value="<?= set_value('angkatan') ?>"> -->
                                    <?= form_error('angkatan', '<small class="text-danger pl-3" >', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select id="baju" name="baju" class="form-control select2 text-center">
                                        <option value="" disabled selected hidden>Ukuran Baju</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                        <option value="3XL">3XL</option>
                                        <option value="4XL">4XL</option>
                                        <option value="5XL">5XL</option>
                                    </select>
                                    <?= form_error('baju', '<small class="text-danger pl-3" >', '</small>'); ?>
                                </div>

                                <div class="col-sm-6">
                                    <select id="gender" name="gender" class="form-control select2 text-center">
                                        <option value="" disabled selected hidden>Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <?= form_error('gender', '<small class="text-danger pl-3" >', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat ..."></textarea>
                                <?= form_error('alamat', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user text-center" id="hp" name="hp" placeholder="No. Telpon" value="<?= set_value('hp') ?>">
                                <?= form_error('hp', '<small class="text-danger pl-3" >', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Registrasi
                            </button>

                        </form>
                        <!-- <hr>
                        <div class="text-center">
                            <a href="https://wa.me/628114605005?text=Hi%20Qiscus" class="floating" target="_blank">
                                Contact Admin <i class="fab fa-whatsapp fab-icon"></i>
                            </a>
                        </div> -->
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