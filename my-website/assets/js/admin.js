document.addEventListener("DOMContentLoaded", function() {
    // Lấy các phần tử
    const addCartegoryLink = document.getElementById('addCartegory');
    const listCartegoryLink = document.getElementById('listCartegory');
    const addProductLink = document.getElementById('addProduct');
    const listProductLink = document.getElementById('listProduct');
    
    const addCartegorySection = document.getElementById('addCartegorySection');
    const listCartegorySection = document.getElementById('listCartegorySection');
    const addProductSection = document.getElementById('addProductSection');
    const listProductSection = document.getElementById('listProductSection');

    // Hàm để ẩn tất cả các phần
    function hideAllSections() {
        addCartegorySection.style.display = 'none';
        listCartegorySection.style.display = 'none';
        addProductSection.style.display = 'none';
        listProductSection.style.display = 'none';
    }

    // Hiển thị phần "Thêm Loại Sản Phẩm"
    addCartegoryLink.addEventListener('click', function(event) {
        event.preventDefault();
        hideAllSections();
        addCartegorySection.style.display = 'block';
    });

    // Hiển thị phần "Danh Sách Loại Sản Phẩm"
    listCartegoryLink.addEventListener('click', function(event) {
        event.preventDefault();
        hideAllSections();
        listCartegorySection.style.display = 'block';
    });

    // Hiển thị phần "Thêm Sản Phẩm"
    addProductLink.addEventListener('click', function(event) {
        event.preventDefault();
        hideAllSections();
        addProductSection.style.display = 'block';
    });

    // Hiển thị phần "Danh Sách Sản Phẩm"
    listProductLink.addEventListener('click', function(event) {
        event.preventDefault();
        hideAllSections();
        listProductSection.style.display = 'block';
    });
});
