@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <section>
        <div class="container">
            <div class="">
                <h2 class="text-center">Produtos</h2>
                
                <select name="" id="" class="form-control w-25">
                    <option value="">Eletrodomésticos</option>
                    <option value="">Celulares</option>
                    <option value="">Computadores</option>
                </select>
            </div>

            <div class="mt-5">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="storage/products/{{ $product->image }}" alt="" class="image-fluid image-product">
                            <div class="card-body">
                                <h5 class="text-center">{{ $product->name }}</h5>
                                
                                <a href="{{ route('products.view', $product->id) }}" class="btn btn-primary btn-block mt-3">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection