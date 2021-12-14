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

        @foreach ($caregivers as $c)
        <input type="hidden" name="{{ 'caregiver'.$loop->iteration }}" value="{{ $c->f_name." ".$c->l_name }}">
        @endforeach

        @foreach ($supervisors as $s)
            <input type="hidden" name="{{ 'supervisor'.$loop->iteration }}" value="{{ $s->f_name." ".$s->l_name }}">
        @endforeach

        @foreach ($doctors as $d)
            <input type="hidden" name="{{ 'doctor'.$loop->iteration }}" value="{{ $d->f_name." ".$d->l_name }}">
        @endforeach

        <label for="date">Type Date to create Roster for</label>
        <input type="date" name="date" id="date" required>

        <label for="supervisor">Select Supervisor for the day</label>
        <select name="supervisorID" id="supervisor" required>
            <option selected disabled value="">Select supervisor</option>
            @foreach ($supervisors as $s )
            <option value="{{ $s->id }}">{{ $s->f_name." ".$s->l_name }}</option>
            @endforeach
        </select>
            
        <label for="doctor">Select Doctor for the day</label>
        <select name="doctorID" id="doctor" required>
            <option selected disabled value="">Select Doctor</option>
            @foreach ($doctors as $d )
            <option value="{{ $d->id }}">{{ $d->f_name." ".$d->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver1">Select Caregiver for the day</label>
        <select name="caregiver1ID" id="caregiver1" required>
            <option selected disabled value="">Select caregiver 1</option>
            @foreach ($caregivers as $c )
            <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver2">Select Caregiver for the day</label>
        <select name="caregiver2ID" id="caregiver2" required>
            <option selected disabled value="">Select caregiver 2</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <label for="caregiver3">Select Caregiver for the day</label>
        <select name="caregiver3ID" id="caregiver3" required>
            <option selected disabled value="">Select caregiver 3</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>
        
        <label for="caregiver4">Select Caregiver for the day</label>
        <select name="caregiver4ID" id="caregiver4" required>
            <option selected disabled value="">Select caregiver 4</option>
            @foreach ($caregivers as $c )
                <option value="{{ $c->id }}">{{ $c->f_name." ".$c->l_name }}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>
</body>