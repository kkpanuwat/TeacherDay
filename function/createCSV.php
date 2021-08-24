<?php

include './connectDatabase/connectDB.php';
$sql = "SELECT * FROM comment JOIN teacher ON comment.teacher_id = teacher.teacher_id";
$result = mysqli_query($conn,$sql);
$fp = fopen('data.csv', 'w');
$grade = ['','ปริญญาตรี','ปริญญาโท','ปริญญาเอก'];
$major = ['','วิทยาการคอมพิวเตอร์','เทคโนโลยีสารสนเทศ','ภูมิสารสนเทศศาสตร์'];
fputs($fp, (chr(0xEF) . chr(0xBB) . chr(0xBF)));
$num = 1;
while($row=mysqli_fetch_row($result)){
    fputcsv($fp, array($num,$row[1],$row[2],$grade[$row[3]],$row[4],$major[$row[5]],$row[10],$row[8]));
    $num++;
}
fclose($fp);
