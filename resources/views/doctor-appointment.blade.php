<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Doctor appointment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>
    <form action="api/doctor-appointment" method="post">
        <label for="patientID">Patient ID</label>
        <input type="text" id="patientID" name="patientID" required>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>

        <label for="doctor">Doctor</label>
        <select name="doctorID" id="doctor" required>
            <option selected disabled value="">Select doctor</option>
        </select>

        <label for="patientName">Patient Name</label>
        <input type="text" id="patientName" name="patientName" disabled>

        <input type="submit">

    </form>
</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>

    let roster = <?php echo json_encode($roster); ?>; // this passes the variable from php to javascript
    let patients = <?php echo json_encode($patients); ?>; 

    // This displays doctors in select 
    $(document).ready(function () {
        $("#date").change(function () { // When the date is changed
            var selected = $(this).val();
            $('.newoption').remove(); // Clear any previously entered options
            for (let r of roster) {
                if (selected == r.date) {
                    // add the new option to html
                    $('#doctor').append(`<option class='newoption' value=${r.doctorID}>${r.doctor}</option>`);
                }
            }
        });
    });

    // This displays the name of the patient when ID is changed
    $(document).ready(function () {
        $("#patientID").change(function () { // When the patientID is changed
            var selected = $(this).val();
            for (let patient of patients) { //Search each patient in array
                // If ID is found
                if (patient.id == selected) { 
                    // Make the new HTML element and replace it
                    pName = patient.f_name + " " + patient.l_name;
                    $('#patientName').replaceWith(`<input placeholder="${pName}" type="text" id="patientName" name="patientName" disabled>`);
                    break;
                }
                // if patient was never found display that none was found
                $('#patientName').replaceWith(`<input placeholder="No Patient Found" type="text" id="patientName" name="patientName" disabled>`)
            }
        });
    });

</script>