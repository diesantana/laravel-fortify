@extends('layouts.main_layout')
@section('title')
    Recuperar Senha
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">Redefinir Senha</p>
                    {{-- token --}}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                            <a href="{{ route('login') }}">Cancelar</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">Definir Senha</button>
                        </div>
                    </div>
                </form>

                {{-- Feedback com proteção contra User Enumeration --}}
                @if (@session('status') || $errors->any())
                    <div class="alert alert-danger mt-2">
                        <p>Ocorreu um erro ao recuperar a senha, entre em contato com o suporte para mais detalhes</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
