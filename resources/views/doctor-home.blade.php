<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
    <title>Doctor Homepage</title>
    <link rel="icon" href="/favicon.ico">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
    <div class="home-banner" onclick="location.href='/';">Eranthis<br/>Communities</div>
    
    <div class="fixedHeight">
        <form>
            <label for="filterBy">Filter by:</label>
            
            <select name="filterBy" id="filterBy">      
                <option value="patientName">Patient Name</option>
                <option value="date">Date</option>
                <option value="comment">Comment</option>
                <option value="morningMedicine">Morning Medicine</option>
                <option value="afternoonMedicine">Afternoon Medicine</option>
                <option value="eveningMedicine">Evening Medicine</option>
            </select>

            <input name="patientName" id="patientName" type="text" placeholder="Name of Patient">

            <input name="date" id="date" type="date">

            <input name="comment" id="comment" type="text" placeholder="Comments">

            <input name="morningMed" id="morningMedicine" type="text" placeholder="Morning Medicine">

            <input name="afternoonMed" id="afternoonMedicine" type="text" placeholder="Afternoon Medicine">

            <input name="eveningMed" id="eveningMedicine" type="text" placeholder="Evening Medicine">
        
        </form>

        <table>
            <tr class="headings">
                <th>Patient Name</th>
                <th>Date</th>
                <th>Comment</th>
                <th>Morning Medicine</th>
                <th>Afternoon Medicine</th>
                <th>Evening Medicine</th>
            </tr>

            <tr>
                <td>Barbara</td>
                <td>11/22/2021</td>
                <td>The patient was unruly today</td>
                <td>Vitamin C</td>
                <td>None</td>
                <td>Ibuprofen</td>
            </tr>

            <tr>
                <td>Barry</td>
                <td>11/23/2021</td>
                <td>Knee was sore</td>
                <td>Vitamin E</td>
                <td>Cocaine</td>
                <td>Flintstones gummies (2)</td>
            </tr>
        </table>
    <div>


</body>

<script src="doctorHomeHideOthersWhileSearching.js"></script>

</html>