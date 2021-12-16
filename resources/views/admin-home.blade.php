<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
        <form id="form" action="api/admin-home" method="POST">
            <input type="date" name="date" id="date">
        </form>
    
        <script>
            $('#date').change(function(){
                console.log('Submiting form');                
                $('#form').submit();
            });
        </script>
    

    <p>Missed Patient Activity</p>
    <table>
        <tr>
            <th>Patients name</th>
            <th>Doctor's Name</th>
            <th>Doctor's Appointment</th>
            <th>Caregiver's Name</th>
            <th>Morning Medicine</th>
            <th>Afternoon Medicine</th>
            <th>Evening Medicine</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>


        @if (isset($_SESSION['AH-appointments']))
            <p>{{ dd($_SESSION['AH-appointments']) }}</p>
            <p>yes</p>
            @foreach ($_SESSION['AH-appointments'] as $data)
                <tr>
                    @foreach ($_SESSION['AH-patients'] as $patients)
                        @if ($data->patient_id == $patients->id)
                            <td>{{ $patients->f_name." ".$patients->l_name }}</td>
                        @endif
                    @endforeach 
                </tr>
            @endforeach
        @endif
    </table>
</body>
