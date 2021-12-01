@php
    session_start();
@endphp

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Caregiver Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>

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
        </tr>

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