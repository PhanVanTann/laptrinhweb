document.addEventListener("DOMContentLoaded", function() {
    const loginLink = document.getElementById("login");
    const logoutLink = document.getElementById("logout");

    // Hàm để cập nhật trạng thái hiển thị của liên kết đăng nhập và đăng xuất
    function updateAuthLinks() {
        const isLoggedIn = sessionStorage.getItem("loggedIn") === "true";
        if (isLoggedIn) {
            loginLink.style.display = "none";
            logoutLink.style.display = "inline";
        } else {
            loginLink.style.display = "inline";
            logoutLink.style.display = "none";
        }
    }

    // Gọi hàm để thiết lập trạng thái hiển thị khi trang được tải
    updateAuthLinks();

    // Thêm sự kiện click cho liên kết đăng xuất
    logoutLink.addEventListener("click", function() {
        sessionStorage.setItem("loggedIn", "false");
        updateAuthLinks();
        window.location.href = '../pages/home.php';
    });

    // Thêm sự kiện click cho liên kết đăng nhập
    loginLink.addEventListener("click", function() {
        sessionStorage.setItem("loggedIn", "true");
        updateAuthLinks();
    });
});
