<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FingerG - Trang quản lý</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('') }}theme_admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('') }}theme_admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('') }}theme_admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('theme_admin/table-js/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('admin.home') }}">FingerG</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hưng <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Tài Khoản</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }}">
                        <a href="{{ route('admin.home') }}"><i class="fa fa-fw fa-home"></i> Trang Chủ</a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Danh Mục</a>
                    </li>                  
                    <li class="">
                        <a href=""><i class="fa fa-fw fa-table"></i> Sản Phẩm</a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-fw fa-edit"></i> Đơn Hàng</a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Bài Viết</a>
                    </li>
                    <li class="">
                        <a href=""><i class="fa fa-fw fa-bar-chart-o"></i> Đánh Giá</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            @if(\Session::has('success'))
                    <div class="alert alert-success alert-dismissible" style="position: fixed;right: 20px;z-index: 99999">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thành công!</strong> {{ \Session::get('success') }}
                    </div>
                @endif

                @if(\Session::has('danger'))
                    <div class="alert alert-danger alert-dismissible" style="position: fixed;right: 20px;z-index: 99999">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thất bại!</strong> {{ \Session::get('danger') }}
                    </div>
                @endif      
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('') }}theme_admin/table-js/js/jquery-3.5.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('') }}theme_admin/js/bootstrap.min.js"></script>

    
    <script type="text/javascript" src="{{ asset('theme_admin/table-js/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme_admin/table-js/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#out_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#input_img").change(function() {
            readURL(this);
        });
    </script>
    <script>
          // Basic example
        $(document).ready(function () {
          $('#dtBasicExample').DataTable({
            "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
          });
          $('.dataTables_length').addClass('bs-select');
        });
    </script>
    @yield('script')
</body>

</html>
