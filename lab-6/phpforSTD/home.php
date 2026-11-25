<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>My Home Page</title>
    <!-- #### ส่วนของ CSS ตกแต่งเว็บไซต์ ### -->
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <style>
        body, html {
            background-size: cover;
            font-family: 'Kanit', sans-serif;
        }
        a {
            text-decoration: none;
            color: black;
        }
        img, H2 {
            display: inline;
        }
        .row {
            display: flex;
        }
        .column {
            flex: 50%;
        }
        .table-wrapper {
            display: flex;
            justify-content: center;
        }
        table {
            border-collapse: collapse;
            background-color: #ffffff;
            text-align: center;
        }
        th, td {
            padding: 8px 24px;
        }
        .age {
            color: #d90000;
        }
    </style>
</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./12.png">
    <div class="row">
        <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
            <!-- ใส่ลิงก์ในหน้าเว็บที่นี่ -->
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a>
            </strong>
        </div>
    </div>
    <hr/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <?php
    $fullname = "Tanachai Jeephimai";
    $nameParts = explode(" ", trim($fullname));
    $firstname = strtoupper($nameParts[0]);
    $lastname = strtoupper($nameParts[1]);
    $nickname = "Rain";

    $birthdate = "2007-12-01";
    $birthDate = new DateTime($birthdate);
    $today = new DateTime();
    $age = $birthDate->diff($today)->y;
    $update = date("Y-m-d");
    ?>

    <div class="table-wrapper">
        <table border="1">
            <tr>
                <th><h2>Firstname</h2></th>
                <td><h2><?php echo $firstname; ?></h2></td>
            </tr>
            <tr>
                <th><h2>Lastname</h2></th>
                <td><h2><?php echo $lastname; ?></h2></td>
            </tr>
            <tr>
                <th><h2>Nickname</h2></th>
                <td><h2><?php echo $nickname; ?></h2></td>
            </tr>
            <tr>
                <th><h2>Age</h2></th>
                <td><h2 class="age"><?php echo $age; ?></h2></td>
            </tr>
            <tr>
                <th><h2>Update</h2></th>
                <td><h2><?php echo $update; ?></h2></td>
            </tr>
        </table>
    </div>

</body>
</html>
```[cite: 1, 2]