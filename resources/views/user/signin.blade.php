@extends('layouts.master')

@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100 w-50">
        <h1 class="me-5">登入</h1>
        <div class="d-block">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled mb-0">
                        @foreach ($errors->all() as $error)
                            <li class="text-center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="POST" class="flex-fill">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="Email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">登入</button>
            </form>

        </div>
    </div>
@endsection