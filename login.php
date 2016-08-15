<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>方田教育</title>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <!-- fangtian css -->
    <link href="_/css/fangtian_admin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  </head>
  <body id='login'>

  <div class="container">

    <form class="form-login" action="calendar.php">
      <h2 class="form-login-heading">方田后台</h2>
      <label for="inputPhone" class="sr-only">电话</label>
      <input type="tel" id="inputPhone" class="form-control" placeholder="您的电话" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="您的密码">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> 记住密码
        </label>
        <span><a href="">忘记密码</a></span>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      <div class="alert alert-danger">警示信息</div>
    </form>

  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="_/js/jquery-min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="_/js/bootstrap-min.js"></script>
  <script src="_/js/fangtian_admin.js"></script>

  </body>
</html>