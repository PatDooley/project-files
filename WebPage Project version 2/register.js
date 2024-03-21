document.addEventListener('DOMContentLoaded', function () {
    // Add event listener to the form
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Get form data
        const username = document.getElementById('newUsername').value;
        const password = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirm_password').value;

        // Validate password and confirm password
        if (password !== confirmPassword) {
            alert("Passwords do not match");
            return;
        }

        // Prepare data to send to the server
        const formData = {
            username: username,
            password: password
        };

        // Send data to the server using fetch API
        fetch('http://localhost:3000/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle success response from the server
            console.log('Data submitted successfully:', data);
            // Redirect to another page or display a success message, etc.
        })
        .catch(error => {
            // Handle error
            console.error('Error occurred while submitting data:', error);
            // Display an error message to the user, etc.
        });
    });
});