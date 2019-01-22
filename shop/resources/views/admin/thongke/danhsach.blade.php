 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thống Kê
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> thống kê
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->



    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">

                        <div class="col-md-4">
                            <i class="fa fa-users fa-fw"></i>
                            <p>Người dùng</p>
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="huge">{{$users}}</div>
                          
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <h4>Sản phẩm</h4>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$products}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <h4>Đơn Hàng</h4>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$bills}}</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                           <h4>Doanh Thu</h4>
                        </div>
                        <div class="col-md-8 col-xs-8 text-right">
                            <div class=""><p style="font-size: 20px">{{$thongke_ds}} đồng</p></div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.container-fluid -->

</div>
</div>
@endsection