
<!DOCTYPE html>
<?php include 'config.php' ?>
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
   
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form  method="post">
  <div class="mb-3">
    <label for="Full Name" class="form-label">Full Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp " name="name">
   </div>
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Number</label>
    <input type="number" class="form-control" id="examplenumber"  name = "number" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
  </div>
  <div class="mb-3">
    <label for="exampleInputcon_Password1" class="form-label">Conform Password</label>
    <input type="password" class="form-control"  id="exampleInputPassword1" name="conpwd">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <p style="text-align:center;">  User? <br>
  Login <a href="login.php">Login </a></p>
</form>
</div>

    
</body>
</html>


}


