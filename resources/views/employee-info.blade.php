<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>
    <div class="error"></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Current Salary</th>
        </tr>

        <tr>
            <td>1726648</td>
            <td>DR E Gadd</td>
            <td>Doctor</td>
            <td>$3</td>
        </tr>
    </table>

    <form>
        <label for="employeeID">Employee ID</label>
        <input type="number" id="employeeID" name="employeeID">

        <label for="newSalary">New Salary</label>
        <input type="number" id="newSalary" name="newSalary">

        <input type="submit" name="submit" id="submit" value="next">

    </form>

</body>

