<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PatientGPS | FORM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <script src="https://api.longdo.com/map/?key=4dcfea68a549b2bea822c22b0ab3a967"></script>
    <script>
        function init() {
            var map = new longdo.Map({
                placeholder: document.getElementById('map'),
                zoom: 16,
                lastView: false,
                ui: longdo.UiComponent.Mobile
            });
            map.Ui.DPad.visible(true);
            map.Ui.Zoombar.visible(true);
            map.Ui.Geolocation.visible(true);
            map.Ui.Toolbar.visible(true);
            map.Ui.LayerSelector.visible(true);
            map.Ui.Fullscreen.visible(true);
            map.Ui.Crosshair.visible(true);
            map.Ui.Scale.visible(true);
            map.location(longdo.LocationMode.Geolocation);
        }
    </script>
    <style type="text/css">
        #map {
            width: 100%;
            height: 650px;
            margin: auto;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini" onload="init();">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.php" class="brand-link">

                <img src="dist/img/patient.png" alt="patient Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PatientGPS</span>
            </a>

            <!--ส่วนเริ่มต้นของ Sidebar-->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">Welcome -- </a>
                    </div>
                </div>

                <!-- เริ่มต้น     Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">หน้าแรก</li>
                        <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link ">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-header">จัดการข้อมูล</li>
                        <li class="nav-item">
                            <a href="./form_paitent.php" class="nav-link active">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>เพิ่มข้อมูลผู้ป่วย</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Widgets
                                    <span class="right badge badge-danger">Old</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">หน้าแรก</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    ทดสอบ
                                    <span class="right badge badge-danger">Hot</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">PATIENT INFORMATION</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card mt-1">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="nav-icon fas fa-user"></i>
                                        ข้อมูลผู้ป่วย
                                    </h3>
                                </div>

                                <div class="card-body">
                                    <!-- Card body  -->
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="pname">คำนำหน้าชื่อ</label>
                                                <select id="pname" class="form-control">
                                                    <option selected>โปรดเลือก</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="fname">Email address</label>
                                                <input type="text" class="form-control" id="fname" placeholder="Enter email">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="lname">นามสกุล</label>
                                                <input type="ะำปะ" class="form-control" id="lname" placeholder="นามสกุล">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="file">รูปภาพ</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card mt-1">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="nav-icon fas fa-map"></i>
                                        แผนที่
                                    </h3>
                                </div>

                                <div class="card-body">
                                    <!-- Card body  -->
                                    <form>
                                        <div id="map"></div>
                                    </form>
                                    <!-- /.card-body -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(16.79795254692895, 102.18781146989369),
                zoom: 13,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>


</body>

</html>