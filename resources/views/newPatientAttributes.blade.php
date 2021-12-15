<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>new patient atributes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">
    <form>
        <label for="patientID">Patient ID</label>
        <input type="number" name="patientID" id="patientID" required>
        
        <label for="group">Group</label>
        <input type="text" name="group" id="group" required>
        
        <label for="admissionDate">Admission Date</label>
        <input type="date" name="admissionDate" id="admissionDate" required>
        
        <label for="patientName">Patient Name</label>
        <input type="text" name="patientName" id="patientName" disabled>
    </form>

</body>