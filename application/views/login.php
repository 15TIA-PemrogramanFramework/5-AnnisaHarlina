<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sleek Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url('assets/login/'); ?>css/style.css">

  
</head>

<body>
  <form class="login-form" method="post" action="<?php echo site_url('login') ?>">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" name="username" class="login-username" autofocus="true" required="true" placeholder="Username" />
  <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
</form>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
  
  
</body>
</html>
