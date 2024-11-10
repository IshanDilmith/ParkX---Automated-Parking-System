 // JavaScript function to handle the "Edit" button click
 function editFeedback(feedbackId) {
    const editForm = document.querySelector(`#edit-feedback-form-${feedbackId}`);
    if (editForm) {
        editForm.style.display = "block";
    }
}

// JavaScript function to handle the "Update" button click
function updateFeedback(feedbackId) {
    const editedFeedback = document.querySelector(`#editedFeedback-${feedbackId}`).value;
    
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './php/update_feedback.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
           
        }
    };
    xhr.send(`feedbackId=${feedbackId}&editedFeedback=${editedFeedback}`); 
    location.reload(true);
}


