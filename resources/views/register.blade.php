<!-- change stylesheet ref -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('login-reg.css') }}"/>
</head>
<body>

    <div class="aligner-element"></div>
    <div class="register-banner"></div>

    <form action="/api/register" method="POST"> <!-- Add action later! -->
        <p>Select your role:</p>
        <select name="userType" id="userType">
    

        
        <select id="userType">
            <option value="Family Member">Family Member</option>
            <option value="Patient" class="ShowExtraFields">Patient</option>
            <option value="Caregiver">Caregiver</option>
            <option value="Doctor">Doctor</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Admin">Admin</option>
        </select>

        <div id="normal-register">

            <div class="input-field-box">
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="fName" required>
            </div>

            <div class="input-field-box">
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="lName" required>
            </div>

            <div class="input-field-box">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="input-field-box">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>

            <div class="input-field-box">
                <label for="password">Enter a password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="input-field-box">
                <label for="DOB">Date of birth</label>
                <input type="date" name="DOB" id="DOB">
            </div>

        </div>

        <div id="isPatientSelected">

            <h3>Patient Info:</h3>

            <div class="input-field-box">
                <label for="FamilyPassword">Family Password</label>
                <input type="password" name="FamilyPassword" id="FamilyPassword">
            </div>

            <div class="input-field-box">
                <label for="FamilyContactName">Emergency Contact Name</label>
                <input type="text" name="FamilyContactName" id="FamilyContactName">
            </div>
            
            <div class="input-field-box">
                <label for="FamilyContactNumber">Emergency Contact Phone Number</label>
                <input type="tel" name="FamilyContactNumber" id="FamilyContactNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </div>
            
            <div class="input-field-box">
                <label for="FamilyRelation" >Relation to Patient</label>
                <input type="text" name="FamilyRelation" id="FamilyRelation">
            </div>

        </div>

        <input type="submit" name="sub" style="background-color: #006600; color: white; font-size: 1.5em; font-family: Georgia, serif;"/>
    </form>

    <div class="aligner-element"></div>


<!-- Scripts are here -->

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="makeItAPhoneNumber.js"></script>

<script>

    $("#userType").change(function() {
        if ($(this).val() == "Patient") {
            $('#isPatientSelected').show();
            $('#isPatientSelected').attr('required', '');
        }
        else {
            $('#isPatientSelected').hide();
            $('#isPatientSelected').removeAttr('required');
        }
    });
            
    $("#userType").trigger("change");

</script>

<!-- Scripts are here -->

</body>
</html>