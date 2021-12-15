<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>new patient atributes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>
    
    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl mb-5">

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

        </div>
    </div>

</body>