<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
        <img src="{{ asset('/') }}{{$globalData['avatar']}}" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="/" class="logo d-flex align-items-center justify-content-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">{{ $globalData['name'] }}</h1>
    </a>

    <div class="social-links text-center">
        <a href="{{ $globalData['fb'] }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="{{ $globalData['tritterx'] }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $globalData['instagram'] }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ $globalData['skype'] }}" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="{{ $globalData['linkedin'] }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/" ><i class="bi bi-house navicon"></i>Home</a></li>
            <li><a href="{{ route('work-experiences') }}"><i class="bi bi-hdd-stack navicon"></i> Work experiences</a></li>
            <li><a href="{{ route('projects') }}"><i class="bi bi-images navicon"></i>Projects </a></li>
        </ul>
    </nav>

</header>
