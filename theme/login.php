<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= baseUrl() ?>/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="<?= baseUrl() ?>/css/style.css">
  <link rel="stylesheet" href="<?= baseUrl() ?>/css/font.css">
</head>
<!-- ok -->
<!-- *** -->
<!-- HADI -->

<body id="signin-body">
  <?
  // View::renderTemplate("/view/login-check.php");
  echo "<br>view/login.php ---" . $content;
  ?>
  <div class="layer"></div>
  <main class="page-center">
    <article class="sign-up">
      <h1 class="sign-up__title">خوش برگشتی!</h1>
      <p class="sign-up__subtitle">برای ورود نام کاربری و رمز عبور را وارد کن</p>
      <form class="sign-up-form form" action="" method="get">
        <label class="form-label-wrapper">
          <p class="form-label">نام کاربری</p>
          <input name="uname" class="form-input" type="text" placeholder="نام کاربری" required>
        </label>
        <label class="form-label-wrapper">
          <p class="form-label">رمز عبور</p>
          <input name="pass" class="form-input" type="password" placeholder="رمز عبور" required>
        </label>
        <a class="link-info forget-link" href="##">رمز را فراموش کرده اید؟</a>
        <label class="form-checkbox-wrapper">
          <input name="remember-me" class="form-checkbox" type="checkbox">
          <span class="form-checkbox-label mx-1">مرا به خاطر بسپار</span>
        </label>
        <button name="submit" class="form-btn primary-default-btn transparent-btn" type="submit">ورود</button>
      </form>
    </article>
  </main>
  <!-- Chart library -->
  <script src="./plugins/chart.min.js"></script>
  <!-- Icons library -->
  <script src="plugins/feather.min.js"></script>
  <!-- Custom scripts -->
  <script src="<?= baseUrl() ?>js/script.js"></script>
  <script src="<?= baseUrl() ?>js/bootstrap.bundle.min.js"></script>


</body>

</html>