<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>

        <?php
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "mahady"|| $username=="mahady@gmail.com" && $password=="mahady"){
                header("location:dashboard.php");
            
            }else{
                echo'<div class="alert alert-danger"> <strong>ERROR: USERNAME/PASSWORD WRONG</strong> </div>';
            
            }
        
        }
        ?>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-md-4 offset-3 bg-secondary mt-5 py-5">
                
                <h4 class="text-center">User Login</h4>
                <form  method="POST">
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-primary  mt-3" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>






<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/all.min.js"></script>
</body>
</html>