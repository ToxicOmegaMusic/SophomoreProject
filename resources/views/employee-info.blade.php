<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl mb-5">
    
            <form action="api/employee-info" method="POST">
                <label for="employeeID">Employee ID</label>
                <input type="number" id="employeeID" name="employeeID">
                
                <label for="newSalary">New Salary</label>
                <input type="number" id="newSalary" name="newSalary">
                
                <input type="submit" name="submit" id="submit" value="next">
                
            </form>
            
            <!-- Error div -->
            <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
                <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
            </div>
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Current Salary</th>
                </tr>

                {{-- ARH
                @foreach ($data as $d )
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->f_name." ".$d->l_name }}</td>
                        <td>{{ $d->role_id }}</td>
                        <td>{{ $d->salary }}</td>
                    </tr>
                @endforeach
                ARH --}}
            </table>
        </div>
    </div>
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