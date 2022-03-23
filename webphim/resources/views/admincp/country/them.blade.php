@extends('admin')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <strong>Thêm Country</strong>
                </div>
                <form action="{{ route('country.them') }}" method="post" class="">
                <div class="card-body card-block">
                        @csrf
                        <div class="form-group">
                            <label class=" form-control-label" for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="Nhập title..." class="form-control @error('title') is-invalid @enderror " required />
                            @error('title')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class=" form-control-label" for="description">Description</label>
                            <textarea name="description" id="ckeditor" rows="9" placeholder="Nhập description..." class="form-control  @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="null">-- Chọn --</option>
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Không</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm vào CSDL
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