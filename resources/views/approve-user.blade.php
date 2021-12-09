<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
    <div class="error"></div>
    <table>
        <tr>
            <th>approve<th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        
        <form>
        
        <tr>
            <td><input type="checkbox" name="approve" id="yes">&nbsp;</td>
            <td>Wario</td>
            <td>Admin</td>
        </tr>

        <input type="submit" name="submit" id="submit" value="Approve selected users">
        </form>
    
    </table>
</body>