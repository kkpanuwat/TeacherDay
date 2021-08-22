<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <script src="../assets/js/dashboard.js"></script>
</head>

<body onload="getAllComment()">
    <div class="container">
        <div class="search">
            <input type="text" id="searchInput">
            <button>Search</button>
        </div>

        <div class="table-result">
            <div id="result"></div>
        </div>
    </div>
</body>

</html>