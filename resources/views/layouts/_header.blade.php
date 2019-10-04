<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
{{--    Branding Image--}}
    <a href="{{ url('/') }}" class="navbar-brand">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Tollge navigation">
      <span class="navbar-toggle-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nabarSupportedContent">
{{--        left side of navbar--}}
      <ul class="navbar-nav mr-auto">

      </ul>
{{--      right side of navbar--}}
      <ul class="navbar-nav navbar-right">
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
      </ul>
    </div>
  </div>
</nav>
