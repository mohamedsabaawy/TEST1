@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Add new location</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('locations.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">longitude</label>
                                <div class="col-sm-10">
                                    <input name="longitude" type="text"
                                           class="form-control @error('longitude') is-invalid @enderror" id="inputEmail3"
                                           placeholder="longitude" value="{{old('longitude')}}">
                                    @error('longitude')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">latitude</label>
                                <div class="col-sm-10">
                                    <input name="latitude" type="text"
                                           class="form-control @error('latitude') is-invalid @enderror" id="inputEmail3"
                                           placeholder="latitude" value="{{old('latitude')}}">
                                    @error('latitude')
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
