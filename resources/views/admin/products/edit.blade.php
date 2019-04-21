@extends('admin.layouts.app')

@section('title', "Sửa sản phẩm")

@section('content')

<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <form action="{{ route('admin.products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf @method('PUT')
      
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">Ảnh sản phẩm</label>
              <br>
              <img src="{{ asset($product->image) }}" alt="HÌnh ảnh" style=" max-width: 100%; ">
              <input type="file" id="image" name="image" placeholder="Ảnh sản phẩm" style="display: block; height:38px" accept="image/*">
              <span class="text text-danger">{{ $errors->first('image') }}</span>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="name">Tên sản phẩm</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Tên sản phẩm" value="{{ old('name', $product->name) }}">
              <span class="text text-danger">{{ $errors->first('name') }}</span>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label for="detail">Chi tiết sản phẩm</label>
              <input type="text" class="form-control" name="detail" id="detail" placeholder="Chi tiết sản phẩm" value="{{ old('detail', $product->detail) }}">
              <span class="text text-danger">{{ $errors->first('detail') }}</span>
            </div>
            <div class="form-group">
              <label for="status">Trạng thái</label>
              <select class="form-control" name="status" id="status">
                <option value="">Chọn trạng thái</option>
                <option value="1" {{ old('status', $product->status) == '1' ? 'selected' : '' }}>Còn hàng</option>
                <option value="0" {{ old('status', $product->status) == '0' ? 'selected' : '' }}>Hết hàng</option>
              </select>
              <span class="text text-danger">{{ $errors->first('status') }}</span>
            </div>
            <div class="form-group">
              <label for="view">Số lượng</label>
              <input type="number" class="form-control" name="view" id="view" placeholder="Số lượng" value="{{ old('view', $product->view) }}">
              <span class="text text-danger">{{ $errors->first('view') }}</span>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="price">Giá cũ</label>
              <input type="number" class="form-control" name="price" id="price" placeholder="Giá cũ sản phẩm" value="{{ old('price', $product->price) }}">
              <span class="text text-danger">{{ $errors->first('price') }}</span>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="price_new">Giá mới</label>
              <input type="number" class="form-control" name="price_new" id="price_new" placeholder="Giá mới sản phẩm" value="{{ old('price_new', $product->price_new) }}">
              <span class="text text-danger">{{ $errors->first('price_new') }}</span>
            </div>


            <!-- /.form-group -->

          </div>
          <!-- /.col -->
          <div class="col-md-6">

            <!-- /.form-group -->
            <div class="form-group">
              <label for="Distribution_id">Nhà phân phối</label>
              <select class="form-control" name="Distribution_id" id="Distribution_id">
                <option value="">Chọn nhà phân phối</option>
                @foreach ($distributions as $distribution)
                <option value="{{ $distribution->id }}" {{ old('Distribution_id', $product->Distribution_id) == $distribution->id ? 'selected' : '' }}>{{ $distribution->name }}</option>
                @endforeach
              </select>
              <span class="text text-danger">{{ $errors->first('Distribution_id') }}</span>
            </div>
            <div class="form-group">
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
          </div>
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
          <a href="{{ route('admin.products.index') }}"><button type="button" class="btn btn-block btn-danger">Hủy bỏ</button>
        </div></a>
        <!-- /.col -->
      </div>
      <!--End Button -->
    </div>
  </form>
</section>
</div>



@endsection