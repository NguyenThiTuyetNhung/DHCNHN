@extends('admin.layouts.app')
@section('title', "Thêm danh mục")

@section('content')
	<div class="content-wrapper" style="min-height: 618px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <form action="{{ route('admin.group_products.update',$g_p->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">Ảnh danh mục</label>
              <input type="file" id="image" name="image" placeholder="Ảnh danh mục" style="display: block; height:38px" accept="image/*">
              <span class="text text-danger">{{ $errors->first('image') }}</span>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="name">Tên danh mục</label>
              <input type="text" class="form-control" value="{{ $g_p->name }}" name="name" id="name" placeholder="Tên danh mục" value="{{ old('name') }}">
              <span class="text text-danger">{{ $errors->first('name') }}</span>
            </div>
            <!-- /.form-group -->
			<div class="form-group">
              <label for="status">Trạng thái</label>
              <select class="form-control" name="status" id="status">
                <option value="">Chọn trạng thái</option>
                <option value="1" {{ old('status', $g_p->status) == '1' ? 'selected' : '' }}>Còn hàng</option>
                <option value="0" {{ old('status', $g_p->status) == '0' ? 'selected' : '' }}>Hết hàng</option>
              </select>
              <span class="text text-danger">{{ $errors->first('status') }}</span>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6">
			
            <!-- /.form-group -->

            <div class="form-group">
              <label for="content">Nội dung</label>
              <textarea class="form-control" name="content" rows="10">
              	{{ old('content',$g_p->content) }}
              </textarea>
              <span class="text text-danger">{{ $errors->first('content') }}</span>
            </div>
            
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
          <a href=" {{ route('admin.products.index') }} "><button type="button" class="btn btn-block btn-danger">Hủy bỏ</button></a>  
        </div>
        <!-- /.col -->
      </div>
      <!--End Button -->
    </div>
  </form>
</section>
</div>
@endsection