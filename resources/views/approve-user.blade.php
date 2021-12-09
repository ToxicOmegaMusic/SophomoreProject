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

        <tr>
            <td>Wario</td>
            <td>Admin</td>
        </tr>
    </table>

    <form>
        <label for="yes">Yes</label>
        <input type="radio" name="approve" id="yes">

        <label for="yes">No</label>
        <input type="radio" name="approve" id="no">

        <input type="submit" name="submit" id="submit" value="next">
    </form>
</body>