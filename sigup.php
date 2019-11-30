<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>
    <?php 
    //รับข้อมูลจาำ Form Signup
    include("connect.php");
    if(isset($_POST['submit'])){
        //รับข้อมูล
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = md5($conn->real_escape_string($_POST['password']));
        $email = $_POST['email'];
    }
    ?>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="col-md-8 col-md-offset-2" style="margin-top:50px">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">สมัครสมาชิก</div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label for="username" class="col-md-3">ID</label>
                                <div class="col-md-9">
                                    <input type="text" name="id" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-md-3">Username</label>
                                <div class="col-md-9">
                                    <input type="name" name="username" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            <div class="form-group row">
                                <label for="username" class="col-md-3">Password again</label>
                                <div class="col-md-9">
                                    <input type="passwordagain" name="passwordagain" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-success btn-block" name="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>