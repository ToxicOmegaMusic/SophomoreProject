<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Caregiver Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body>
    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>
    
    <div class="home-redirect"></div>

    <form>
        <div class="border1">
            
            <label for="patient-id">Patient ID</label>
            <input type="text" name="patient-id" id="patientID">
            
            <label for="patient-name">Patient Name</label>
            <input type="text" name="patient-name" id="patient-name">
            
            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>
            
            <button type="submit">Search</button>
        </div>
    </form>
    
    <table>
        <tr>
            <th>Patient Name</th>
            <th>Morning Meds</th>
            <th>Afternoon Meds</th>
            <th>Night Meds</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>

        @if (isset($_SESSION['CH']))
            @foreach ($_SESSION['CH'] as $data)
                <tr>
                    <td>{{ $_SESSION['CH-names'][$loop->index][$data->patient_id] }}</td>
                    <td>{{ $data->morning_med }}</td>
                    <td>{{ $data->afternoon_med }}</td>
                    <td>{{ $data->night_med }}</td>
                    <td>{{ $data->breakfast }}</td>
                    <td>{{ $data->lunch }}</td>
                    <td>{{ $data->dinner }}</td>
                </tr>
            @endforeach
        @endif


{{-- 

        <tr>
            <td>
                <input type="text" name="doctor-name" placeholder="Doctor's name">
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="caregiver-name" placeholder="Caregiver's name">
            </td>
        </tr>

        <tr>
            <td>
                <p>Did you have the appointment?</p>
                <input type="checkbox" id="had-appt">
            </td>
        </tr>

        <tr>
            <td>
                <p>Took morning medicine</p>
                <input type="checkbox" id="took-morning-meds">
            </td>
        </tr>

        <tr>
            <td>
                <p>Took afternoon medicine</p>
                <input type="checkbox" id="took-afternoon-meds">
            </td>
        </tr>

        <tr>
            <td>
                <p>Took evening medicine</p>
                <input type="checkbox" id="took-evening-meds">
                </td>
        </tr>

        <tr>
            <td>
                <p>Had breakfast</p>
                <input type="checkbox" id="had-breakfast">
            </td>
        </tr>

        <tr>
            <td>
                <p>Had lunch</p>
                <input type="checkbox" id="had-lunch">
            </td>
        </tr>

        <tr>
            <td>
                <p>Had dinner</p>
                <input type="checkbox" id="had-dinner">
            </td>
        </tr>

        <tr>
            <td style="display: flex; justify-content: center;">
                <input type="submit" name="sub">
            </td>
        </tr> --}}

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
    form {
        border: #006600 solid 1px;
    }
</style>