<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
    <!-- Error div -->
        <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
            <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <form id="form" action="api/admin-home" method="POST">
        <input type="date" name="date" id="date">
    </form>

    <script>
        $('#date').change(function(){
        console.log('Submiting form');                
        $('#form').submit();
      });
    </script>


    <table>
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

        {{-- @foreach ( as )
            
        @endforeach --}}
    </table>
</body>