<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="/css/preset/preset.css">
    <link rel="stylesheet" href="/css/auth/log-in.css">
</head>

<body>
<!-- just the password and the username to log in -->
<div class="container">
    {{ __('Login') }}
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="e-mail">ایمیل یا شماره تماس:</label>
        <input type="email" id="e-mail" name="email" value="{{ old('email') }}">


        <label for="password">رمز عبور:</label>
        <input type="password" id="password" name="password">

        @error('password')
            <span>
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        @error('email')
        <span >
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="submit" value="تایید">
    </form>
    <!-- button for forgetting password -->
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">فراموشی رمز عبور</a>
    @endif

    @if (Route::has('register'))
        <a href="{{ route('register') }}">ثبت نام</a>
    @endif


</div>
</body>

</html>
