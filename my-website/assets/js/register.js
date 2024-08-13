document.addEventListener("DOMContentLoaded", function() {
    function validateRegistrationForm(event) {
        const fullname = document.forms["registration"]["fullname"].value;
        const email = document.forms["registration"]["email"].value;
        const phone = document.forms["registration"]["phone"].value;
        const passwords = document.forms["registration"]["passwords"].value;

        if (!fullname) {
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

        if (!passwords) {
            alert("Please provide a password");
            return false;
        }

        if (passwords.length < 5) {
            alert("Your password must be at least 5 characters long");
            return false;
        }

        // Nếu tất cả các kiểm tra đều thành công, trả về true để gửi form
        return true;
    }

    document.forms["registration"].addEventListener("submit", function(event) {
        if (!validateRegistrationForm(event)) {
            event.preventDefault();
        }
    });
});
