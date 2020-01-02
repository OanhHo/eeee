<?php ob_start(); ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <?php
    session_start();
    if(!isset($_SESSION["username"])){
        header('location: trangchu.php');
    }

    ?>
    <html>
    <head>
        <style>
            div.container {
                width: 100%;
            }

            header{
                padding: 1em;
                background-color:transparent;
                clear: left;
            }
            footer {
                padding: 1em;
                color: white;
                background-color:#202a40;
                clear: left;
                text-align: center;

            }

            nav {
                float: left;
                max-width: 250px;
                margin: 0;
                padding: 0;
                background-color:#dedebc;
                white-space: nowrap;
                list-style-type: none;
            }

            nav ul {
                list-style-type: none;
                padding: 0;
                float: left;
            }

            nav ul a {
                left: 0;
                display: block;
                color: black;
                font-size: 20px;
                line-height: 0.3;
                text-align:left;
                padding: 14px;
                text-decoration: none;
                border: 1px solid #a2d9ec;
            }
            nav ul a:hover{
                background-color: #ffffff;
            }

            article {
                margin-left: 170px;
                padding: 1em;
                overflow: hidden;
            }
            .table1{
                width: 500px;
            }
        </style>
        <meta charset="utf-8">
    </head>
<body>

<div class="container">

    <header style="background-image: url(anhhep.png);  height: 100px;">
        <label style="color: blue;">
            <?php
            echo "Hôm nay là :  " . date("Y/m/d") . "<br>";
            ?>
        </label>
        <button style="height: 30px; width: 100px; border-radius: 5px; background-color: #e8aa25; border: 0px; float: right; "><a href="logout.php"> Đăng xuất</a> </button>
        <button style="height: 30px; width: 100px; border-radius: 5px; background-color: #1bd8bc; border: 0px; float: right; margin-right: 10px; ">
            <?php
            echo $_SESSION['username'];
            ?>
        </button>

    </header>

    <nav>
        <ul>
            <a href="thongke.php" id="themSP">Trang chủ</a>
            <a href="add.php" id="themSP">Thêm sản phẩm mới</a>
            <a href="list.php">List sản phẩm </a>
            <a href="edit.php">Sửa thông tin sản phẩm</a>
            <a href="delete.php">Xóa sản phẩm</a>

        </ul>
    </nav>

    <article>
        <div style="height: 100px; ">
            <form action="" method="POST">
                <input type="text" name="edit" style="width: 50%;height: 40px; margin-left: 6%;" value="Nhập thông muốn xóa "> <button id="edit" style="height: 40px; width: 20%; background-color: #2b3d52; border: 0px solid; color: #ffffff;">Tìm kiếm</button>
            </form>
        </div>
        <div style="margin-left: 150px; color: Red; font-size: 30px;">
            <?php
            //Get info

            include('connect.php');
            $id = $_REQUEST['Id'];
            include('connect.php');
            $query="DELETE from thongke WHERE Id=$id";
            if ($link->query($query) === TRUE) {
                echo "Xoa thanh cong";

            } else {
                echo "Error updating record: " . $link->error;
            }
            $link->close();
            ?>
        </div>
    </article>
    <footer>Copyright &copy; 2019 dt xinh dep</footer>

</div>

</div>

</body>
</html>
<?php ob_flush(); ?>