
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tufy Store | In hóa đơn</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <link rel="shortcut icon" href="images/logo_tufy.png" type="image/x-icon">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/custom.css">

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/baguetteBox.min.css">
    <link rel="stylesheet" href="./css/bootsnav.css">
    <link rel="stylesheet" href="./css/bootstrap-select.css">
    <link rel="stylesheet" href="./css/carousel-ticker.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- jQuery UI CSS Reference -->
    <link href="../themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <!-- Required jQuery and jQuery UI Javascript references -->
    <script src="../Scripts/jquery-1.7.1.min.js"></script>
    <script src="../Scripts/jquery-ui-1.10.4.min.js"></script>

    <script src="../Scripts/modernizr-2.8.3.js"></script>

    <link href="../css/value.css" rel="stylesheet" />
</head>

<body>
    <?php
       $conn= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
        $sql= "SELECT * FROM `bookingyc`";
        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_assoc($result);
   ?>
            <div class="wrapper">
                <!-- Main content -->
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-header">
                                <!-- <i style="margin-right:16px" class="fas fa-store"></i> -->
                               
                                <span>Tufy Store</span>

                                <small class="float-right">
                                    Ngày: <?php $date = date('d/m/y'); echo $date;  ?>
                                </small>
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col" style="text-align: center;">
                            Dịch vụ vận chuyển hành khách
                            <address>
                                
                            123A, Quốc lộ 53, Châu Thành, tỉnh Trà Vinh<br>
                                SĐT: 0383113xxx<br>
                                Email: KimHieu2407@gmail.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col" style="text-align: center;">
                            Giao đến
                            <address>
                                <strong><?php echo $row['tenkhachhang'] ?></strong><br>
                                Ngày đặt xe: <?php echo $row['ngaydatxe'] ?><br>
                                Giờ đặt xe: <?php echo $row['giodatxe'] ?><br>
                                Nơi đến: <?php echo $row['noiden'] ?><br>
                                Tuyến đường: <?php echo $row['tuyen'] ?><br>
                                Tài xế: <?php echo $row['taixe'] ?><br>
                                Số hiệu xe: <?php echo $row['sohieuxe'] ?><br>
                                Giá vé: <?php echo $row['giavexe'] ?><br>

                            </address>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Table row -->
                    <div class="print-bill-id">Mã Hóa Đơn: <span><?php echo $row['bookingyc_id']; ?></span></div>

                    <!-- /.row -->

 
            <!-- ./wrapper -->
            <!-- Page specific script -->
            <script>
                window.addEventListener("load", window.print());
            </script>

</body>

</html>