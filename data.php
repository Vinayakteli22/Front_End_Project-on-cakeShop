<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$mess=$_POST['message'];
echo "name=$name"."email=$email"."subject=$subject"."message=$mess";
}
echo"hiiii";
?>