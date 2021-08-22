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
        echo '<div class="show-item2"><h3>' . $row['name'] . '</h3> <h3>ได้ร่วมอวยพรแล้ว</h3> <img class="img-pan2" src="./assets/imgs/pan0' . $row["tray"] . '.png" alt="pan"></div>';
    }
}

if (isset($_GET['allCommentDashboard'])) {
    $sql = "SELECT * FROM comment JOIN teacher ON comment.teacher_id = teacher.teacher_id";
    $result = mysqli_query($conn, $sql);
    if (!isset($_GET['pagenumber'])) {
        $page  = 0;
        $numpage = 0;
    } else {
        $page = $_GET['pagenumber'];
        $numpage = $page * 25;
        echo '<script>alert("Hello")</script>';
    }
    $num = 0;
    echo '
    <table>   
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อผู้ส่ง</th>
        <th>ข้อความ</th>
        <th>วันที่ส่ง</th>
        <th>ชื่อผู้รับ</th>
        <th></th>
    </tr>';
    while ($row = mysqli_fetch_array($result)) {
        if ($num >= $numpage && $num <= $numpage + 24) {
            echo '
        <tr>
            <td>' . ($num + 1) . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['comment'] . '</td>
            <td>' . $row['time_stamp'] . '</td>
            <td>' . $row['teacher_name'] . '</td>
            <td><button class="btn-trash" onclick="deleteComment(' . $row['comment_id'] . ')"><i class="fa fa-trash"></i></button></td>
        </tr>';
        }
        $num++;
    }
    echo '</table>';
    $btnPrevious = '';
    if ($page != 0) {
        $btnPrevious = '            
    <li>
        <button class="button" onclick="changePage(' . ($page - 1) . ')">Previous</button>
    </li>';
    }
    echo '            
    <div class="pager">
        <ul>
            <li>Page <input class="input-page" onchange=changePage(this.value) readonly type="number" value="' . ($page + 1) . '" max="2" min="1"> of ' . (floor((mysqli_num_rows($result) / 25)) + 1) . '</li>
            ' . $btnPrevious . '
            <li>
                <button class="button" onclick="changePage(' . ($page + 1) . ')">Next</button>
            </li>
        </ul>
    </div>';
}


if (isset($_POST['deleteComment'])) {
    $commentID = $_POST['comment_id'];
    $sql = "DELETE FROM comment WHERE comment_id = $commentID";
    mysqli_query($conn, $sql);
}


if (isset($_GET['commentByMajor'])) {
    $majorID = $_GET['major'];
    $sql = "SELECT * FROM comment JOIN teacher ON teacher.teacher_id = comment.teacher_id WHERE comment.major = '$majorID' ";
    $result= mysqli_query($conn, $sql);
    if (!isset($_GET['pagenumber'])) {
        $page  = 0;
        $numpage = 0;
    } else {
        $page = $_GET['pagenumber'];
        $numpage = $page * 25;
        echo '<script>alert("Hello")</script>';
    }
    $num = 0;
    echo '
    <table>   
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อผู้ส่ง</th>
        <th>ข้อความ</th>
        <th>วันที่ส่ง</th>
        <th>ชื่อผู้รับ</th>
        <th></th>
    </tr>';
    while ($row = mysqli_fetch_array($result)) {
        if ($num >= $numpage && $num <= $numpage + 24) {
            echo '
        <tr>
            <td>' . ($num + 1) . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['comment'] . '</td>
            <td>' . $row['time_stamp'] . '</td>
            <td>' . $row['teacher_name'] . '</td>
            <td><button class="btn-trash" onclick="deleteComment(' . $row['comment_id'] . ')"><i class="fa fa-trash"></i></button></td>
        </tr>';
        }
        $num++;
    }
    echo '</table>';
    $btnPrevious = '';
    if ($page != 0) {
        $btnPrevious = '            
    <li>
        <button class="button" onclick="changePage(' . ($page - 1) . ')">Previous</button>
    </li>';
    }
    echo '            
    <div class="pager">
        <ul>
            <li>Page <input class="input-page" onchange=changePage(this.value) readonly type="number" value="' . ($page + 1) . '" max="2" min="1"> of ' . (floor((mysqli_num_rows($result) / 25)) + 1) . '</li>
            ' . $btnPrevious . '
            <li>
                <button class="button" onclick="changePage(' . ($page + 1) . ')">Next</button>
            </li>
        </ul>
    </div>';
}



if (isset($_GET['commentByTeacher'])) {
    $majorID = $_GET['major'];
    $teacher_id =$_GET['teacher_id'];
    $sql = "SELECT * FROM comment JOIN teacher ON teacher.teacher_id = comment.teacher_id WHERE comment.major = '$majorID' and comment.teacher_id = $teacher_id";
    $result= mysqli_query($conn, $sql);
    if (!isset($_GET['pagenumber'])) {
        $page  = 0;
        $numpage = 0;
    } else {
        $page = $_GET['pagenumber'];
        $numpage = $page * 25;
        echo '<script>alert("Hello")</script>';
    }
    $num = 0;
    echo '
    <table>   
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อผู้ส่ง</th>
        <th>ข้อความ</th>
        <th>วันที่ส่ง</th>
        <th>ชื่อผู้รับ</th>
        <th></th>
    </tr>';
    while ($row = mysqli_fetch_array($result)) {
        if ($num >= $numpage && $num <= $numpage + 24) {
            echo '
        <tr>
            <td>' . ($num + 1) . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['comment'] . '</td>
            <td>' . $row['time_stamp'] . '</td>
            <td>' . $row['teacher_name'] . '</td>
            <td><button class="btn-trash" onclick="deleteComment(' . $row['comment_id'] . ')"><i class="fa fa-trash"></i></button></td>
        </tr>';
        }
        $num++;
    }
    echo '</table>';
    $btnPrevious = '';
    if ($page != 0) {
        $btnPrevious = '            
    <li>
        <button class="button" onclick="changePage(' . ($page - 1) . ')">Previous</button>
    </li>';
    }
    echo '            
    <div class="pager">
        <ul>
            <li>Page <input class="input-page" onchange=changePage(this.value) readonly type="number" value="' . ($page + 1) . '" max="2" min="1"> of ' . (floor((mysqli_num_rows($result) / 25)) + 1) . '</li>
            ' . $btnPrevious . '
            <li>
                <button class="button" onclick="changePage(' . ($page + 1) . ')">Next</button>
            </li>
        </ul>
    </div>';
}