<!--
    UNFINISHED PAGE
-->

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
        <input list="userType" id="typeOfUser" name="typeOfUser"/>
        <datalist id="userType">
            <option value="Family Member">
            <option value="Patient" class="ShowExtraFields">
            <option value="Caregiver">
            <option value="Doctor">
            <option value="Supervisor">
            <option value="Admin">
        </datalist>

        <label for="fName">First Name</label>
        <input type="text" name="fName" id="fName" required>
        <label for="lName">Last Name</label>
        <input type="text" name="lName" id="lName" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
        <label for="password">Enter a password</label>
        <input type="password" name="password" id="password" required>
        <label for="DOB">Date of birth</label>
        <input type="date" name="DOB" id="DOB">


        <label for="FamilyCode" class="showIfPatientSelected">Family Code</label>
        <input type="text" name="FamilyCode" id="FamilyCode" class="showIfPatientSelected">
        <label for="FamilyContactName" class="showIfPatientSelected">Emergency Contact Name</label>
        <input type="text" name="FamilyContactName" id="FamilyContactName" class="showIfPatientSelected">
        <label for="FamilyContactNumber" class="showIfPatientSelected">Emergency Contact Phone Number</label>
        <input type="tel" name="FamilyContactNumber" id="FamilyContactNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="showIfPatientSelected">
        <label for="FamilyRelation" class="showIfPatientSelected">Relation to Patient</label>
        <input type="text" name="FamilyRelation" id="FamilyRelation" class="showIfPatientSelected">
        


        <input type="submit" name="sub" style="background-color: #006600; color: white; font-size: 1.5em; font-family: Georgia, serif;"/>
    </form>

    <div>side banner TBD</div>

</div>


</body>
</html>