<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Make a payment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body>
    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>
    <form>
        <label for="patientID">Patient ID</label>
        <input type="text" name="patientID" id="patientID">

        <label for="due">Total amount due</label>
        <div id=dollarBeside>
            <span>$</span>
            <input type="text" name="due" id="due" disabled>
        </div>

        <label for="paid">Enter amount paid</label>
        <div id=dollarBeside>
            <span>$</span>
            <input type="text" name="paid" id="paid" onkeypress="return isNumberKey(event)">
        </div>

        <input type="submit" name="submit" id="submit">
    </form>
</body>

<script>
    function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
</script>