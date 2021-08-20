<?php
include '../connectDatabase/connectDB.php';
if (isset($_POST['insertComment'])) {
    $stdId = $_POST['std_id'];
    $name = $_POST['name'];
    $major = $_POST['major'];
    $grade = $_POST['grade'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comment (std_id,name,grade,major,comment,tray) VALUES('$stdId','$name',$grade,'$major','$comment',1)";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'success';
    } else {
        echo 'fail';
    }
}
