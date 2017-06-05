<!DOCTYPE html>
<html>
<head>
    <title>登录页面</title>

    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <!-- Bootstrap -->
    <link href="ceshi/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="ceshi/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="ceshi/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="ceshi/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="login">
<div class="container">

    <form class="form-signin" action="{{url('goin')}}" method="post">
        <input type="hidden" name="_token"  value = "{{ csrf_token() }}"/>
        <h2 class="form-signin-heading">请登录</h2>
        <input type="text" class="input-block-level" placeholder="用户名" name="name">
        <input type="password" class="input-block-level" placeholder="密码" name ='pwd'>

        <button class="btn btn-large btn-primary" type="submit">登录</button>
    </form>

</div> <!-- /container -->
<script src="ceshi/vendors/jquery-1.9.1.min.js"></script>
<script src="ceshi/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>