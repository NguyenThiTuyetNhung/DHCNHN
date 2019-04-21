@extends('admin.layouts.app')
@section('active_order','active')
@section('title', "Sửa đơn hàng")
@section('content')
<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <form action="{{ route('admin.orders.update', ['id' => $order->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf @method('PUT')
      
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            
            <div class="form-group">
              <label for="name">Mã khách hàng:</label>
                  <label for="name">{{ $user->username}} </label>
            </div>
             <div class="form-group">
              <label for="name">Tên khách hàng:</label>
                  <label for="name">{{ $user->name}} </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label for="detail">Yêu cầu</label>
              <input type="text" class="form-control" name="detail" id="detail" placeholder="Yêu cầu" value="{{ old('request', $order->request) }}">
              <span class="text text-danger">{{ $errors->first('request') }}</span>
            </div>
            <div class="form-group">
              <label for="status">Chọn hình thức giao hàng</label>
              <select class="form-control" name="Delivered" id="Delivered">
                <option value="">Chọn hình thức giao hàng</option>
                <option value="1" {{ old('Delivered', $order->Delivered) == '1' ? 'selected' : '' }}>Chuyển phát nhanh</option>
                <option value="0" {{ old('Delivered', $order->Delivered) == '0' ? 'selected' : '' }}>Nhận hàng trực tiếp tại cửa hàng</option>
              </select>
              <span class="text text-danger">{{ $errors->first('Delivered') }}</span>
            </div>
            <div class="form-group">
              <label for="view">Địa chỉ giao hàng</label>
              <input type="number" class="form-control" name="Address" id="Address" placeholder="Số lượng" value="{{ old('Address', $order->Address) }}">
              <span class="text text-danger">{{ $errors->first('Address') }}</span>
            </div>
            <!-- /.form-group -->


            <!-- /.form-group -->

          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <!-- /.form-group -->
           {{--  <div class="form-group">
              <label for="user_id">Mã khách hàng</label>
              <select class="form-control" name="user_id" id="user_id">
                <option value="">Mã khách hàng</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id', $order->user_id) == $user->id ? 'selected' : '' }}>{{ $user->username }}</option>
                @endforeach
              </select>
              <span class="text text-danger">{{ $errors->first('user_id') }}</span>
            </div> --}}
            {{-- <div class="form-group">
              <label for="Group_product_id">Mã nhóm sản phẩm</label>
              <select class="form-control" name="Group_product_id" id="Group_product_id">
               <option value="">Chọn mã nhóm sản phẩm</option>
               @foreach ($groupProducts as $groupProduct)
               <option value="{{ $groupProduct->id }}" {{ old('Group_product_id', $product->Group_product_id) == $groupProduct->id ? 'selected' : '' }}>{{ $groupProduct->name }}</option>
               @endforeach
             </select>
              <span class="text text-danger">{{ $errors->first('Group_product_id') }}</span>
           </div>
           <div class="form-group">
            <label for="note">Ghi chú</label>
            <textarea id="note" name="note" class="form-control" rows="10">{{ old('note', $product->note) }}</textarea>
              <span class="text text-danger">{{ $errors->first('note') }}</span>
          </div> --}}
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!--Button -->
      <div class="row">
        <div class="col-md-1">
          <button type="submit" class="btn btn-block btn-primary">Cập nhật</button>
        </div>
        <!-- /.col -->
        <div class="col-md-1">
          <button type="button" class="btn btn-block btn-danger">Hủy bỏ</button>
        </div>
        <!-- /.col -->
      </div>
      <!--End Button -->
    </div>
  </form>
</section>
</div>
	{{-- expr --}}
@endsection