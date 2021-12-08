<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>

    <div class="home-redirect"></div>

    <form>
        <div class="border1">
            
            <label for="patient-id">Patient ID</label>
            <input type="text" value="{{ $data['0']->patient_id }}" name="patient-id" id="patientID" disabled>
            
            <label for="patient-name">Patient Name</label>
            <input type="text" value='{{ $data['0']->f_name." ".$data['0']->l_name }}' name="patient-name" id="patient-name" disabled>
            
            <label for="date">Date</label>
            <input type="date" value="{{ $data['0']->date }}" name="date" id="date" required>
            
            <button type="submit">Search</button>
        </div>
    </form>
    
    <table>
        <tr>
            <th><strong>Doctor Name</strong></th>
            <th><strong>Doctor's Appointment</strong></th>
            <th><strong>Caregiver Name</strong></th>
            <th><strong>Morning Medicine</strong></th>
            <th><strong>Afternoon Medicine</strong></th>
            <th><strong>Night Medicine</strong></th>
            <th><strong>Breakfast</strong></th>
            <th><strong>Lunch</strong></th>
            <th><strong>Dinner</strong></th>
        </tr>

        @foreach($data as $d)
        <tr class="body">
            <td>{{ $doctor['0']->E_f_name.' '.$doctor['0']->E_l_name }}</td>
            <td>{{ $d->appointment_id }}</td>
            <td>{{ $caregiver[0]->E_f_name.' '.$caregiver[0]->E_l_name }}</td>
            <td>{{ $d->morning_prescription }}</td>
            <td>{{ $d->afternoon_prescription }}</td>
            <td>{{ $d->night_prescription }}</td>
            <td>placeholder breakfast</td>
            <td>placeholder lunch</td>
            <td>placeholder dinner</td>
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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $(document).ready(function() {
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;       
    $("#date").attr("value", today);
});
</script>