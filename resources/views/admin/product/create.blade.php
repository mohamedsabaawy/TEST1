@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Add new product</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('products.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="card-body ">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" id="inputEmail3"
                                           placeholder="Name" value="{{old('name')}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input name="price" type="number"
                                           class="form-control @error('price') is-invalid @enderror" id="inputEmail3"
                                           placeholder="Price" value="{{old('price')}}">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id">
                                        <option >select</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary form-control">Add</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
