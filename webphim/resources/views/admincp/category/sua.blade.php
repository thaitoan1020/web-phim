@extends('admin')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <strong>Sữa Category</strong>
                </div>
                <form action="{{ route('category.sua', ['id' => $category->id]) }}" method="post">
                <div class="card-body card-block">
                        @csrf
                        <div class="form-group">
                            <label class=" form-control-label" for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ $category->title }}" placeholder="Nhập title..." class="form-control @error('title') is-invalid @enderror " required />
                            @error('title')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class=" form-control-label" for="description">Description</label>
                            <textarea name="description" id="ckeditor" rows="9" placeholder="Nhập description..." class="form-control  @error('description') is-invalid @enderror">{{ $category->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="null">-- Chọn--</option>
                                    <option value="1" {{ ($category->status == 1) ? 'selected' : '' }}>Hiển thị</option>
                                    <option value="0" {{ ($category->status == 0) ? 'selected' : '' }}>Không</option>
                            </select>
                            @error('loaisanpham_id')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Cập nhật nhật
                    </button>
                </div>
                </form>
            </div>
         </div>
     </div>               
@endsection
@section('javascript')
<script>
    ClassicEditor
    .create( document.querySelector( '#ckeditor' ) )
    .then( ckeditor => {
        console.log( ckeditor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
