<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo '<script>window.location.href = "../login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/imgs/icon.PNG">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="../assets/js/dashboard.js"></script>
</head>

<body onload="getAllComment()">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#233E8B" fill-opacity="1" d="M0,224L34.3,218.7C68.6,213,137,203,206,208C274.3,213,343,235,411,256C480,277,549,299,617,277.3C685.7,256,754,192,823,181.3C891.4,171,960,213,1029,218.7C1097.1,224,1166,192,1234,181.3C1302.9,171,1371,181,1406,186.7L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
<text x="30%" y="40%" class="svg-text2">ข้อมูลการอวยพรวันไหว้ครู</text>
</svg>

    <div class="container">
        <div class="search" id="searchBlog">
            <select class="search-select" name="selecttype" onchange="selectType(this.value)">
                <option value="1">ค้นหาทั้งหมด</option>
                <option value="2">ค้นหาจากสาขาวิชา</option>
                <option value="3">ค้นหาจากรายชื่ออาจารย์</option>
            </select>
        </div>
        <div class="form-control" id="result">
        </div>
<a href="../logout.php" class="btn-lg" ><i class="las la-sign-out-alt"></i></a>
    </div>
</body>

</html>