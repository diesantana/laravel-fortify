@extends('layouts.main_layout')
@section('title')
    Registro
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">NOVA CONTA</p>
                    <div class="mb-3">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="mail" name="email" id="email" class="form-control"
                            value="{{ @old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control"
                            value="{{ @old('password') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation">Confirmação da senha</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                            value="{{ @old('password_confirmation') }}">
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{ route('login') }}">Já tenho conta</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">Criar conta</button>
                        </div>
                    </div>
                </form>

                {{-- Exibição dos erros --}}
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
