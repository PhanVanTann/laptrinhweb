document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();  // Ngăn chặn hành vi gửi form mặc định

        const email = document.forms["login"]["email"].value;
        const passwords = document.forms["login"]["passwords"].value;

        // Kiểm tra thông tin người dùng nhập vào
        if (!email || !/\S+@\S+\.\S+/.test(email)) {
            alert("Vui lòng nhập địa chỉ email hợp lệ");
            return false;
        }

        if (!passwords) {
            alert("Vui lòng nhập mật khẩu");
            return false;
        }

        // Gửi yêu cầu xác thực đến server
        fetch('../class/loginclass.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                email: email,
                passwords: passwords
            })
        })
        .then(response => response.text())
        .then(data => {
            console.log('Phản hồi từ server:', data); // Xem phản hồi từ server
            if (data.trim() === 'success') {
                localStorage.setItem("loggedIn", "true");  // Lưu trạng thái đăng nhập
                alert('Bạn đã đăng nhập thành công!');  // Hiển thị thông báo đăng nhập thành công
                window.location.href = '../pages/home.php';  // Chuyển hướng đến trang dashboard hoặc trang khác
            } else {
                alert(data); // Hiển thị thông báo lỗi từ server
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
            alert('Đã xảy ra lỗi. Vui lòng thử lại.');
        });
    });
});
