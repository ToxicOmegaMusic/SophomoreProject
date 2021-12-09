<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
    <form action="api/new-role" method="POST">
        
    <div class="error"></div>
    <form>
        <label for="roleName">New Role Name</label>
        <input type="text" name="roleName" id="roleName">
        <label for="roleName">Access Level</label>
        <input type="number" name="accessLevel" id="accessLevel">

        <input type="submit" name="OK" id="OK" value="OK">
        <input type="button" name="cancel" id="cancel" value="cancel" onclick="location.href='/';">
    </form>

    <table>
        <tr>
            <th>Role Name</th>
            <th>Access Level</th>
        </tr>
        @foreach ($data as $r )
            <tr>
                <td>{{ $r->title }}</td>
                <td>{{ $r->access_level }}</td>
            </tr>
        @endforeach

        
    </table>

</body>

<style>
    tr {
        padding: 0.5vh;
        border-bottom: 1px solid #006600;
        display: flex;
        max-width: 1050px;
    }
    th, td {
        width: 115px
    }
    table, th, td {
        border: 1px solid black;
    }
</style>