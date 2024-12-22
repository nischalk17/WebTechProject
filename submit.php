<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='evento';

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
    $name=$_POST['full-name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['event-date'];
    $time=$_POST['event-time'];
    $location=$_POST['event-location'];
    $caterer=$_POST['caterer'];
    $guest=$_POST['guests'];
    $package=$_POST['package'];
    $details=$_POST['details'];

    $sql="insert into info(name,email,phone,date,time,location,caterer,guests,package,details) values('$name','$email','$phone','$date','$time','$location','$caterer',$guest,'$package','$details')";
    $result=mysqli_query($conn,$sql);
    header('location:index.html')
?>
