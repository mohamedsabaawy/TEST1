@extends('layouts.app')
@section('title' , 'admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="mb-3">
                    <a href="{{route('products.create')}}" class="btn btn-info col">add product</a>
                </div>
                <div class="card">

                    <div class="card-header">all product</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-hover table-bordered table-head-fixed">
                            <thead class="table-active">
                            <tr>
                                <td>#</td>
                                <td>name</td>
                                <td>action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($products) > 0)
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                <div class="row">
                                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning mr-1"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('products.destroy' ,$product->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#country').change(function (e) {
            e.preventDefault();
            var country_id = $('#country').val();
            if (country_id) {
                $.ajax({
                    url: '{{url('api/v1/city?country_id=')}}' + country_id,
                    type: 'post',
                    success: function (data) {
                        if (data.status == 1) {

                            $('#cities').empty();
                            $('#cities').append('<option>choice city</option>');
                            $.each(data.data, function (index, city) {
                                $('#cities').append('<option value="' + city.id + '">' + city.name + '</option>')
                            })
                        }
                    },
                })
            } else {
                $('#cities').empty();
                $('#cities').append('<option>choice city</option>');
            }
        });
    </script>
@stop
