function loadData(data) {
    if (data == "btn1") {
        document.getElementById("getform").innerHTML = `<form method="post" id="getform" class="form1" action="reserveSpotDB.php">
        <h1><legend><center>Reserve Your Parking Spot</center></legend></h1>
        <label>Vehicle Type : </label><br>
        <input type="text" name="field1" placeholder="Car Bicycle Van" required><br><br>
        <label>License Plate Number : </label><br>
        <input type="text" name="field2" placeholder="AB-1234" required><br><br>
        <label>Date : </label><br>
        <input type="date" name="resdate" values="2023-10-18" required><br><br>
        <label>Check In Time : </label><br>
        <input type="time" name="field3" value="13:20" required><br><br>
        <label>Any Special Note : </label><br>
        <textarea type="text" name="field4"></textarea><br><br>
        <input type="checkbox" id="checkBox" onclick="enableButton()">
        <label class="t-c">Accept Terms and Conditions</label>
        <input type="submit" name="reserve" value="Reserve Spot" id="reserveBtn" disabled>
    </form>`;
    } else if (data == "btn2") {
        document.getElementById("getform").innerHTML = `<form method="post" class="form2" action="reserveSpotDB.php">
            <h1><legend><center>Update Reservation</center></legend></h1>
            <label>Reserved ID : </label><br>
            <input type="text" name="field5" placeholder="1221" required><br><br>
            <label>Date : </label><br>
            <input type="date" name="changedate" values="2023-10-18" required><br><br>
            <label>Check In Time : </label><br>
            <input type="time" name="field6" value="13:20" required><br><br>
            <input type="submit" name="updating" value="Update Time" id="updateBtn">
            </form>`;
    } else if (data == "btn3") {
        document.getElementById("getform").innerHTML = `<form method="post" class="form3" action="reserveSpotDB.php">
            <h1><legend><center>Remove Reserved Spot</center></legend></h1>
            <label>Reserved ID : </label><br>
            <input type="text" name="field7" placeholder="1221" required><br><br>
            <input type="submit" name="remove" value="Remove Reserved Spot" id="removeBtn">
            </form>`;
    } else {
        alert("Invalid");
    }
}

function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("reserveBtn").disabled=false;
	}else{
		document.getElementById("reserveBtn").disabled=true;
	}
}