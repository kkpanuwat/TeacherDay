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
    <script src="../assets/js/dashboard.js"></script>
</head>

<body onload="getAllComment()">
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

    </div>
</body>

</html>