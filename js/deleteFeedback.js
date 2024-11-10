function deleteFeedback(feedbackId) {
    if (confirm("Are you sure you want to delete this feedback?")) {
        fetch('./php/delete_feedback.php', {
            method: 'POST',
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            },
            body: `feedbackId=${feedbackId}`
        })
        .then(response => {
            if (response.status === 200) {
                location.reload(); // Reload the page after successful deletion
            }
        })
        .catch(error => {
            // Handle network errors or other exceptions
        });
    }
    location.reload(true);
}
