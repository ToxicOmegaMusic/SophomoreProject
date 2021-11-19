<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>

<div class="home-redirect" onclick="location.href='/';"></div> <!-- This makes me a certified HACKER -->

    <form> <!-- Add action later! -->
        <div class="login-banner"></div>

        <input type="text" name="username" placeholder="username"/>

        <input type="password" name="password" placeholder="password"/>

        <input type="submit" name="sub">
    </form>

<div class="aligner-element"></div>

</body>
</html>