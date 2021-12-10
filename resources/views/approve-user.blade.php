<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Patient Home</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('logged-in-home.css') }}"/> --}}
</head>

<body>
    <div class="error"></div>
        <form action="/api/approval" method="POST">
        {{-- <form action="http://172.31.109.60:6969/api/approval" method="POST"> --}}
        <table>
                <tr>
                    <th>Approve</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                
                
                @foreach($patient as $key => $d)
                <tr>
                    <input type="hidden" name="patient_total" value="{{ count($patient) }}">
                    <td><input type="checkbox" name="patient_approve_{{ $key }}"></td>
                    <input type="hidden" name="patient_id_{{ $key }}" value="{{ $d->id }}">
                    <td>{{ $d->f_name . " " . $d->l_name }}</td>
                    <td>Patient</td>
                </tr>
                @endforeach

                @foreach($family as $key => $d)
                <tr>
                    <input type="hidden" name="family_total" value="{{ count($family) }}">
                    <td><input type="checkbox" name="family_approve_{{ $key }}"></td>
                    <input type="hidden" name="family_id_{{ $key }}" value="{{ $d->id }}">
                    <td>{{ $d->f_name . " " . $d->l_name }}</td>
                    <td>Family Member</td>
                </tr>
                @endforeach

                @foreach($employee as $key => $d)
                <tr>
                    <input type="hidden" name="employee_total" value="{{ count($employee) }}">
                    <td><input type="checkbox" name="employee_approve_{{ $key }}"></td>
                    <input type="hidden" name="employee_id_{{ $key }}" value="{{ $d->id }}">
                    <td>{{ $d->f_name . " " . $d->l_name }}</td>
                    <td>{{ ucwords($roles[$d->role_id-1]->title) }}</td>
                </tr>
                @endforeach

        </table>
        <input type="submit" name="submit" id="submit" value="Approve selected users">
    </form>
</body>