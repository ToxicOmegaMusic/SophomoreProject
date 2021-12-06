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
            <input type="text" value="" name="patient-id" id="patientID" disabled>
            
            <label for="patient-name">Patient Name</label>
            <input type="text" name="patient-name" id="patient-name" disabled>
            
            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>
            
            <button type="submit">Search</button>
        </div>
    </form>
    
    <table>
        <thead>
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
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{  }}</th>
                <th>{{  }}</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>


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