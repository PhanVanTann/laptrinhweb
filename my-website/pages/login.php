<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="../assets/js/login.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="myform form">
                    <div class="logo mb-3 text-center">
                        <h1>Login</h1>
                    </div>
                    <form name="login" id="loginForm" method="POST" >
                        <div class="form-group" >
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwords">Password</label>
                            <input type="password" name="passwords" id="passwords" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">Login</button>
                        </div>
                        <div class="col-md-12">
                            <div class="login-or">
                               
                                <span class="span-or">or</span>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <p>Don't have an account? <a href="register.php">Sign up here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
