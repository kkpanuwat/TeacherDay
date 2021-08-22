<?php
include './connectDatabase/connectDB.php';
session_start();
if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        if($row['username']==$username){
            if($row['password']==$password){
                $_SESSION['username']=$username;
                echo '<script>window.location.href = "../dashboard/index.php"</script>';
            }
        }
    }
    echo '<script>window.location.href = "../login.php"</script>';
}
