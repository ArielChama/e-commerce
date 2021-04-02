@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <div class="mt-4 mb-4">
                <h2>Novo produto</h2>
            </div>
            
            <div>
                <form action="{{ route('admin.products.update', $products->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                                <div class="mb-4">
                                    <input type="text" name="name" value="{{ $products->name }}" class="form-control" placeholder="Nome: " >
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="price" value="{{ $products->price }}" class="form-control" placeholder="Preço: " >
                                </div>
                                
                                <div class="mb-4">
                                    <input type="number" name="quantity" value="{{ $products->quantity }}" class="form-control" placeholder="Quantidade: " >
                                </div>

                                <div class="mb-4">
                                    <select name="category" class="form-control">
                                        @if ($products->category == 'Aparelhos eletronicos')
                                            <option value="Aparelhos eletronicos">Aparelhos eletronicos</option>
                                            <option value="Eletrodomesticos">Eletrodomesticos</option>
                                        @else
                                            <option value="Eletrodomesticos">Eletrodomesticos</option>
                                            <option value="Aparelhos eletronicos">Aparelhos eletronicos</option>
                                        @endif
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Descreve aqui: " >{{ $products->description }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <input type="file" name="image" value="" class="form-control" placeholder="Image" >
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Criar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection