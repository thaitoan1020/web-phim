@extends('admin')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Movie</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                           
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('movie.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="10%">Image</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">Genre</th>
                                    <th width="10%">Country</th>
                                    <th width="10%">Title</th>
                                    <th width="10%">Title_en</th>
                                    <th width="10%">Title_Slug</th>
                                    {{-- <th width="15%">Description</th> --}}
                                    <th width="5%">Resolution</th>
                                    <th width="5%">Status</th>
                                    <th width="5%">Hot</th>
                                    <th width="5%">Sữa</th>
                                    <th width="5%">Thêm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movie as $value)
                                <tr class="tr-shadow">
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img width="60%" src="{{ asset('public/uploads/movie/'.$value->image)}}" alt=""></td>
                                    <td>{{ $value->category->title }}</td>
                                    <td>{{ $value->genre->title }}</td>
                                    <td>{{ $value->country->title }}</td>
                                    <td>{{ $value->title }}</td> 
                                    <td>{{ $value->title_en }}</td>
                                    <td>{{ $value->title_slug }}</td>
                                    {{-- <td>{{ $value->description }}</td> --}}
                                    <td>
                                        @if($value->resolution == 0)
                                            HD
                                        @elseif($value->resolution == 1)
                                            SD
                                        @elseif($value->resolution == 2)
                                           HDCam
                                        @elseif($value->resolution == 3)
                                            Cam
                                        @else
                                            FullHD
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->status)
                                            Hiển thị
                                        @else
                                            Không hiển thị
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->status)
                                            Hot
                                        @else
                                            Không
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('movie.sua', ['id' => $value->id]) }}" ><i class="fas fa-edit"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('movie.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>                    
@endsection