<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- css end -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- content start -->
    <div class="top-content">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Economic Order Quantity By Satrianansyah</h3>
                        <p>Login To Application:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="login_action" method="post" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username..." class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in!</button>
                    </form>
                    @if ($error)
                        <div style="color: red;">Login gagal!</div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <!-- Content End -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
