<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl"> <!-- COOL FORM BORDER -->

        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl mb-5">
            <table>
                <tr class="headings">
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Comment</th>
                    <th>Morning Medicine</th>
                    <th>Afternoon Medicine</th>
                    <th>Evening Medicine</th>
                </tr>
            </table>

            <p>Update Perscription
            <form>
                <label for="comment">Insert Comment</label>
                <input type="text" name="comment" id="comment" required>

                <label for="morning">Morning Perscription</label>
                <input type="text" name="morning" id="morning">

                <label for="afternoon">Morning Perscription</label>
                <input type="text" name="afternoon" id="afternoon">

                <label for="evening">Morning Perscription</label>
                <input type="text" name="evening" id="evening">

                <input type="submit">
                {{-- The submit button must be disabled if the appointment is not today! --}}
            </form>
        </div>
    </div>
</body>