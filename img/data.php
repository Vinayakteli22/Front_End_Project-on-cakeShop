<?php
$servername="localhost";
$username="root";
$password="";
$database="cakies";

$name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $mess=$_POST['message'];
    

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
    {
        die("Sorry not connecting with my sql:".mysqli_connect_error);
    
    }
    else{
        echo "connection successfully";
    }
   echo $name,$email,$sub,$mess;

$sql="INSERT INTO `feedback`(`Sr.no`, `Name`, `Email`, `Subject`, `Message`) VALUES ('','$name', '$email', '$sub', '$mess')";


//"INSERT INTO `feedback` ( `Name`, `Email`, `Subject`, `Message`) VALUES ( '$name', '$email', '$sub', '$mess')";

$reuslt=mysqli_query($conn,$sql);
if($reuslt){
    echo "YOUR ENETRY HAS BEEN SUBMITED SUCCESSFULLY!!!";
}
else {
    echo "Sorry cant insert entery beacuse of this ---->:". mysqli_error($conn);
}

?>