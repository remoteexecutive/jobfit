<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Job Fit</title>

        <!-- Bootstrap -->
        <link href="../dist/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="../dist/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login">
        <!--[if lt IE 8]>
                 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
             <![endif]-->
        <div class=header-container>
            <div class="row">
                <?php
                require ('../config.php');
                //include (VIEW_MENU);
                include (VIEW_HEADER);
                ?>
            </div>
        </div>
        <div class="content-container">
            <div class="login-container row">
                <div class="col-md-6">
                    <label class="login-form-header">Login</label>
             
                    <?php include ('/login-form.php'); ?>
             
                </div>
                <div class="col-md-6">
                    <label class="login-form-header">Register</label>
             
                    <?php include ('/register-form.php'); ?>
                </div>
            </div><!-- end section_header -->
        </div>
    </div>
</div>
<footer>
    <p>Copyright &copy; 2015 JobFit</p>
</footer>
</div> <!-- /container -->  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../dist/js/bootstrap.min.js"></script>
<!--Custom Javascript-->
<script src="../dist/js/flot/jquery.flot.min.js"></script>
<script src="../dist/js/flot/jquery.flot.pie.min.js"></script>
<script src="../dist/js/flot/jquery.flot.resize.min.js"></script>
<script src="../dist/js/custom.js"></script>
</body>
</html>