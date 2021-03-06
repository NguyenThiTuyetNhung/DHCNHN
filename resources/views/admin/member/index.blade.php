@extends('admin.layouts.app')
@section('title', "Danh sách nhân viên")
@section('content')
<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-3">
          <h1>Danh sách nhân viên</h1>
        </div>
        <div class="col-sm-9">
          <a href="{{ route('admin.members.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
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
                  </div> --}}
                 {{--  <div class="col-md-3">
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
                </div>
              </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">STT</th>
                    {{--   <th>Mã tài khoản</th> --}}
                    <th>Tài khoản</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Phân quyền</th>
                    <th>Trạng thái</th>
                    <th>Tùy chọn</th>
                  </tr>
                  @foreach ($members as $key => $member)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    {{-- <td>{{ $member->id }}</td> --}}
                    <td>{{ $member->username }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->birthday }}</td>
                    <td>
                      @if ($member->gender == '1')
                      {{ "Nam" }}
                      @elseif ($member->gender == '0')
                      {{ "Nữ" }}
                      @endif
                    </td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>
                      @if ($member->rule == '1')
                      {{ "Nhân viên" }}
                      @elseif ($member->rule == '0')
                      {{ "Quản trị viên" }}
                      @endif
                    </td>
                    <td>
                      @if ($member->status == '1')
                      {{ "Đang hoạt động" }}
                      @elseif ($member->status == '0')
                      {{ "Tạm dừng hoạt động" }}
                      @endif
                    </td>
                    <td><a href="{{ route('admin.members.edit', ['id' => $member->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('admin.members.destroy', ['id' => $member->id]) }}" class="btn btn-delete btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>   
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
                        <p>Bạn có muốn xóa nhân viên không ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Có</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Không</button>
                      </div>
                    </div>
                  </form>
                </div>
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
               {{ $members->links() }}
             </div>
           </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
       </div>
       @endsection