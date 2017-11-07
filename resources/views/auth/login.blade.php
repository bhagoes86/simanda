<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Boooya - Login With Background</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app app-fh">

            <!-- START APP CONTAINER -->
            <div class="app-container" style="background: url(assets/images/background/bg-1.jpg) center center no-repeat fixed;">
                
                <div class="app-login-box">                                        
                    <div class="app-login-box-user"><img src="{{ asset('theme/img/user/no-image.png') }}"></div>
                    <div class="app-login-box-title">
                        <div class="title">Simanda 2017</div>
                        <div class="subtitle">Silahkan lakukan login</div>                        
                    </div>
                    <div class="app-login-box-container">
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="nip" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <button class="btn btn-success btn-block">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="app-login-box-footer">
                        &copy; Simanda 2017. All rights reserved.
                        {{ $errors }}
                    </div>
                </div>
                                
            </div>
            <!-- END APP CONTAINER -->
           
        </div>        
        <!-- END APP WRAPPER -->                

        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
       
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>