<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <th>ข้อความ</th>
                    <th>วันที่ส่ง</th>
                    <th>ชื่อผู้รับ</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Narattha</td>
                    <td>สุขสันต์วันเกิดนะค้า</td>
                    <td>22-8-2564</td>
                    <td>Sumonta</td>
                    <td><button class="btn-trash"><i class="fa fa-trash"></i></button></td>
                </tr>
            </table>
            <div class="pager">
                <ul>
                    <li>Page <input class="input-page" type="text"> of 500</li>
                    <li>
                        <button class="button">Previous</button>
                    </li>
                    <li>
                        <button class="button">Next</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>