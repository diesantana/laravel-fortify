@extends('layouts.main_layout')
@section('title')
    Esqueci minha senha
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 card p-5">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">Recuperar Senha</p>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="mail" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <a href="{{ route('login') }}">Cancelar</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-secondary px-5">Recuperar Senha</button>
                        </div>
                    </div>
                </form>

                {{-- Feedback com proteção contra User Enumeration--}}
                @if (@session('status') || $errors->any())
                    <div class="alert alert-primary mt-2">
                        <div>
                            <p>Se houver uma conta associada a este e-mail, você receberá um link de recuperação em instantes</p>
                        </div>
                        <div class="text-end">
                            <a href="{{route('login')}}" class="btn btn-secondary px-5 text-decoration-none">Voltar</a>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
