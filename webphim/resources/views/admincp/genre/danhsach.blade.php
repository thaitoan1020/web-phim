@extends('admin')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Genre</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                           
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('genre.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">Title</th>
                                    <th width="20%">Title_Slug</th>
                                    <th width="35%">Description</th>
                                    <th width="15%">Status</th>
                                    <th width="5%">Sữa</th>
                                    <th width="5%">Thêm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($genre as $value)
                                <tr class="tr-shadow">
                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->title_slug }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>
                                        @if($value->status)
                                            Hiển thị
                                        @else
                                            Không hiển thị
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('genre.sua', ['id' => $value->id]) }}" ><i class="fas fa-edit"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('genre.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fas fa-trash-alt text-danger"></i></a>
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