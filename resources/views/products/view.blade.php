@extends('layouts.app')

@section('title', 'Produto')

@section('content')
    <section>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6">
                    <img src="/storage/products/{{ $product->image }}" alt="" class="image-fluid w-75">
                </div>
                <div class="col-md-4 pt-5">
                    <h4 class="mt-md-5">{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->price }}</p>
                    
                    @if ($product->quantity > 0)
                        <span class="badge badge-success pt-2 pb-2 pl-4 pr-4">Disponível</span>
                    @else
                        <span class="badge badge-danger">Indisponível</span>
                    @endif

                    <span class="">Carrinho</span>

                    <div class="mt-4">
                        <a href="" class="btn btn-primary btn-block">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection