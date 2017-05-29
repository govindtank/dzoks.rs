document.getElementById("sendButton").onclick = function() {    
    var form = document.getElementsByTagName("form")[0];
    
    var inputName = form.getElementsByName("name")[0];
    var inputEmail = form.getElementsByName("email")[0];
    var inputSubject = form.getElementsByName("subject")[0];
    var inputMessage = form.getElementsByName("message")[0];
    var inputValidationCheck = form.getElementsByName("validationCheck")[0];
    var inputValidation = form.getElementsByName("validationInput")[0];
    
    if(!inputName || !inputEmail || !inputSubject || !inputMessage || !inputValidation) {
        alert("required");
        return false;
    }
    
    if(!inputValidation.value.equals(inputValidationCheck.value)) {
        alert("validation");
        return false;
    }
    
    var data = new FormData();
    
    data.append("name", inputName);
    data.append("email", inputEmail);
    data.append("subject", inputSubject);
    data.append("message", inputMessage);
    
	var request = new XMLHttpRequest();
    
    request.open("POST", "logic/contact.php");
	request.send(data);	
    
    alert("sent");
    
    return false;
}
