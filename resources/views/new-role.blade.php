<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body>
    <form>
        <label for="roleName">New Role Name</label>
        <input type="text" name="roleName" id="roleName">
        <label for="roleName">Access Level</label>
        <input type="number" name="accessLevel" id="accessLevel">

        <input type="submit" name="OK" id="OK" value="OK">
        <input type="button" name="cancel" id="cancel" value="cancel" onclick="location.href='/';">
    </form>