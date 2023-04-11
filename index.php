

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin/assets/bootstrap/css/bootstrap.min.css">
    <!------ Include the above Bootstrap files in your HEAD tag ---------->
    <link rel="stylesheet" href="./login.css">

    <title>KYU e-vote</title>
    <link rel="shortcut icon" href="./evote.kyu.ac.ug/icons/evote.png" type="kyu-icon">
</head>
<body>
    <!-- <center> -->
        <div class="landing">
            <form class="" action="login.php" method="post" onsubmit="return validate()">
                <div class="header">
                    <img src="./admin/assets/images/icons/kyulogo.png" alt="kyulogo" width="130">
                    <h4 class="pt-2"> Login</h4>
                </div>
                <div class="form-group">
                  <label for="username">Username</label> 
                  <input type="text" name="name" size="" id="name" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password" id="">Password</label> 
                    <input type="text" name="password" size="" id="" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group button">
                    <center>
                        <button class="btn btn-sm p-2 rounded" type="submit" name="submit" style="color: white;">Submit</button>
                    </center>
                </div>
            </form>
        </div>
    <!-- </center> -->

    <!-- ========================================Script section==================================================== -->
    <script src="./jquery-3.6.0.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.js"></script>
    <script src="./bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>
</html>