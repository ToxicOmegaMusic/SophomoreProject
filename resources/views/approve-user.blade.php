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
            <th>Name</th>
            <th>Role</th>
        </tr>
        
        <form>
        
        <tr>
            <label for="approve">Approve</label>
            <input type="checkbox" name="approve" id="yes">
            <td>Wario</td>
            <td>Admin</td>
        </tr>

        <input type="submit" name="submit" id="submit" value="Approve selected users">
        </form>
    
    </table>
</body>