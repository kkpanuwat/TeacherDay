<?php
include '../connectDatabase/connectDB.php';
if (isset($_POST['insertComment'])) {
    $stdId = $_POST['std_id'];
    $name = $_POST['name'];
    $major = $_POST['major'];
    $grade = $_POST['grade'];
    $comment = $_POST['comment'];
    $teacher = $_POST['teacher_id'];
    $sql = "INSERT INTO comment (std_id,name,grade,major,comment,tray,teacher_id) VALUES('$stdId','$name',$grade,'$major','$comment',1,$teacher)";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'success';
    } else {
        echo 'fail';
    }
}

if(isset($_GET['getNumRow'])){
    $sql = "SELECT * FROM comment";
    $result = mysqli_query($conn,$sql);
    echo " ".mysqli_num_rows($result)." คน";
}
