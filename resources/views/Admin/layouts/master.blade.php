<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/preset/preset.css">
    <link rel="stylesheet" href="/css/sidebar/sidebar.css">
    @yield('style')
</head>

<body>
<!-- landing page consists of four parts
    latest sales: it is the latest sales witch were closed
    sales graph:  it is graph that shows the sales quantity on the time
    to do list: a to do list.
    latest oeders: the orders wich are not yet closed -->

<!-- the rest is just a table element -->
@yield('body')
</body>

</html>
