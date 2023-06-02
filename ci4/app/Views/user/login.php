<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div class="loginPage">

    <div id="login-wrapper">
      <h1>Login</h1>
      <form action="" method="post">
        <div class="p mb-3">
          <label for="yourEmail" class="form-label">Alamat Email</label>
          <input type="email" name="email" class="form-control" placeholder="Masukan Email" id="yourEmail" value="<?= set_value('email') ?>">
        </div>
        <div class="p mb-3">
          <label for="yourPassword" class="form-label">Password</label>
          <input type="password" name="password" placeholder="Masukan password" class="form-control" id="yourPassword">
        </div>
        <?php if (session()->getFlashdata('flash_msg')) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <button type="submit" class="btn">Login</button>
        <p>Belum Punya Akun? <a href="">Daftar Sekarang</a></p>

      </form>
    </div>
  </div>
</body>

</html>