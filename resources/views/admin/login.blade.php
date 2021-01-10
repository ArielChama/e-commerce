@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="card col-md-6">
                <div class="card-header text-center">
                    Painel Admin
                </div>

                <div class="card-body">
                    <div class="">
                        <label for="">Usuário: </label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="">
                        <label for="">Palavra-passe: </label>
                        <input type="text" name="password" class="form-control">
                    </div>

                    <div class="mt-3 text-center">
                        <button class="btn btn-primary btn-block">
                            Entrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection