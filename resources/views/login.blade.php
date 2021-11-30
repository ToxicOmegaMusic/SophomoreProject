<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>

<div class="home-redirect" onclick="location.href='/';"></div> <!-- This makes me a certified HACKER -->

    <form action="http://172.31.109.60:6969/api/login" method="GET"> 
        <div class="login-banner"></div>

        <input type="text" name="email" placeholder="email"/>

        <input type="password" name="password" placeholder="password"/>

        <input type="submit" name="sub" value="Login">
    </form>

<div class="aligner-element"></div>

</body>
</html>