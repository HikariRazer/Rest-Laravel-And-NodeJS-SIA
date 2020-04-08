<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistem Informasi Akademik</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js" charset="utf=8"></script>
    </head>
    
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SIA</a>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/majors">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/students">Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="padding-top: 80px">
            @yield('content')
        </div>
    </body>
</html>