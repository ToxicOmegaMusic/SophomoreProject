<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}"/>
</head>

<body>

    <div class="home-banner" onclick="location.href='/'">Eranthis<br/>Communities</div>

    <form>
        <div class="border1">
            
            <input type="text" name="patient-id" id="patientID" class="patient-home-input" placeholder="Patient ID" required>

            <input type="text" name="patient-name" id="patient-name" class="patient-home-input" placeholder="Patient Name" required>
        
            <input type="date" name="date" id="date" class="patient-home-input" required>
            
        </div>
    </form>
    
    <table class="menu" style="height: auto;">
        <tr>
            <td class="divided no-skinny-divving">
                <input type="text" name="doctor-name" placeholder="Doctor's name" class="patient-home-input">
            </td>
        </tr>

        <tr>
            <td class="divided no-skinny-divving">
                <input type="text" name="caregiver-name" placeholder="Caregiver's name" class="patient-home-input">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Did you have the appointment?</p>
                <input type="checkbox" id="had-appt">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Took morning medicine</p>
                <input type="checkbox" id="took-morning-meds">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Took afternoon medicine</p>
                <input type="checkbox" id="took-afternoon-meds">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Took evening medicine</p>
                <input type="checkbox" id="took-evening-meds">
                </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Had breakfast</p>
                <input type="checkbox" id="had-breakfast">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Had lunch</p>
                <input type="checkbox" id="had-lunch">
            </td>
        </tr>

        <tr>
            <td class="divided">
                <p>Had dinner</p>
                <input type="checkbox" id="had-dinner">
            </td>
        </tr>

        <tr>
            <td style="display: flex; justify-content: center;">
                <input type="submit" name="sub" class="no-skinny-divving">
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