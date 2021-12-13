<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Family Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>

<body>
    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>
    <form>
        <label for="date">Date</label>
        <input type="date" id="date" name="date">

        <label for="familyCode">Date</label>
        <input type="number" id="familyCode" name="familyCode">

        <label for="patientID">Date</label>
        <input type="number" id="patientID" name="patientID">

        <input type="submit" value="search">
    </form>

    <table>
        <tr>
            <th>Doctor's Name</th>
            <th>Doctor's Appointment</th>
            <th>Caregiver's Name</th>
            <th>Morning Medicine</th>
            <th>Afternoon Medicine</th>
            <th>Evening Medicine</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>

        <tr>
            <td>Armedia De Palma</td>
            <td>10/20/2021</td>
            <td>Carl Calewell</td>
            <td><input type="checkbox" disabled></td>
            <td><input type="checkbox" disabled></td>
            <td><input type="checkbox" disabled></td>
            <td><input type="checkbox" disabled></td>
            <td><input type="checkbox" disabled></td>
            <td><input type="checkbox" disabled></td>
        </tr>
    </table>
</body>