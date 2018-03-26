<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="emr.css" rel="stylesheet" type="text/css">
<link href="EMRpage.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="EMRpage.js"></script> 
</head>
<body>
<div id = "wrapper">
<?php include "Menu.php" ?>

<div class="tab">
  <button class="tablinks" onclick="openOption(event, 'PatDemo')" id="defaultOpen">Patient Demographics</button>
  <script type="text/javascript">
  // Get the element with id="defaultOpen" and click on it
  openOption(event, 'PatDemo');
  </script>
  <button class="tablinks" onclick="openOption(event, 'Vitals')">Vitals</button>
  <button class="tablinks" onclick="openOption(event, 'IO')">Intake/Output</button>
  <button class="tablinks" onclick="openOption(event, 'Assessment')">Assessment</button>
  <button class="tablinks" onclick="openOption(event, 'Med')">Med. Admin</button>
  <button class="tablinks" onclick="openOption(event, 'NCP')">NCP</button>
</div>

<!--PATIENT DEMOGRAPHICS -->
<div id="PatDemo" class="tabcontent">
<h3>Patient Demographics</h3>
<form name = "demographics" id="demographics">
  	<label> Patient Initials: </label> <input type="text" id="initials" name="initials"> <br>
    <label> Patient Age: </label> <input type="text" id="age" name="age"> <br>
    <label> Patient Gender: </label><input type="radio" name="male" id="male">
        					<label>Male</label>
                            <input type="radio" name="male" id="male">
        					<label>Female</label><br> 
    <legend> Diagnosis: </legend>
        <textarea id="diagnosis" name="diagnosis" cols="50" rows="10"></textarea>
    <legend> Health History: </legend>
        <textarea id="healthHistory" name="healthHistory" cols="50" rows="10"></textarea> 
</form>
</div>
<!--PATIENT DEMOGRAPHICS -->


<!--PATIENT VITALS -->
<div id="Vitals" class="tabcontent">
<h3>Patient Vitals</h3>
<form name = "vitals" id="vitals">
  	<label> Temperature: </label> <input type="text" id="temperature" name="temperature"> <br>
    <label> Heart Rate: </label> <input type="text" id="hr" name="hr"> <br>
    <label> Blood Pressure: </label> <input type="text" id="bp" name="bp"> <br>
    <label> Resp. Rate: </label> <input type="text" id="rr" name="rr"> <br>
    <label> O2 Stat: </label> <input type="text" id="o2" name="o2"> <br>
</form>
</div>
<!--PATIENT VITALS -->


<!--INTAKE/OUTPUT -->
<div id="IO" class="tabcontent">
<h3>Intake/Output</h3>
<form name = "vitals" id="vitals">
	<fieldset>
    	<legend> Intake </legend>
        <label> Oral: </label> <input type="text" id="oral" name="oral"> <br>
        <label> IV: </label> <input type="text" id="iv" name="iv"> <br>
        <label> Tube Feedings: </label> <input type="text" id="tube" name="tube"> <br>
        <legend> Additional Intake: </legend>
        <textarea id="iAdditional" name="iAdditional" cols="50" rows="10"></textarea> <br>
        <label> Total Intake: </label> <input type="text" id="iTotal" name="iTotal"> <br>
	</fieldset>
    <fieldset>
    	<legend> Output </legend>
        <label> Urine: </label> <input type="text" id="urine" name="urine"> <br>
        <label> Stool: </label> <input type="text" id="stool" name="stool"> <br>
        <label> Foley: </label> <input type="text" id="foley" name="foley"> <br>
        <label> Catheter: </label> <input type="text" id="cath" name="cath"> <br>
        <legend> Additional Output: </legend>
        <textarea id="oAdditional" name="oAdditional" cols="50" rows="10"></textarea> <br>
       	<label> Total Ouput: </label> <input type="text" id="oTotal" name="oTotal"> <br>
   	</fieldset>
    <fieldset>
    	<legend> Total </legend>
    	<label> Total Intake/Output: </label> <input type="text" id="ioTotal" name="ioTotal"> <br>
   	</fieldset> 
</div>
<!--INTAKE/OUTPUT -->

