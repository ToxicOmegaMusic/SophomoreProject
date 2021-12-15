<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Make a payment</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
</head>

<body class="flex flex-col items-center bg-green-600">

    <div class="flex font-serif text-5xl text-center justify-center text-indigo-200 bg-green-900 h-40 items-center w-full mb-12 cursor-pointer" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <!-- Error div -->
    <div class="flex justify-center mt-5 bg-red-500 rounded-xl w-80 h-auto p-2">
        <div class="bg-gray-100 rounded-xl w-72 p-1 text-red-800"></div>
    </div>

    <div class="flex flex-col bg-green-900 rounded-xl w-3/5 mb-20 p-3 shadow-xl">
        <div class="flex flex-col bg-indigo-200 w-full items-center h-auto rounded-xl mb-5">

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

        </div>
    </div>

</body>

{{-- ARH
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
ARH --}}