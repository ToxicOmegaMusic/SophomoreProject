<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>

<body>
    <div class="error"></div>
    <form>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">

        <input type="submit" name="submit" id="submit">

    </form>

    <table>
        <tr>
            <th>Supervisor</th>
            <th>Doctor</th>
            <th>Caregiver 1</th>
            <th>Caregiver 2</th>
            <th>Caregiver 3</th>
            <th>Caregiver 4</th>
        </tr>

        <tr>
            <td>Larry</td>
            <td>DR E Gadd</td>
            <td>Alf</td>
            <td>Charlie</td>
            <td>Barry</td>
            <td>Chelsea</td>
        </tr>

        <tr>
            <td>null</td>
            <td>null</td>
            <td>Group A</td>
            <td>Group B</td>
            <td>Group C</td>
            <td>Group D</td>
        </tr>
    </table>
</body>