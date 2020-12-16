<nav class="px-4 navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">MVC架構與Laravel框架</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">使用者清單</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.signout') }}">登出</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.signin') }}">登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.signup') }}">註冊</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>