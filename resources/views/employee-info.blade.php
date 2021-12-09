<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>
    
    <form action="api/employee-info" method="POST">
        <label for="employeeID">Employee ID</label>
        <input type="number" id="employeeID" name="employeeID">
        
        <label for="newSalary">New Salary</label>
        <input type="number" id="newSalary" name="newSalary">
        
        <input type="submit" name="submit" id="submit" value="next">
        <input type="hidden" name="_method" value="put" />
        
    </form>
    
    <div class="error"></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Current Salary</th>
        </tr>
        @foreach ($data as $d )
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->f_name." ".$d->l_name }}</td>
                <td>{{ $d->role_id }}</td>
                <td>{{ $d->salary }}</td>
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