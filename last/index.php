<?php include 'head.php'?>


<div class="content">
<p>
  <!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link. with href
  </a>-->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form  method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >
</div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
    <div class="mb-3">
    <label for="JobDis" class="form-label" name="jobdis">Job Description</label>
    <textarea name="Jdecs" id=""cols="30"rows="10"class="form-control"></textarea>
</div>

    <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
    <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
</div>
</div>


<table class ="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
</tr>
</thead>

  <?php
  $sql="SELECT `cname`, `pos`,  `CTC` FROM `jobs` ";
  $result =mysqli_query($conn,$sql);
  $i=0; 
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){

  echo"
  <tbody>
       <td>".++$i."</td>
       <td>".$rows['cname']."</td>
       <td>".$rows['pos']."</td> 
       <td>".$rows['CTC']."</td>";
      }}
      else{
        echo"";
      }
?>
</tbody>

</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>