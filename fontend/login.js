document.addEventListener("DOMContentLoaded", function() {
    function validateLoginForm(event) {
        event.preventDefault();
        const email = document.forms["login"]["email"].value;
        const password = document.forms["login"]["password"].value;

        if (!email || !/\S+@\S+\.\S+/.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        if (!password) {
            alert("Please enter password");
            return false;
        }

        // Lưu trạng thái đăng nhập và chuyển hướng
        localStorage.setItem("loggedIn", "true");
        window.location.href = "design.html"; // Chuyển hướng đến trang chính hoặc trang khác
    }

    document.forms["login"].addEventListener("submit", validateLoginForm);
});
