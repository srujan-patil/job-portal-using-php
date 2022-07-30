<?php include 'head.php'?>

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidates Name</th>
      <th scope="col">Qualification</th>
      <th scope="col">Position </th>
      <th scope="col">Passout Year</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
        <?php
        $sql="SELECT `name`, `qual`, `apply`, `year` FROM `candidates`";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
        $i=0;
        while($rows=$result->fetch_assoc()){
            echo'
        <tr>
            <th scope="row">'.++$i.'</th>
            <td>'.$rows['name'].'</td>
            <td>'.$rows['qual'].'</td>
            <td>'.$rows['apply'].'</td>
            <td>'.$rows['year'].'</td>
        </tr>';}}
        else{
        echo"";
        }?>
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>