function updateDateTime() {
            let now = new Date();
            let dateTimeElement = document.getElementById('dateTime');
            dateTimeElement.textContent = now;
        }

        // Call the updateDateTime function initially to avoid delay
        updateDateTime();

        // Update the date and time every second
        setInterval(updateDateTime, 1000);