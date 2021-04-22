<section class="py-5">
    <div class="container p-0">
        <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                    <li class="mb-2"><a class="reset-anchor" href="<?php echo base_url() ?>shop/shopping/index/">All</a></li>
                    <?php
                    foreach ($kategori as $row) {
                    ?>
                        <li class="mb-2"><a class="reset-anchor" href="<?php echo base_url('shop/shopping/kategori/' . $row['id']); ?>"><?php echo $row['nama_kategori']; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>