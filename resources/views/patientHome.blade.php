<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>

<body>
    <form>
        <label for="patientID">Patient ID</label>
        <input type="text" name="patientID" id="patientID" required>

        <label for="patientName">Patient Name</label>
        <input type="text" name="patientName" id="patientName" required>

        <label for="date">Patient ID</label>
        <input type="date" name="date" id="date" required>
    </form>

    <table>
        <tr>
            <td>Doctors Name</td>
            <td id="doctorsName">doctors name placeholder</td>
        </tr>

        <tr>
            <td>Had Doctors appointment?</td>
            <td id="hadDoctorsAppointment"></td>
        </tr>

        <tr>
            <td>Caregivers name</td>
            <td id="caregiversName"></td>
        </tr>

        <tr>
            <td>Had morning medicine?</td>
            <td id="morningMed"></td>
        </tr>

        <tr>
            <td>Had afternoon medicine?</td>
            <td id="afternoonMed"></td>
        </tr>

        <tr>
            <td>Had evening medicine?</td>
            <td id="eveningMed"></td>
        </tr>

        <tr>
            <td>Had breakfast?</td>
            <td id="breakfast"></td>
        </tr>

        <tr>
            <td>Had lunch?</td>
            <td id="lunch"></td>
        </tr>

        <tr>
            <td>Had supper?</td>
            <td id="supper"></td>
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