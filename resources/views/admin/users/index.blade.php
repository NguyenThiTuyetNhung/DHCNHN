@extends('admin.layouts.app')
@section('title', "Danh sách khách hàng")
@section('content')
     <div class="content-wrapper" style="min-height: 618px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h4>Danh sách khách hàng</h4>
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
                   <form action="" method="GET">
                    <div class="row">
                      <!-- text input -->
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Nhập từ khóa cần tìm: </label>
                          <input type="text" class="form-control" name="name" placeholder="Nhập từ khóa tìm kiếm ..." value="{{ request('name') }}">
                        </div>
                      </div>
                     {{--  <div class="col-md-3">
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
                      </div> --}}
                      <div class="col-md-3" style="margin: 30px 0;" >
                          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                      </div>
                        <div class="col-sm-6" style=" margin-top:30px;text-align: right;float: right;">
              <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
                    </div>
                  </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th style="width: 30px;">STT</th>
                    {{--  <th>Mã tài khoản</th> --}}
                    <th style="width: 30px">Tài khoản</th>
                    <th style="width: 30px">Họ tên</th>
                    <th style="width: 30px">Ngày sinh</th>
                    <th style="width: 30px">Giới tính</th>
                    <th style="width: 30px">Email</th>
                    <th style="width: 30px">Địa chỉ</th>
                    <th style="width: 30px">Số điện thoại</th>
                    <th style="width: 30px">Trạng thái</th>
                    <th style="width: 92px;">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $key => $user)
                  <tr>
                    <td style="width: 30px">{{ $key+1 }}</td>
                  {{--   <td>{{ $user->id }}</td> --}}
                    <td style="width: 30px">{{ $user->username }}</td>
                    <td style="width: 30px">{{ $user->name }}</td>
                    <td style="width: 30px">{{ $user->birthday }}</td>
                    <td style="width: 30px">{{ $user->gender }}</td>
                    <td style="width: 30px">{{ $user->email }}</td>
                    <td style="width: 30px">{{ $user->address }}</td>
                    <td style="width: 30px">{{ $user->phone }}</td>
                    <td style="width: 30px">
                      @if ($user->status == '1')
                      {{ "Đang hoạt động" }}
                      @elseif ($user->status == '0')
                      {{ "Tạm dừng hoạt động" }}
                      @endif
                    </td>
                     <td style="width: 30px"><a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('admin.users.destroy', ['id' => $user->id]) }}" class="btn btn-delete btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>

                  @endforeach
                </tbody></table>
              </div>
              <!-- Modal -->
              <div class="modal fade modalDelete" id="myModal" role="dialog">
              <div class="modal-dialog modal-sm">
                <form action="" method="POST">
                  @csrf @method('DELETE')
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>Bạn có muốn xóa khách hàng không ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Có</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Không</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
              <!-- /.card-body -->
             {{--  <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div> --}}
            <div>
               {{ $users->links() }}
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection