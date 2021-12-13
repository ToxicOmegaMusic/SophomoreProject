<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Employee Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>

<body>
    <!-- Error div -->
        <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
            <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
        </div>
    <form action="api/roster" method="POST">
        <label for="date">Date</label>
        <input type="date" name="date" id="date">

        <input type="submit" name="submit" id="submit">

    </form>

    <table>
        <tr>
            <th>Date</th>
            <th>Supervisor</th>
            <th>Doctor</th>
            <th>Caregiver 1</th>
            <th>Caregiver 2</th>
            <th>Caregiver 3</th>
            <th>Caregiver 4</th>
        </tr>
        @if (isset($_SESSION['roster-data']))
            @foreach ($_SESSION['roster-data'] as $roster)
                <tr>
                    <td>{{ $roster->date }}</td>
                    <td>{{ $roster->supervisor }}</td>
                    <td>{{ $roster->doctor }}</td>
                    <td>{{ $roster->caregiver1 }}</td>
                    <td>{{ $roster->caregiver2 }}</td>
                    <td>{{ $roster->caregiver3 }}</td>
                    <td>{{ $roster->caregiver4 }}</td>
                </tr>
            @endforeach
        @else
            <p>No Data to be displayed</p>
        @endif
        
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