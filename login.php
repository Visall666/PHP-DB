<?php
    session_start();
    include('config.php');
    include('function.php');
    $sms = "";
    if(isset($_POST['btn']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from users where username='$username' and password=md5('$password')";
        $user = scalar_query($sql);
        if(count($user)>0)
        {
            $_SESSION['username'] = $user['username'];
            header('location: index.php');
        }
        else{
            $sms = "Invalid username or password!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>User Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <h3 class="text-primary mt-3 text-center">User Login</h3>
                <hr>
                <form method="post">
                    <div class="form-group mt-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-primary btn-sm" name="btn">Login Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>