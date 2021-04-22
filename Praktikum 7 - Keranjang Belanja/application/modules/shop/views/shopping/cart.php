<section class="py-5">
  <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
  <div class="row">
    <div class="col-lg-8 mb-4 mb-lg-0">
      <!-- CART TABLE-->
      <div class="table-responsive mb-4">
        <form action="<?php echo base_url() ?>shop/shopping/ubah_cart" method="post" name="frmShopping" id="frmShopping" enctype="multipart/form-data">
          <?php
          if ($cart = $this->cart->contents()) {
          ?>
            <table class="table">
              <thead class="bg-light">
                <tr>
                  <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                  <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                  <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                  <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                  <th class="border-0" scope="col"> </th>
                </tr>
              </thead>
              <?php
              // Create form and send all values in "shopping/update_cart" function.
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
                <tbody>
                  <tr>
                    <th class="pl-0 border-0" scope="row">
                      <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="#"><img src="<?php echo base_url() . 'assets/gambar/images/' . $item['gambar']; ?>" alt="..." width="70" /></a>
                        <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="#"><?php echo $item['name']; ?></a></strong></div>
                      </div>
                    </th>
                    <td class="align-middle border-0">
                      <p class="mb-0 small"><?php echo number_format($item['price'], 0, ",", "."); ?></p>
                    </td>
                    <td class="align-middle border-0">
                      <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                        <div class="quantity">
                          <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                          <input class="form-control form-control-sm border-0 shadow-0 p-0" type="text" name="cart[<?php echo $item['id']; ?>][qty]" value="<?php echo $item['qty']; ?>" />
                          <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle border-0">
                      <p class="mb-0 small"><?php echo number_format($item['subtotal'], 0, ",", ".") ?></p>
                    </td>
                    <td class="align-middle border-0"><a class="reset-anchor" href="<?php echo base_url() ?>shop/shopping/hapus/<?php echo $item['rowid']; ?>"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                  </tr>
                </tbody>
              <?php endforeach; ?>
            </table>
          <?php
          } else {
            echo "<div class='py-2 px-4 bg-dark text-white mb-3'><strong class='small text-uppercase font-weight-bold'>Still empty...</strong></div>";
          }
          ?>
      </div>
      <!-- CART NAV-->
      <div class="bg-light px-4 py-3">
        <div class="row align-items-center text-center">
          <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="<?php echo base_url('shop/shopping') ?>"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
          <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="<?php echo base_url('shop/shopping/checkout') ?>">Procceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
        </div>
      </div>
    </div>
    <!-- ORDER TOTAL-->
    <div class="col-lg-4">
      <div class="card border-0 rounded-0 p-lg-4 bg-light">
        <div class="card-body">
          <h5 class="text-uppercase mb-4">Cart total</h5>
          <?php
          if ($cart = $this->cart->contents()) {
          ?>
            <ul class="list-unstyled mb-0">
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">Rp <?php echo number_format($grand_total, 0, ",", "."); ?></span></li>
              <li class="border-bottom my-2"></li>
              <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp <?php echo number_format($grand_total, 0, ",", "."); ?></span></li>
              <li>
                <form action="#">
                  <div class="form-group mb-0">
                    <input class="form-control" type="text" placeholder="Enter your coupon">
                    <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Apply coupon</button>
                  </div>
                </form>
              </li>
            </ul>
          <?php
          } else {
          ?>
            <ul class="list-unstyled mb-0">
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">Rp <?php echo number_format(0, 0, ",", "."); ?></span></li>
              <li class="border-bottom my-2"></li>
              <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp <?php echo number_format(0, 0, ",", "."); ?></span></li>
              <li>
                <form action="#">
                  <div class="form-group mb-0">
                    <input class="form-control" type="text" placeholder="Enter your coupon">
                    <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Apply coupon</button>
                  </div>
                </form>
              </li>
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
</form>