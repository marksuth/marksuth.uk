<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('metadescription')" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mark Sutherland - @yield('title')" />
    <meta property="og:description" content="@yield('metadescription')" />
    <meta property="og:url" content="@yield('ogurl', config('app.url'))" />
    <meta property="og:site_name" content="Mark Sutherland" />
    <meta property="og:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'marksuth-og.jpg')" />
    <meta property="og:image:secure_url" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'marksuth-og.jpg')" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('metadescription')" />
    <meta name="twitter:title" content="Mark Sutherland - @yield('title')" />
    <meta name="twitter:site" content="@marksuth" />
    <meta name="twitter:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'marksuth-og.jpg')" />
    <meta name="twitter:creator" content="@marksuth" />

    <title>Mark Sutherland -@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('extrastyles')

</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Mark Sutherland</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('page')
    <script src="/js/app.js" type="application/javascript"></script>
    @yield('extrascripts')
</body>

</html>