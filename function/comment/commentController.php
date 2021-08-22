<?php
include '../connectDatabase/connectDB.php';
if (isset($_POST['insertComment'])) {
    $stdId = $_POST['std_id'];
    $name = $_POST['name'];
    $major = $_POST['major'];
    $grade = $_POST['grade'];
    $comment = $_POST['comment'];
    $teacher = $_POST['teacher_id'];
    $tray = $_POST['tray'];
    $sql = "INSERT INTO comment (std_id,name,grade,major,comment,tray,teacher_id) VALUES('$stdId','$name',$grade,'$major','$comment',$tray,$teacher)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'success';
    } else {
        echo 'fail';
    }
}

if (isset($_GET['getNumRow'])) {
    $sql = "SELECT * FROM comment";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);
}

if (isset($_GET['allComment'])) {
    $sql = "SELECT * FROM comment ORDER BY comment_id DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="show-item2"><h3>' . $row['name'] . '</h3> <h3>ได้ร่วมอวยพรแล้ว</h3> <img class="img-pan2" src="https://i.pinimg.com/564x/16/32/42/163242221a327f3864234a62f30bd985.jpg" alt="pan"></div>';
    }
}

if (isset($_GET['allCommentDashboard'])) {
    $sql = "SELECT * FROM comment";
    $result = mysqli_query($conn, $sql);
    if (!isset($_GET['pagenumber'])) {
        $page  = 0;
        $numpage = 0;
    } else {
        $page = $_GET['pagenumber'];
        $numpage = $page * 10;
        echo '<script>alert("Hello")</script>';
    }
    $num = 0;
    while ($row = mysqli_fetch_array($result)) {
        if ($num >= $numpage && $num <= $numpage + 9) {
            echo '<div class="show-item2"><h3>' . $row['name'] . '</h3> <h3>ได้ร่วมอวยพรแล้ว</h3> <img width="50" src="https://i.pinimg.com/564x/16/32/42/163242221a327f3864234a62f30bd985.jpg" alt="pan"></div>';
        }
        $num++;
    }
    if ($page != 0) {
        echo '<button onclick="changePage(' . ($page - 1) . ')">BACK</button>';
    }
    echo '<button onclick="changePage(' . ($page + 1) . ')">NEXT</button>';
}
