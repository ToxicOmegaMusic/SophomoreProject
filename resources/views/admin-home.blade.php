<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">


    <!-- This is the HOME banner -->
    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <!-- Error div -->
        <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
            <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <div class="flex flex-col bg-green-900 rounded-xl w-auto mb-20 p-3 shadow-xl">

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl p-4">

            <form class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl" id="form">
                <input class="w-2/5 h-10" type="date" name="date" id="date">
            </form>

            <script>
                $('#date').change(function(){
                console.log('Submiting form');                
                $('#form').submit();
            });
            </script>

            <p class="text-xl mt-4">Missed Patient Activity</p>
            <table class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl">
                <tr>
                    <th>Patients name</th>
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
                    <td>Charlie</td>
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
        </div>
    </div>

    <!-- Ben's styling for the tables -->
    <style>
        tr {
            padding: 0.5vh;
            border-bottom: 1px solid #006600;
            display: flex;
            max-width: 1050px;
        }
        th, td {
            width: 115px
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>

</body>