document.addEventListener("DOMContentLoaded", function() {
    const loginLink = document.getElementById("login");
    const logoutLink = document.getElementById("logout");

    // Hàm để cập nhật trạng thái hiển thị của liên kết đăng nhập và đăng xuất
    function updateAuthLinks() {
        const isLoggedIn = localStorage.getItem("loggedIn") === "true";
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
        localStorage.setItem("loggedIn", "false");
        updateAuthLinks();
        window.location.href = '../pages/home.php';
    });

    // Nếu có thể, thêm sự kiện cho liên kết đăng nhập (nếu có cần thiết)
    // loginLink.addEventListener("click", function() {
    //     localStorage.setItem("loggedIn", "true");
    //     updateAuthLinks();
    // });
});
