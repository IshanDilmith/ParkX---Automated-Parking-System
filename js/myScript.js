// display greeting based on the time of the day
function displayGreeting() {
    var currentTime = new Date();
    var currentHour = currentTime.getHours();
    var greetingElement = document.getElementById("greeting");

    if (currentHour < 12) {
        greetingElement.textContent = "Good morning!";
    } else if (currentHour < 18) {
        greetingElement.textContent = "Good afternoon!";
    } else {
        greetingElement.textContent = "Good evening!";
    }
}

window.onload = displayGreeting;

// enable edit account button after checking tandc
function enableButton(){

	if(document.getElementById("tandc").checked){
		document.getElementById("submitBtn").disabled=false;
	}

	else{
		document.getElementById("submitBtn").disabled=true;
	}

}

// Function to confirm and redirect
function confirmDelete() {
    var response = confirm("Are you sure you want to proceed to delete your account?");

    if (response) {
        // If the user confirms, redirect to the deleteProfile.html page.
        window.location.href = "deleteProfile.html";
    } else {
        // If the user cancels, redirect to the editprofile.php page.
        window.location.href = "editprofile.php";
    }
}