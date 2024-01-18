@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Inshyushyu" class="col-md-4 col-form-label text-md-end text-start">Inshyushyu</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="Inshyushyu" name="Inshyushyu" value="{{ old('Inshyushyu') }}">
                            @if ($errors->has('Inshyushyu'))
                                <span class="text-danger">{{ $errors->first('Inshyushyu') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Ikivuguto" class="col-md-4 col-form-label text-md-end text-start">Ikivuguto</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="Ikivuguto" name="Ikivuguto" value="{{ old('Ikivuguto') }}">
                            @if ($errors->has('Ikivuguto'))
                                <span class="text-danger">{{ $errors->first('Ikivuguto') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">phone</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Dairy">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection