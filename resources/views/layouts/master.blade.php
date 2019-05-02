<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Vue SPA</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <router-link class="navbar-brand" to="/">Laravel vue SPA</router-link>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <router-link class="nav-item" to="/about" tag="li">
                            <a class="nav-link">About</a>
                        </router-link>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
