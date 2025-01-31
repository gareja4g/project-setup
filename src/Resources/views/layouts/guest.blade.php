<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.links')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        @yield('content')
    </div>
    @include('layouts.scripts')
</body>

</html>
