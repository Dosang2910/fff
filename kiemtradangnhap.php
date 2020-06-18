<?php 
    require_once "ketnoi.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT*From login";
    $kq= mysqli_query($kn,$sql);
    while($row=mysqli_fetch_assoc($kq))
    {	
       if($row['username']==$username && $row['password']==$password)
       {
       	   echo "Đăng nhập đã thành công ";
       	   header("location:");
       }
       else
       {
 echo "đăng nhập không thành công";      	
       } 
    }

 ?>