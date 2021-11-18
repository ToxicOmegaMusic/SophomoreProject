<!-- change stylesheet ref -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}"/>-->
</head>
<body>

<div class="horizontal-page">

    <div>side banner TBD</div>

    <form> <!-- Add action later! -->
        <select id="userType">
            <option value="Family Member">Family Member</option>
            <option value="Patient" class="ShowExtraFields">Patient</option>
            <option value="Caregiver">Caregiver</option>
            <option value="Doctor">Doctor</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Admin">Admin</option>
        </select>

        <label for="fName">First Name</label>
        <input type="text" name="fName" id="fName" required>
        <label for="lName">Last Name</label>
        <input type="text" name="lName" id="lName" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        <label for="phone">Phone Number</label>
        <input type="text" class="phoneNumber" id="phone" name="phone" placeholder="000-000-0000" pattern="[0-9]{10}" required>
        <label for="password">Enter a password</label>


        <div id="isPatientSelected">
        <label for="FamilyPassword" class="showIfPatientSelected">Family Password</label>
        <input type="password" name="FamilyPassword" id="FamilyPassword" class="showIfPatientSelected">
        <label for="FamilyContactName" class="showIfPatientSelected">Emergency Contact Name</label>
        <input type="text" name="FamilyContactName" id="FamilyContactName" class="showIfPatientSelected">
        <label for="FamilyContactNumber" class="showIfPatientSelected">Emergency Contact Phone Number</label>
        <input type="tel" name="FamilyContactNumber" id="FamilyContactNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="showIfPatientSelected">
        <label for="FamilyRelation" class="showIfPatientSelected">Relation to Patient</label>
        <input type="text" name="FamilyRelation" id="FamilyRelation" class="showIfPatientSelected">
        </div>

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

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
        <script src="makeItAPhoneNumber.js"></script>
        


        <input type="submit" name="sub" style="background-color: #006600; color: white; font-size: 1.5em; font-family: Georgia, serif;"/>
    </form>

    <div>side banner TBD</div>

</div>


</body>
</html>