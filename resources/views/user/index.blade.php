@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mt-5">使用者清單</h1>
    <table class="table table-striped mt-3 bg-white">
        <thead>
            <td>ID</td>
            <td>姓名</td>
            <td>電子郵件</td>
            <td>登入次數</td>
        </thead>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->times }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection