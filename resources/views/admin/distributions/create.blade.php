@extends('admin.layouts.app')

@section('title', "Thêm nhà phân phối")

@section('content')

<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <form action="{{ route('admin.distributions.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <!-- /.form-group -->
            <div class="form-group">
              <label for="name">Tên hãng</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Tên hãng" value="{{ old('name') }}">
              <span class="text text-danger">{{ $errors->first('name') }}</span>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label for="tax">Mã số thuế</label>
              <input type="text" class="form-control" name="tax" id="tax" placeholder="Mã số thuế" value="{{ old('tax') }}">
              <span class="text text-danger">{{ $errors->first('tax') }}</span>
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
            <div class="form-group">
              <label for="phone">Số điện thoại</label>
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
              <span class="text text-danger">{{ $errors->first('phone') }}</span>
            </div>
            <!-- /.form-group -->
           <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
              <span class="text text-danger">{{ $errors->first('email') }}</span>
            </div>
            <!-- /.form-group -->
           <div class="form-group">
              <label for="representation">Tên người đại diện</label>
              <input type="text" class="form-control" name="representation" id="representation" placeholder="Tên người đại diện" value="{{ old('representation') }}">
              <span class="text text-danger">{{ $errors->first('representation') }}</span>
            </div>

            <!-- /.form-group -->

          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <!-- /.form-group -->{{--  --}}
          
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!--Button -->
      <div class="row">
        <div class="col-md-1">
          <button type="submit" class="btn btn-block btn-primary">Thêm</button>
        </div>
        <!-- /.col -->
        <div class="col-md-1">
          <a href=" {{ route('admin.distributions.index') }} "><button type="button" class="btn btn-block btn-danger">Hủy bỏ</button></a> 
        </div>
        <!-- /.col -->
      </div>
      <!--End Button -->
    </div>
  </form>
</section>
</div>



@endsection