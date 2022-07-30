<!DOCTYPE html>
  <html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <style>
    .banner{
        background:url("image2.jpg");
        background-size:cover;
    }
    .navbar{
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
.h1.p{
  color:#fff;
}
.jobs{
  border:1px solid black;
  box-shadow:5px 5px 4px 5px grey;
  margin:10px;
  padding:10px;

}

    </style>
    <title>Career</title>

</head>
<body>
<div class="container-fliud">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Home </a>
            </li>
            <li class="nav-item">
                 <a class="nav-link active"  aria-current="page" href="#"> Features </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="#"> Pricing </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-current="page"  href="#" tabindex="-1" aria-disabled="true"> Disabled </a>
            </li>
        </ul>
    </div>
  </div>
</nav>  

 <div class="jumbotron jumbotron-fluid" style="background-image:url('image2.jpg'); background-size:cover;">
        <div class="container">
          <h1 class="display-4">Job Portal</h1>
        <p class="lead">Best aJobs available matching your skills</p>
        </div>
</div>
<!--<div class = banner>
<img src="image2.jpg" alt="" class="img-fluid " width = "1900">

</div>
<div class="card" style="width:18rem;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">PHP Developer</h5>
      <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;">Company Name</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

      <p>
          <b>Skills Required: </b> 
      <p>
        <b>Job Location: </b>
    </p>
    <p>
        <b>CTC: </b>
    </p>
    </div>
  </div>-->
</div>

  <div class="row">
      <?php
      $sql="SELECT `cname`, `pos`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
          <div class="col-md-4">
            <div class="jobs">
              <h3 style="text-align: center;">'.$rows['pos'].'</h3>
              <h4 style="text-align: center;">'.$rows['cname'].'</h4>
              <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
              <p style="color:black;"> <b>skills required: </b>'.$rows['skills'].'</p>
              <p style="color:black;"> <b> CTC: </b>'.$rows['CTC'].'</p>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                  Apply Now
              </button>
            </div>
          </div>';
       }
      }
      else{
        echo "";
      }
      ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="applys" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/is/bootstrap.min.js"></script>
</body>
</html>