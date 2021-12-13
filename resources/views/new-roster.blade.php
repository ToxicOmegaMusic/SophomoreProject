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

    <form action="api/new-roster" method="post">
        <label for="date">Type Date to create Roster for</label>
        <input type="date" name="date" id="date" required>

        <label for="supervisor">Select Supervisor for the day</label>
        <select name="supervisor" id="supervisor" required>
            <option selected disabled value="">Select supervisor</option>
            @foreach ($supervisors as $s )
            <option value="{{ $s->f_name." ".$s->l_name }}">{{ $s->f_name." ".$s->l_name }}</option>
            @endforeach
        </select>
            
        <label for="doctor">Select Doctor for the day</label>
        <select name="doctor" id="doctor" required>
            <option selected disabled value="">Select Doctor</option>
            @foreach ($doctors as $d )
            <option value="{{ $d->f_name." ".$d->l_name }}">{{ $d->f_name." ".$d->l_name }}</option>
            @endforeach
        </select>
        
        <label for="caregiver1">Select Caregiver for the day</label>
        <select name="caregiver1" id="caregiver1" required>
            <option selected disabled value="">Select caregiver 1</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->f_name." ".$c->l_name }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver2">Select Caregiver for the day</label>
        <select name="caregiver2" id="caregiver2" required>
            <option selected disabled value="">Select caregiver 2</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->f_name." ".$c->l_name }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver3">Select Caregiver for the day</label>
        <select name="caregiver3" id="caregiver3" required>
            <option selected disabled value="">Select caregiver 3</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->f_name." ".$c->l_name }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver4">Select Caregiver for the day</label>
        <select name="caregiver4" id="caregiver4" required>
            <option selected disabled value="">Select caregiver 4</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->f_name." ".$c->l_name }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>
</body>