<section class="py-5">
    <div class="container p-0">
        <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                    <li class="mb-2"><a class="reset-anchor" href="<?php echo base_url() ?>service/page/layanan/">All</a></li>
                    <?php
                    foreach ($keahlian as $row) {
                    ?>
                        <li class="mb-2"><a class="reset-anchor" href="<?php echo base_url('service/page/kategori/' . $row['id_keahlian']); ?>"><?php echo $row['daftar_keahlian']; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>