@extends('customer.layouts.app')

@section('title', 'Login')

@section('content')
<div class="container" style="padding:80px 0;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="border-radius:16px; padding:24px; background: rgba(255,255,255,0.9);">
                <h3 style="color:#6b4d00; font-weight:800;">Login Customer</h3>

                @if($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button class="btn btn-buy w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
