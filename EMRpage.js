// JavaScript Document

function openOption(evt, optionName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(optionName).style.display = "block";
    evt.currentTarget.className += " active";
}

//Add Medication
 var med = 1;
 function add_fields()
 {
	med++;
    var objTo = document.getElementById('med_fields');
    var divtest = document.createElement("fieldset");
    divtest.innerHTML = '<legend> Medication ' + med +':</legend><label> Time: </label> <input type="datetime" id="medTime' + med +'" name="medTime' + med +'"> <br><label> Medication: </label> <input type="text" id="medName' + med +'" name="medName' + med +'"> <br><legend> Route: </legend><textarea id = "medRoute' + med +'" name="medRoute" cols="50" rows="10"></textarea> <br><legend> Drug Class: </legend><textarea id = "drugClass' + med +'" name="drugClass" cols="50" rows="10"></textarea> <br><legend> Reason: </legend><textarea id = "medReason' + med +'" name="medReason" cols="50" rows="10"></textarea> <br><legend> Effect: </legend><textarea id = "medEffect' + med +'" name="medEffect" cols="50" rows="10"></textarea> <br><legend> Adverse Effects: </legend><textarea id = "medAdverse' + med +'" name="medAdverse" cols="50" rows="10"></textarea> <br>';
 
 objTo.appendChild(divtest);
 
 }