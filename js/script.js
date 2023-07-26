document.addEventListener("DOMContentLoaded", function() {
    var popup = document.getElementById("popup");
    var emailForm = document.getElementById("email-form");

    // Check if email is already stored in browser's local storage
    var storedEmail = localStorage.getItem("email");
    if (storedEmail) {
        popup.style.display = "none";
    }

    // Handle form submission
    emailForm.addEventListener("submit", function(event) {
        event.preventDefault();

        // Get the entered email
        var emailInput = emailForm.elements["email"];
        var email = emailInput.value;

        // Store the email in local storage
        localStorage.setItem("email", email);

        // Hide the popup
        popup.style.display = "none";
    });
});
