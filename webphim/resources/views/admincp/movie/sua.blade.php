@extends('admin')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <strong>Sữa Movie</strong>
                </div>
                <form action="{{ route('movie.sua', ['id' => $movie->id]) }}" method="post" enctype="multipart/form-data">
                <div class="card-body card-block">
                        @csrf
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Category</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                <option value="0">-- Chọn --</option>
                                @foreach($category as $value)
                                    <option value="{{ $value->id }}" {{ ($movie->category_id == $value->id) ? 'selected' : '' }}>{{ $value->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Genre</label>
                            <select name="genre_id" id="genre_id" class="form-control @error('genre_id') is-invalid @enderror" required>
                                <option value="0">-- Chọn --</option>
                                @foreach($genre as $value)
                                    <option value="{{ $value->id }}" {{ ($movie->genre_id == $value->id) ? 'selected' : '' }}>{{ $value->title }}</option>
                                @endforeach
                            </select>
                            @error('genre_id')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Country</label>
                            <select name="country_id" id="country_id" class="form-control @error('country_id') is-invalid @enderror" required>
                                <option value="0">-- Chọn --</option>

                                @foreach($country as $value)
                                    <option value="{{ $value->id }}"{{ ($movie->country_id == $value->id) ? 'selected' : '' }}>{{ $value->title }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label" for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ $movie->title }}" placeholder="Nhập title..." class="form-control @error('title') is-invalid @enderror " required />
                            @error('title')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label" for="title_en">Title_en</label>
                            <input type="text" id="title_en" name="title_en" value="{{ $movie->title_en }}" placeholder="Nhập title_en..." class="form-control @error('title_en') is-invalid @enderror " required />
                            @error('title_en')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class=" form-control-label" for="description">Description</label>
                            <textarea name="description" id="ckeditor" rows="9" placeholder="Nhập description..." class="form-control  @error('description') is-invalid @enderror">{{ $movie->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Resolution</label>
                            <select name="resolution" id="resolution" class="form-control @error('resolution') is-invalid @enderror" required>
                                <option value="null">-- Chọn--</option>
                                    <option value="0" {{ ($movie->resolution == 0) ? 'selected' : '' }}>HD</option>
                                    <option value="1" {{ ($movie->resolution == 1) ? 'selected' : '' }}>SD</option>
                                    <option value="2" {{ ($movie->resolution == 2) ? 'selected' : '' }}>HDCam</option>
                                    <option value="3" {{ ($movie->resolution == 3) ? 'selected' : '' }}>Cam</option>
                                    <option value="4" {{ ($movie->resolution == 4) ? 'selected' : '' }}>FullHD</option>
                            </select>
                            @error('resolution')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="null">-- Chọn--</option>
                                    <option value="1" {{ ($movie->status == 1) ? 'selected' : '' }}>Hiển thị</option>
                                    <option value="0" {{ ($movie->status == 0) ? 'selected' : '' }}>Không</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="select" class=" form-control-label">Phim Hot</label>
                            <select name="phim_hot" id="phim_hot" class="form-control @error('phim_hot') is-invalid @enderror" required>
                                <option value="null">-- Chọn--</option>
                                    <option value="1" {{ ($movie->phim_hot == 1) ? 'selected' : '' }}>Hot</option>
                                    <option value="0" {{ ($movie->phim_hot == 0) ? 'selected' : '' }}>Không</option>
                            </select>
                            @error('phim_hot')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="form-group">
                            @if(!empty($movie->image))
                                <label for="image" class=" form-control-label">Image</label>
                                <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                            @endif
                            <input type="file" id="image" name="image" value="{{ $movie->image }}" class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
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