<!-- ASSESSMENT -->
<div id="Assessment" class="tabcontent">
<h3>Patient Assessment</h3>
<form name = "assessment" id="assessment">
	<fieldset>
	<legend> Neurological:</legend> Normal: <input type="radio" name="neuro" id="neuro"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="neuroNN" name="neuroNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Cardiovascular:</legend> Normal: <input type="radio" name="cardio" id="cardio"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="cardioNN" name="cardioNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Respiratory:</legend> Normal: <input type="radio" name="resp" id="resp"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="respNN" name="respNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Gastrointestinal:</legend> Normal: <input type="radio" name="gastro" id="gastro"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="gastroNN" name="gastroNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Genitourinary:</legend> Normal: <input type="radio" name="genit" id="genit"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="genitNN" name="genitNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Reproductive:</legend> Normal: <input type="radio" name="repro" id="repro"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="reproNN" name="reproNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Skin/Mucosa:</legend> Normal: <input type="radio" name="skin" id="skin"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="skinNN" name="skinNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Musculoskeletal Activity:</legend> Normal: <input type="radio" name="ma" id="ma"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="maNN" name="maNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Psychosocial:</legend> Normal: <input type="radio" name="psych" id="psych"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="psychNN" name="psychNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
    
    <fieldset>
	<legend> Pain:</legend> Normal: <input type="radio" name="pain" id="pain"> <br><br>
    <legend> If Not Normal: </legend>
        <textarea id="painNN" name="painNN" cols="50" rows="10"></textarea> <br>
    </fieldset>
</form>
</div>
<!-- ASSESSMENT -->

<!-- MED ADMIN -->
<div id="Med" class="tabcontent">
<h3>Medication Administration</h3>
<form name = "medAdmin" id="med_fields">
	<fieldset>
    <legend> Medication 1:</legend>
    	 <label> Time: </label> <input type="datetime" id="medTime" name="medTime"> <br>
         <label> Medication: </label> <input type="text" id="medName" name="medName"> <br>
         <legend> Route: </legend>
        	<textarea id="medRoute" name="medRoute" cols="50" rows="10"></textarea> <br>
         <legend> Drug Class: </legend>
            <textarea id="drugClass" name="drugClass" cols="50" rows="10"></textarea> <br>
         <legend> Reason: </legend>
        	<textarea id="medReason" name="medReason" cols="50" rows="10"></textarea> <br>
         <legend> Effect: </legend>
        	<textarea id="medEffect" name="medEffect" cols="50" rows="10"></textarea> <br>
         <legend> Adverse Effects: </legend>
        	<textarea id="medAdverse" name="medAdverse" cols="50" rows="10"></textarea> <br>
    </fieldset>    
</form>
<input type="button" id="more_fields" onclick="add_fields();" value="Add Medication" />
</div>
<!-- MED ADMIN -->

<!-- NCP -->
<div id="NCP" class="tabcontent">
<h3>Nursing Care Plan</h3>
<form name = "assessment" id="med_fields">
	<legend> Nursing Diagnosis: </legend>
        	<textarea id="nursingDiag" name="nursingDiag" cols="50" rows="10"></textarea> <br>
	<legend> Interventions: </legend>
        	<textarea id="interventions" name="interventions" cols="50" rows="10"></textarea> <br>
    <legend> Outcome Statement: </legend>
        	<textarea id="outcome" name="outcome" cols="50" rows="10"></textarea> <br>
    <legend> Met: </legend>
        	<textarea id="met" name="met" cols="50" rows="7"></textarea> <br>
	<legend> Partially Met: </legend>
        	<textarea id="partMet" name="partMet" cols="50" rows="7"></textarea> <br>
    <legend> Unmet: </legend>
        	<textarea id="unmet" name="unmet" cols="50" rows="7"></textarea> <br>
    <legend> Revision: </legend>
        	<textarea id="revision" name="revision" cols="50" rows="10"></textarea> <br>
</form>
</div>     


<footer>
<p>Terms of Use | Privacy Policy | &copy; Group2 2016</p>
</footer>
</div> <!-- Wrapper -->
</body>
</html>