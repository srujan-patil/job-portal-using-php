<?php

    $server = 'localhost';
    $username='root';
    $password='';
    $database='jobs';
   
    $conn =mysqli_connect($server, $username, $password,$database);

    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];

    $sql="INSERT INTO `users`(`name`, `email`, `password`, `number` )  VALUES ('$name','$email','$password','$number')";
            if(mysqli_query($conn,$sql)){
                echo "Records inserted successfully.";
            } else{
                    echo"ERROR:Could not able to execute$sql." .mysqli_error($conn);

            }
}

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


   $query="SELECT * FROM users WHERE email ='$email' AND password ='$password'";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   if(mysqli_num_rows($result)==1){
       header("location: index.php");
   }
   else{
       $error='emailid or password is incorrect';
   }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`( `cname`, `pos`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    
    if(mysqli_query($conn,$sql)){
        header('Location: career.php');
         echo "New Job Posted";
    }
    else{
    
        echo "Error:Failed to Post the Job $sql." . mysqli_error($conn);
    }
}

if(isset($_POST['applys'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO`candidates`(`name`,`apply`,`qual`,`year`) VALUES('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql);
}
//mysqli_close($conn);
?>