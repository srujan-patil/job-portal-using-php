<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <style>
        body{
            background-image: url('image1.jpeg');
            background-size: cover;
        }
        form {
            background-color: #fff;
            margin-top:6em;
            margin-left:30em;
            margin-right:10em;
            padding: 30px;
            box-shadow: 5px 5px 5px 5px #888888;
        }
    </style>
   
    <title>Login</title>
</head>
<body>

<div class="container">
 <form method='POST'>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  id="exampleInputPassword1" name = "password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <p style="text-align:center;">  New User? <br>
  Register <a href="register.php">Register </a></p>
</form>
</div>

    
</body>
</html>