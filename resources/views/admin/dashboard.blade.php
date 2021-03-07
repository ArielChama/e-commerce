@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <div class="pt-5 pb-5">
                <h3 class="text-center">Produtos</h3>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
                            <td><button class="btn btn-danger">Remover</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pt-5 pb-5">
                <h3 class="text-center">Usuários</h3>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Sexo</th>
                            <th>Número de telefone</th>
                            <th>Permissão</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->sex }}</td>
                            <td>{{ $user->number_phone }}</td>
                            @if ($user->isAdmin)
                                <td>Administrador</td>
                            @else
                                <td>Usuário normal</td>
                            @endif
                            <td><button class="btn btn-warning">Editar</button></td>
                            <td><button class="btn btn-danger">Remover</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection