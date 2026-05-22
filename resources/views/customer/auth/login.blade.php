@extends('customer.layouts.app')

@section('title', 'Login')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #d1b779, #868147);
    }

    .login-wrapper {
    min-height: calc(100vh - 80px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 80px;
}
    .login-card {
        width: 100%;
        max-width: 450px;
        border-radius: 20px;
        padding: 30px;
        background: rgba(255, 248, 167, 0.92);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        backdrop-filter: blur(6px);
    }

    .login-title {
        font-size: 26px;
        font-weight: 800;
        color: #6b4d00;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 12px;
        padding: 12px;
        border: 1px solid #e6d7b8;
        transition: 0.2s;
    }

    .form-control:focus {
        border-color: #c9a227;
        box-shadow: 0 0 0 0.2rem rgba(201,162,39,0.2);
    }

    .btn-login {
        background: linear-gradient(135deg, #c9a227, #b88a1a);
        color: white;
        font-weight: 600;
        padding: 12px;
        border-radius: 12px;
        border: none;
        transition: 0.3s;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .alert {
        border-radius: 12px;
    }
</style>

<div class="login-wrapper">
    <div class="login-card">

        <div class="login-title">Login Customer</div>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-login w-100">
                Masuk
            </button>

        </form>

    </div>
</div>

@endsection