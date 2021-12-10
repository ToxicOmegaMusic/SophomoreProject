<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Info</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>
    <form>
            <label for="filterBy">Filter by:</label>
            
            <select name="filterBy" id="filterBy">        
                <option value="patientID">Patient ID</option>
                <option value="patientName">Patient Name</option>
                <option value="age">Patient Age</option>
                <option value="emergencyNumber">Emergency Phone Number</option>
                <option value="emergencyName">Emergency Phone Number</option>
                <option value="admissionDate">Date</option>
            </select>

            <input name="patientID" id="patientID" type="number" placeholder="Patient ID">
            
            <input name="patientName" id="patientName" type="text" placeholder="Patient Name">

            <input name="age" id="age" type="number" placeholder="Patient Age">

            <input type="text" class="phoneNumber" id="emergencyNumber" name="emergencyNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required>

            <input name="emergencyName" id="emergencyName" type="text" placeholder="Emergency Name">

            <input name="admissionDate" id="admissionDate" type="date">
        
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Emergency Contact</th>
            <th>Emergency Contact Name</th>
            <th>Admission Date</th>
        </tr>
    </table>
</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="makeItAPhoneNumber.js"></script>

<script src="patientInfoHideOthersWhileSearching.js"></script>