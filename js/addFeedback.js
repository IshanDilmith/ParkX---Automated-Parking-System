function addFeedback() {
    const feedback = document.getElementById('feedbackInput').value;
    const userId = "user22";
    const vehicleId = "232";

    fetch('./php/add_feedback.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/x-www-form-urlencoded'
        },
        body: `userId=${userId}&vehicleId=${vehicleId}&feedback=${feedback}`
    })
    .then(response => {
        if (response.status === 200) {
           
            location.reload(true);
        } else {
            // Handle error
        }
    })
    .catch(error => {
        
    });
}
