@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="Inshyushyu" class="col-md-4 col-form-label text-md-end text-start"><strong>Inshyushyu:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->Inshyushyu }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="Ikivuguto" class="col-md-4 col-form-label text-md-end text-start"><strong>Ikivuguto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->Ikivuguto }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->phone }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection