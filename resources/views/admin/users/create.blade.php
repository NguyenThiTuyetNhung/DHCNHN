@extends('admin.layouts.app')

@section('title', "Thêm khách hàng")

@section('content')

<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
              <label for="username">Tài khoản</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Tài khoản" value="{{ old('username') }}">
              <span class="text text-danger">{{ $errors->first('username') }}</span>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="Mật khẩu" value="{{ old('password') }}">
              <span class="text text-danger">{{ $errors->first('password') }}</span>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label for="name">Tên khách hàng</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Tên khách hàng" value="{{ old('name') }}">
              <span class="text text-danger">{{ $errors->first('name') }}</span>
            </div>
            
            <div class="form-group"> 
               <label for="name">Ngày sinh</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
              </div>
              <input type="date" class="form-control" name="birthday" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" value="{{ old('birthday') }}">
               <span class="text text-danger">{{ $errors->first('birthday') }}</span>
            </div>
            </div>
            <div class="form-group">
              <label for="gender">Giới tính</label>
              <select class="form-control" name="gender" id="gender">
                <option value="">Chọn giới tính</option>
                <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Nam</option>
                <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>Nữ</option>
              </select>
              <span class="text text-danger">{{ $errors->first('gender') }}</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Địa chỉ email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Địa chỉ email" value="{{ old('email') }}">
              <span class="text text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ" value="{{ old('address') }}">
              <span class="text text-danger">{{ $errors->first('address') }}</span>
            </div>
             <div class="form-group">
              <label for="phone">Số điện thoại</label>
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
              <span class="text text-danger">{{ $errors->first('phone') }}</span>
            </div>
            <div class="form-group">
              <label for="status">Trạng thái</label>
              <select class="form-control" name="status" id="status">
                <option value="">Chọn trạng thái</option>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Đang hoạt động</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Dừng hoạt động</option>
              </select>
              <span class="text text-danger">{{ $errors->first('status') }}</span>
            </div>
          </div>
        </div>
             
            <!-- /.form-group -->
          
            <!-- /.form-group -->


            <!-- /.form-group -->
        <div class="row">
        <div class="col-md-1">
          <button type="submit" class="btn btn-block btn-primary">Thêm</button>
        </div>
        <!-- /.col -->
        <div class="col-md-1">
           <a href=" {{ route('admin.users.index') }} "><button type="button" class="btn btn-block btn-danger">Hủy bỏ</button>
           </a>  
        </div>
        <!-- /.col -->
      </div>
      </div>

</div>

</form>
</section>
</div>



@endsection