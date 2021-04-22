<!-- BILLING ADDRESS-->
<section class="py-5">
  <h2 class="h5 text-uppercase mb-4">Billing details</h2>
  <div class="row">
    <div class="col-lg-8">
      <?php
      $grand_total = 0;
      if ($cart = $this->cart->contents()) {
        foreach ($cart as $item) {
          $grand_total = $grand_total + $item['subtotal'];
        }
      ?>
        <form action="<?php echo base_url() ?>shop/shopping/proses_order" method="post" name="frmCO" id="frmCO">
          <div class="row">
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="firstName">Fullname</label>
              <input class="form-control form-control-lg" id="nama" name="nama" type="text" placeholder="Enter your full name">
            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="email">Email address</label>
              <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="e.g. admin@tamaid.com">
            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="phone">Phone number</label>
              <input class="form-control form-control-lg" id="telp" name="telp" type="tel" placeholder="e.g. +62 81234567890">
            </div>
            <div class="col-lg-12 form-group">
              <label class="text-small text-uppercase" for="address">Address</label>
              <input class="form-control form-control-lg" id="alamat" name="alamat" type="text" placeholder="House number and street name">
            </div>
            <div class="col-lg-12 form-group">
              <button class="btn btn-dark" type="submit">Place order</button>
            </div>
          </div>
        </form>
      <?php
      } else {
        echo "<div class='py-2 px-4 bg-dark text-white mb-3'><strong class='small text-uppercase font-weight-bold'>Your shopping cart is empty...</strong></div>";
      }
      ?>
    </div>
    <!-- ORDER SUMMARY-->
    <div class="col-lg-4">
      <div class="card border-0 rounded-0 p-lg-4 bg-light">
        <div class="card-body">
          <h5 class="text-uppercase mb-4">Your order</h5>
          <?php
          if ($cart = $this->cart->contents()) {
          ?>
            <?php
            $grand_total = 0;
            foreach ($cart as $item) :
              $grand_total = $grand_total + $item['subtotal'];
            ?>
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][id]" value="<?php echo $item['id']; ?>" />
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][rowid]" value="<?php echo $item['rowid']; ?>" />
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][name]" value="<?php echo $item['name']; ?>" />
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][price]" value="<?php echo $item['price']; ?>" />
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][gambar]" value="<?php echo $item['gambar']; ?>" />
              <input type="hidden" name="cart[<?php echo $item['id']; ?>][qty]" value="<?php echo $item['qty']; ?>" />
              <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold"><?php echo $item['name']; ?></strong><span class="text-muted small">Rp <?php echo number_format($item['subtotal'], 0, ",", ".") ?></span></li>
                <li class="border-bottom my-2"></li>
              <?php endforeach; ?>
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp <?php echo number_format($grand_total, 0, ",", "."); ?></span></li>
              </ul>
            <?php
          } else {
            ?>
              <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">-</strong><span class="text-muted small">-</span></li>
                <li class="border-bottom my-2"></li>
                <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp <?php echo number_format(0, 0, ",", "."); ?></span></li>
              </ul>
            <?php
          }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
</div>