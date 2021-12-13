<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body>
    <form action="api/new-role" method="POST">
        
    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>
    
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