<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 01/12/14
 * Time: 10:21
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>i-NOVA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../../../js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
</head>
<body>
<div class="container" style="margin-top:10%">
    <div class="col-md-3 col-md-offset-4">
        <div class="panel member_signin">
            <div class="panel-body">
                <p class="member">Register</p>
                <form role="form" class="registerform" method='post' action='./modules/modIdeas/controller/controllerNewUser.php'>
                    <div class="form-group">
                        <label for="username" class="sr-only">Email address</label>
                        <div class="input-group">
                            <input type="username" class="form-control" name="username"
                                   placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="sr-only">Email address</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="exampleInputEmail1"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="sr-only">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <div class="input-group">
                            <input type="name" class="form-control" name="name"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="sr-only">Last Name</label>
                        <div class="input-group">
                            <input type="last_name" class="form-control" name="last_name"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="sr-only">Last Name 2</label>
                        <div class="input-group">
                            <input type="last_name_2" class="form-control" name="last_name_2"
                                   placeholder="Last Name_2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tags" class="sr-only">Tags</label>
                        <div class="input-group">
                            <input type="tags" class="form-control" name="tags"
                                   placeholder="Tags">
                        </div>
                    </div>


                    <input type="submit" class="btn btn-primary btn-md login" value="REGISTER"></button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
