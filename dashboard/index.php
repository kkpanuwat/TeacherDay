<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <script src="../assets/js/dashboard.js"></script>
</head>

<body onload="getAllComment()">
    <div class="container">
        <div class="search">
            <input type="text" id="searchInput">
            <button>Search</button>
        </div>

        <!-- <div class="table-result">
            <div id="result"></div>
        </div> -->

        <div class="form-control">
            <table>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อผู้ส่ง</th>
                    <th>ชื่อผู้รับ</th>
                    <th>วันที่ส่ง</th>
                    <th>ข้อความ</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Narattha</td>
                    <td>Sumonta</td>
                    <td>22-8-2564</td>
                    <td>สุขสันต์วันเกิดนะค้า</td>
                </tr>         
            </table>
        </div>

    </div>
</body>

</html>