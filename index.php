<?php
$page = 'Employer';
//$page = 'Recruiter';
//$page ='Jobseeker';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Job Fit</title>

        <!-- Bootstrap -->
        <link href="dist/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="dist/css/bootstrap-dialog.css" rel="stylesheet">
        <link href="dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="dist/css/slickQuiz.css" rel="stylesheet">
        <link href="dist/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
                 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
             <![endif]-->
        <div class=header-container>
            <div class="row">
                <?php
                include('config.php');
                include (VIEW_MENU);
                include (VIEW_HEADER);
                ?>
            </div>
        </div>
        <div class="content-container">
            <div class="row">
                <div class="main-content-container col-md-8 col-xs-12">
                    <?php
                    if ($page == 'Employer') {
                        include (VIEW_EMPLOYER_DASHBOARD);
                    } else {
                        include (VIEW_JOBSEEKER_DASHBOARD);
                    }
                    ?>
                </div>
                <div class="sidebar-content-container col-md-4 hidden-xs hidden-sm">
                    <?php
                    include (VIEW_SIDEBAR);
                    ?>
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
    <script src="dist/js/bootstrap.min.js"></script>
    <!--Custom Javascript-->
    <script src="dist/js/bootstrap-dialog.min.js"></script>
    <script src="dist/js/slickQuiz.js"></script>
    <script src="dist/js/slickQuiz-config.js"></script>
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script src="dist/js/bootstrap-select.min.js"></script>
    <script src="dist/js/custom.js"></script>
</body>
</html>