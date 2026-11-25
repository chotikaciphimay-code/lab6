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
    a{
        text-decoration: none;
        color: black;
    }
    img,H2{

        display: inline;
    }
    .row {
    display: flex;
    }

    .column {
    flex: 50%;
    }

/* จัดตำแหน่งหัวข้อให้อยู่กึ่งกลาง */
.header {
    width: 100%;
    text-align: center;
    margin: 25px auto 15px auto;
}

.title {
    display: inline-block;
    text-align: center;
}

/* จัดเนื้อหาให้อยู่กึ่งกลางหน้าจอ */
.content {
    width: 85%;
    max-width: 1100px;
    margin: 0 auto;
    text-align: left;
    background-color:white;
}

/* จัดข้อความตัวอย่างโค้ด */
.content pre {
    text-align: left;
    white-space: pre-wrap;
    line-height: 1.8;
}
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./35.png">
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
	
<!-- ########## ใส่ CODE PHP และเติม CODE ที่เหลือที่นี่ -->

</body>
</html>