@extends('admin.layouts.app')
@section('title', "Danh sách  đơn hàng")
@section('content')
	 <div class="content-wrapper" style="min-height: 618px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>Danh sách đơn hàng</h1>
          </div>
         {{--  <div class="col-sm-9">
              <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Xem chi tiết</a>
            </div> --}}
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-body">
                    <div class="row">
                      <!-- text input -->
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Nhập từ khóa cần tìm: </label>
                          <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm ...">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Từ ngày:</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Đến ngày:</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                          </div>
                          <!-- /.input group -->
                      </div>
                      </div>
                      <div class="col-md-3" style="margin: 30px 0;" >
                          <button type="button" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 15px">STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng hóa đơn</th>
                    <th>Yêu cầu</th>
                    <th>Hình thức giao hàng</th>
                    <th>Địa chỉ</th>
                    <th>Tùy chọn</th>
                  </tr>
                  @foreach ($orders as $key => $order)
                  <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->users->name }}</td>
                    <td>{{ $order->Total_memory }}</td>
                    <td>{{ $order->Request }}</td>
                    <td>{{ $order->Delivered }}</td>
                    <td>{{ $order->Address }}</td>
                    <td><a href="../QuanLyTaiKhoan/ChinhSuaTaiKhoan.html" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                       <a href="{{ route('admin.orders.destroy', ['id' => $order->id]) }}" class="btn btn-delete btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>    
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              </div>
               <!-- Modal -->
               <div class="modal fade modalDelete" id="myModal" role="dialog">
              <div class="modal-dialog modal-sm">
                <form action="" method="POST">
                  @csrf @method('DELETE')
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>Bạn có muốn xóa đơn hàng không ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Có</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Không</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
              {{ $orders->links() }}
            </div>
              <!-- /.card-body -->
              

            </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div> -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection