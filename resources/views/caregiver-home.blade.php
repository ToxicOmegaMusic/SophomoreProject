<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Caregiver Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>


    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">
            <form class="flex flex-col">
                    
                <label class="text-lg" for="patient-id">Patient ID</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="patient-id" id="patientID">
                    
                <label class="text-lg" for="patient-name">Patient Name</label>
                <input class="flex h-8 rounded-xl p-2" type="text" name="patient-name" id="patient-name">
                    
                <label class="text-lg" for="date">Date</label>
                <input class="flex h-8 rounded-xl p-2" type="date" name="date" id="date" required>
                    
                <button class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 w-4/5 mt-4" type="submit">Search</button>
            </form>
            
            <table>
                <tr>
                    <td>
                        <input class="flex h-8 rounded-xl p-2 mb-3" type="text" name="doctor-name" placeholder="Doctor's name">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="flex h-8 rounded-xl p-2 mb-3" type="text" name="caregiver-name" placeholder="Caregiver's name">
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
                        <input class="flex items-center justify-center bg-green-900 font-serif text-xl text-indigo-200 rounded-xl mb-10 hover:bg-green-700 shadow-xl h-10 mt-4 w-4/5" type="submit" name="sub">
                    </td>
                </tr>

            </table>
        </div>
    </div>

</body>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


{{-- ARH

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

ARH --}}