<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>
    Halaman Register | by Didan Hatama
  </title>
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
  <style>
    :root {
      --input-padding-x: 1.5rem;
      --input-padding-y: 0.75rem;
    }

    .login,
    .image {
      min-height: 100vh;
    }

    .bg-image {
      background-image: url("https://source.unsplash.com/WLUHO9A_xik/600x1200");
      background-size: cover;
      background-position: center;
    }

    .login-heading {
      font-weight: 300;
    }

    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
      border-radius: 2rem;
    }

    .form-label-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
      padding: var(--input-padding-y) var(--input-padding-x);
      height: auto;
      border-radius: 2rem;
    }

    .form-label-group>label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0;
      /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      cursor: text;
      /* Match the input under the label */
      border: 1px solid transparent;
      border-radius: 0.25rem;
      transition: all 0.1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
      color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-moz-placeholder {
      color: transparent;
    }

    .form-label-group input::placeholder {
      color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
      padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
      padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
      padding-top: calc(var(--input-padding-y) / 3);
      padding-bottom: calc(var(--input-padding-y) / 3);
      font-size: 12px;
      color: #777;
    }

    /* Fallback for Edge
  -------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
      .form-label-group>label {
        display: none;
      }

      .form-label-group input::-ms-input-placeholder {
        color: #777;
      }
    }

    /* Fallback for IE
  -------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .form-label-group>label {
        display: none;
      }

      .form-label-group input:-ms-input-placeholder {
        color: #777;
      }
    }
  </style>
</head>

<body>
  <?php echo form_open('auth/register'); ?>
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Sign up now!</h3>
                <form>
                  <div class="form-label-group">
                    <input value="<?php echo set_value('name'); ?>" type="text" id="inputName" name="name" class="form-control" placeholder="Fullname">
                    <label for="inputName">Fullname</label>
                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-label-group">
                    <input value="<?php echo set_value('username'); ?>" type="text" id="inputUsername" name="username" class="form-control" placeholder="Username">
                    <label for="inputUsername">Username</label>
                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-label-group">
                    <input value="<?php echo set_value('email'); ?>" type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address">
                    <label for="inputEmail">Email address</label>
                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-label-group">
                    <input value="<?php echo set_value('password'); ?>" type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-label-group">
                    <input value="<?php echo set_value('password_conf'); ?>" type="password" id="inputPassword_conf" name="password_conf" class="form-control" placeholder="Password Configuration">
                    <label for="inputPassword_conf">Password Configuration</label>
                    <?php echo form_error('password_conf', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="btnSubmit" type="submit">Sign Up</button>
                  <?php echo form_close(); ?>
                  <div class="text-center">
                    <a class="small" href="login">Already have an account?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('assets/jquery/jquery.js') ?>"></script>
</body>

</html>