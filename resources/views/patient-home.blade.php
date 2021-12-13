<!--
PLEASE READ:

I commented a few things out in this file.

To find and remove the comment-in and comment-out lines, ctrl+F and type "ARH."
-->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-500">
     <div class="flex font-serif text-5xl text-center justify-center text-white bg-green-900 h-40 items-center w-full cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-auto m-20 p-3"> <!-- COOL FORM BORDER -->
        <div class="flex flex-col bg-green-100 w-full items-center h-auto rounded-xl">
            <form class="flex flex-col items-center">  
                <label for="patient-id">Patient ID</label>
                <input class="bg-white" type="text" value="" name="patient-id" id="patientID" disabled>
                
                <label for="patient-name">Patient Name</label>
                <input class="bg-white" type="text" name="patient-name" id="patient-name" disabled>
                    
                <label for="date">Date</label>
                <input type="date" name="date" id="date" required>
                    
                <button class="text-xl bg-green-900 rounded-xl text-white text-serif w-20 h-10 hover:bg-green-700 cursor-pointer mt-4 mb-4" type="submit">Search</button>
            </form>
            
            <table>
                <thead>
                    <tr>
                        <th><strong>Doctor Name</strong></th>
                        <th><strong>Doctor Appointment</strong></th>
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
                <!-- ARH
                    {{-- ARH @foreach($data as $d) ARH --}}
                    <tr>
                        {{-- ARH <th>{{ $d->id }}</th> ARH --}}
                        {{-- ARH <th>{{  }}</th> ARH --}}
                        {{-- ARH <th>{{  }}</th> ARH --}}
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    {{-- ARH @endforeach ARH --}}
                    ARH  -->
                </tbody>
            </table>
        </div>
    </div>

</body>

<!-- Ben's styling for the tables -->
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