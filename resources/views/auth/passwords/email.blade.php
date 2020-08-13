<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <link rel="stylesheet" href="/css/preset/preset.css">
    <link rel="stylesheet" href="/css/auth/forgot-password.css">
</head>

<body>

@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
@endif
<!-- the verification stuff will be send in the email -->
<form action="{{ route('password.email') }}" method="POST">
    @csrf
    <label for="email">ایمیل :</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}">

    @error('email')
    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror

    <input type="submit" value="ارسال لینک بازیابی">
</form>
</body>

</html>
