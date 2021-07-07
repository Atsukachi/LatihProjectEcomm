<!-- NOTIFICATION -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
<!-- HERO SECTION-->
<div class="container">
    <section class="hero pb-3 bg-cover  d-flex align-items-center" style="background-image: url(<?php echo base_url('assets/gambar/images/Home.png') ?>); background-position: 0 -50px;">
        <div class="container py-5">
            <div class="row px-4 px-lg-5">
                <div class="col-lg-6">
                    <p class="text-white small text-uppercase mb-2">Layanan Jasa Online</p>
                    <h1 class="h2 text-uppercase mb-3 text-white">Selamat Datang </h1><a class="btn btn-dark" href="shop.html">Browse collections</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES SECTION-->
    <section class="pt-5">
        <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="container ml-4 pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-dark" style="width: 18rem; border-radius: 30px;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Menyediakan Tenaga Kerja Profesional</h5>

                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit similique et quia? Nostrum reiciendis repellat aspernatur perferendis iure! Maxime perspiciatis earum quidem harum deserunt ullam eaque iure ut! Vel, dolore.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark" style="width: 18rem; border-radius: 30px;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Mudah Dalam Penggunaan</h5>
                            <br>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit similique et quia? Nostrum reiciendis repellat aspernatur perferendis iure! Maxime perspiciatis earum quidem harum deserunt ullam eaque iure ut! Vel, dolore.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark" style="width: 18rem; border-radius: 30px;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Tanpa Ribet&Nyaman</h5>
                            <br>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit similique et quia? Nostrum reiciendis repellat aspernatur perferendis iure! Maxime perspiciatis earum quidem harum deserunt ullam eaque iure ut! Vel, dolore.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER-->
    <section class="py-5">
        <div class="container p-0">
            <div class="text-center">
                <h5 class="text-uppercase">Ingin Bergabung?</h5>
                <p class="text-small text-muted mb-0">Jadilah salah satu Mitra kami</p>
            </div>
            <div style="margin-left: 505px; margin-top:5px;">
                <form action="#">
                    <div class="input-group flex-column flex-sm-row mb-3">
                        <div class="input-group-append">
                            <button class="btn btn-dark btn-block" id="button-addon2" data-toggle="modal" data-target="#exampleModal">Daftar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('service/page/tambah_mitra'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_produk">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                            <?php echo form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            <?php echo form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class=" form-group">
                            <label for="deskripsi">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat" rows="4" placeholder="Alamat"></textarea>
                            <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar">
                        </div>
                        <div class="form-group">
                            <label>Keahlian</label>
                            <select class="form-control" placeholder="keahlian" id="keahlian" name="keahlian">
                                <option holder>Pilih Keahlian</option>
                                <?php
                                foreach ($id as $ahli) :
                                ?>
                                    <option value="<?php echo $ahli['id_keahlian'] ?>"><?php echo $ahli['daftar_keahlian'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                            <?php echo form_error('keahlian', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Tarif Jasa</label>
                            <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Nama Lengkap">
                            <?php echo form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>