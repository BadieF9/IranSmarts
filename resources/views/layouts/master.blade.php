<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/preset/preset.css">
    <link rel="stylesheet" href="/css/main/header-and-footer/header-and-footer.css">
    @yield('style')
</head>
<body>
<!-- here are the header and footer of
    the website-->
<x-header/>
@yield('body')
<x-footer/>
</body>
</html>
