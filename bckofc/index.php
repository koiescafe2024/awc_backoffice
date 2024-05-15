<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p> <b>Admin</b></p>
  </div>
  <!-- /.login-logo -->
  <?php
  
  
  require_once "vendor/autoload.php";
  include_once  'vendor//sonata/google-authenticator/src/FixedBitNotation.php';
  include_once 'vendor/sonata/google-authenticator/src/GoogleAuthenticator.php';
  include_once  'vendor/sonata/google-authenticator/src/GoogleQrUrl.php';

  $secret = 'XVQ2UIGO75XRUKJO';
$code = '846474';

$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

echo 'Current Code is: ';
echo $g->getCode($secret);

echo "\n";

echo "Check if $code is valid: ";

if ($g->checkCode($secret, $code)) {
  echo "YES \n";
} else {
  echo "NO \n";
}

$secret = $g->generateSecret();
echo "Get a new Secret: $secret \n";
echo "The QR Code for this secret (to scan with the Google Authenticator App: \n";

echo \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('chregu', $secret, 'GoogleAuthenticatorExample');
echo "\n";
  

  ?>
  <div class="card">
    <div class="card-body login-card-body">
      
      <form action="dashboard.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="uname" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          <!-- /.col -->
          <div class="col-4 ">
        <button type="submit" class="btn btn-primary">Sign In</button>
              <!-- <a class="btn btn-primary" href="dashboard.php" role="button">Sign In</a> -->
          </div>
          <!-- /.col -->
        </div>
      </form>

     
</div>

</body>
</html>
