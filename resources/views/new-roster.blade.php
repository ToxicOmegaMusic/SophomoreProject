<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/>
</head>

<body>
    <div class="error"></div>

    <form>
        <input type="date" name="date" id="date" required>

        <select name="supervisor" id="supervisor" required>
            <option selected disabled value="">Select supervisor</option>
        </select>

        <select name="doctor" id="doctor" required>
            <option selected disabled value="">Select doctor</option>
        </select>

        <select name="caregiver1" id="caregiver1" required>
            <option selected disabled value="">Select caregiver 1</option>
        </select>

        <select name="caregiver2" id="caregiver2" required>
            <option selected disabled value="">Select caregiver 2</option>
        </select>

        <select name="caregiver3" id="caregiver3" required>
            <option selected disabled value="">Select caregiver 3</option>
        </select>

        <select name="caregiver4" id="caregiver4" required>
            <option selected disabled value="">Select caregiver 4</option>
        </select>

        <input type="submit">
    </form>
</body>