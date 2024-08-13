<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="../assets/js/register.js" defer></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<?php 
    include "../class/registerclass.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $register = new Register();
        $register->insert_register($_POST);
    }
?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="myform form">
                    <div class="logo mb-3 text-center">
                        <h1>Signup</h1>
                    </div>
                    <form name="registration" method="POST">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="passwords">Password</label>
                            <input type="password" name="passwords" id="passwords" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <p>Already have an account? <a href="login.php">Login here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
