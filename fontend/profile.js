document.addEventListener('DOMContentLoaded', function () {
    let changePasswordButton = document.getElementById('changePasswordButton');
    let modal = document.getElementById('changePasswordModal');
    let span = document.getElementsByClassName('close')[0];

    // Hiển thị modal khi nhấp vào nút
    changePasswordButton.onclick = function () {
        modal.style.display = 'block';
    }

    // Đóng modal khi nhấp vào dấu X
    span.onclick = function () {
        modal.style.display = 'none';
    }

    // Đóng modal khi nhấp ra ngoài modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }


});

document.addEventListener("DOMContentLoaded", function() {
    var editButton = document.getElementById("editButton");
    var saveButton = document.getElementById("saveButton");

    // Sự kiện khi nhấn nút "Sửa"
    editButton.addEventListener("click", function() {
        // Bỏ readonly cho các trường input và hiện nút lưu
        var inputs = document.querySelectorAll(".form_profile input");
        inputs.forEach(function(input) {
            input.removeAttribute("readonly");
            input.style.backgroundColor = "#fff"; // Đặt màu nền cho trường chỉnh sửa
        });
        editButton.style.display = "none";
        saveButton.style.display = "block";
    });

    // Sự kiện khi nhấn nút "Lưu"
    saveButton.addEventListener("click", function() {
        // Thực hiện lưu thông tin và quay lại chế độ readonly
        var inputs = document.querySelectorAll(".form_profile input");
        inputs.forEach(function(input) {
            input.setAttribute("readonly", true);
            input.style.backgroundColor = "#f0f0f0"; // Đặt màu nền cho trường không chỉnh sửa
        });
        editButton.style.display = "block";
        saveButton.style.display = "none";
    });
});








