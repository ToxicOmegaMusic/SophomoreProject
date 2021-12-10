<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Doctor appointment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>
    <form>
        <label for="patientID">Patient ID</label>
        <input type="text" id="patientID" name="patientID" required>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>

        <label for="doctor">Doctor</label>
        <select name="doctor" id="doctor" required>
            <option selected disabled value="">Select doctor</option>
        </select>

        <label for="patientName">Patient Name</label>
        <input type="text" id="patientName" name="patientName" disabled>

        <input type="submit">
    </form>
</body>