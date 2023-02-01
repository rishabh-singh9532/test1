
<?php
include("conn.php");



$username = $_POST['name'];
$usercontact = $_POST['contact'];
$useremail = $_POST['email'];
$userdetails = $_POST['details'];

if(isset($_POST["submit"])){

    $query = "INSERT INTO `form`(`id`, `name`, `cantact`, `email`, `details`) VALUES (NULL,'$username','$usercontact','$useremail','$userdetails')";

    $data = mysqli_query($conn, $query);

    if($data){

        // echo "<script> alert('Registration Successfull');</script>";
        // header("location:index.php");
        echo "<script>
           alert('Registration Successful We Will Contact you')
          
             window.location.href='index.php';
           </script>";
    }else{
        echo "something Went Wrong";
    }





}











?>