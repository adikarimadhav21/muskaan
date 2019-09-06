
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign In</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link href="<?php echo base_url()?>/application/assets/admin/css/bootstrap.min.css" rel="stylesheet">


  </head>

  <body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form id="loginform" class="form-horizontal" role="form" action="<?php echo base_url(); ?>Admin/loginCheck" method="POST">
                                
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username">                                        
                        </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fas fa-key"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password">
                        </div>

                        <?php if(isset($message))
                            echo' <span class="input-group-addon">'.$message.'</span>';
                        ?>
                      
                        

                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                              <input type="submit" Value="Login" id="btn-login" class="btn btn-success" />
                            </div>
                        </div>
                    </form>     
                </div>                     
            </div>  
        </div>
    </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
