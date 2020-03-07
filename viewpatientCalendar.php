<html>
<head>



</head>
<body>
    
<h1 id="patient">
</h1>


</body>

<script>
// get the parameters in url fuck
  const queryString = window.location.search;

//parse each url parameter example ang fucking patient name
  const urlParams = new URLSearchParams(queryString);

// get the patient name in url fuckk
  const patientName = urlParams.get('patientName')

  alert(patientName);

  document.getElementById("patient").innerHTML = patientName;
  

</script>

</html>