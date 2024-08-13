document.addEventListener("DOMContentLoaded", function() {
    function validateRegistrationForm(event) {
        event.preventDefault();
        const name = document.forms["registration"]["name"].value;
        const email = document.forms["registration"]["email"].value;
        const phone = document.forms["registration"]["phone"].value;
        const password = document.forms["registration"]["password"].value;

        if (!name) {
            alert("Please enter your full name");
            return false;
        }

        if (!email || !/\S+@\S+\.\S+/.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        if (!phone) {
            alert("Please enter your phone number");
            return false;
        }

        if (!password) {
            alert("Please provide a password");
            return false;
        }

        if (password.length < 5) {
            alert("Your password must be at least 5 characters long");
            return false;
        }

        window.location.href = "design.html";
    }

    document.forms["registration"].addEventListener("submit", validateRegistrationForm);
});
