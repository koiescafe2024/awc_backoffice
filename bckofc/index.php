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
  use Dolondro\GoogleAuthenticator\SecretFactory;
  require_once "vendor/autoload.php";

  if (isset($argv[1])) {
    $secretKey = $argv[1];
    echo "Secret passed in as argument!\n";
    echo "Your secret is ".$secretKey."\n";
} else {
    $secretFactory = new SecretFactory();
    $secret = $secretFactory->create("MyAwesomeWebCo", "Dolondro");
    $secretKey = $secret->getSecretKey();

    $qrImageGenerator = new \Dolondro\GoogleAuthenticator\QrImageGenerator\EndroidQrImageGenerator();
    // $qrImageGenerator = new \Dolondro\GoogleAuthenticator\QrImageGenerator\GoogleQrImageGenerator();

    echo "Your secret is: ".$secretKey."\n";
    file_put_contents(__DIR__."/example.html", "<img src='".$qrImageGenerator->generateUri($secret)."'>'");
    echo "Visit this URL: 'file://".__DIR__."/example.html' to view an image of your secret, and add it to your google authenticator app\n";
}

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
