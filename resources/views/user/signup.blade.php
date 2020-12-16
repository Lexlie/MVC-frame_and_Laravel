@extends('layouts.master')

@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="d-block w-50">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled mb-0">
                        @foreach ($errors->all() as $error)
                            <li class="text-center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="me-5 mb-3">註冊</h1>
            <form action="{{ route('user.signup') }}" method="POST" class="flex-fill">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirm-password" name="confirmPassword" placeholder="Password">
                    <label for="confirm-password">Confirm password</label>
                </div>
                <button type="submit" class="btn btn-primary">註冊</button>
            </form>
        </div>
    </div>
@endsection