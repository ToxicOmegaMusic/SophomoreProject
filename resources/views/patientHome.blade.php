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