<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
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
</body>