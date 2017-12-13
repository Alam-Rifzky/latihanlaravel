
 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login -- External FAC</title>
  








    <link rel="stylesheet" type="text/css" href="http://rumahiska.com/assets/administrasi/login.css">
</head>
<body>





<div class="login-page">
  <div class="form">
    
    <form class="login-form" action="" method="POST">
        {!! csrf_field() !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" placeholder="username" name="username" />
      <input type="password" placeholder="password" name="password" />
      <button>login</button>
      </form>
      <br>
      <a href="/register" style="text-align:left;">Register</a>
  </div>

</div>

<script type="text/javascript" src="http://rumahiska.com/js/jquery-1.11.1.js"></script>
</body>
</html>