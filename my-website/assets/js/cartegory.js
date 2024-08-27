document.addEventListener('DOMContentLoaded', () => {
    const productsPerPage = 20;
    const productList = document.querySelector('.cartegory_right_center');
    const pagination = document.getElementById('pagination');

    if (!productList) {
        console.error('Phần tử với class "cartegory_right_center" không tìm thấy.');
        return;
    }

    if (!pagination) {
        console.error('Phần tử với ID "pagination" không tìm thấy.');
        return;
    }

    const products = Array.from(productList.querySelectorAll('.product-item'));

    function renderProducts(page) {
        const start = (page - 1) * productsPerPage;
        const end = start + productsPerPage;
        
        if (products.length === 0) {
            productList.innerHTML = '<p>Không có sản phẩm nào.</p>';
            return;
        }

        products.forEach((product, index) => {
            if (index >= start && index < end) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    function renderPagination() {
        pagination.innerHTML = '';
        const pageCount = Math.ceil(products.length / productsPerPage);

        if (pageCount > 1) {
            const prevPageLink = document.createElement('a');
            prevPageLink.href = '#';
            prevPageLink.textContent = '«';
            prevPageLink.classList.add('pagination-link');
            prevPageLink.addEventListener('click', (e) => {
                e.preventDefault();
                const currentPage = getCurrentPage();
                if (currentPage > 1) {
                    renderProducts(currentPage - 1);
                    updateActivePage(currentPage - 1);
                }
            });
            pagination.appendChild(prevPageLink);
        }

        for (let i = 1; i <= pageCount; i++) {
            const pageLink = document.createElement('a');
            pageLink.href = '#';
            pageLink.textContent = i;
            pageLink.classList.add('pagination-link');
            pageLink.addEventListener('click', (e) => {
                e.preventDefault();
                renderProducts(i);
                updateActivePage(i);
            });
            pagination.appendChild(pageLink);
        }

        if (pageCount > 1) {
            const nextPageLink = document.createElement('a');
            nextPageLink.href = '#';
            nextPageLink.textContent = '»';
            nextPageLink.classList.add('pagination-link');
            nextPageLink.addEventListener('click', (e) => {
                e.preventDefault();
                const currentPage = getCurrentPage();
                if (currentPage < pageCount) {
                    renderProducts(currentPage + 1);
                    updateActivePage(currentPage + 1);
                }
            });
            pagination.appendChild(nextPageLink);
        }
    }

    function updateActivePage(activePage) {
        const links = pagination.getElementsByTagName('a');
        Array.from(links).forEach((link, index) => {
            if (index === 0 || index === links.length - 1 || (index + 1) === activePage) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    function getCurrentPage() {
        const links = pagination.getElementsByTagName('a');
        for (let i = 0; i < links.length; i++) {
            if (links[i].classList.contains('active')) {
                return i + 1;
            }
        }
        return 1; // Mặc định trả về trang 1 nếu không tìm thấy trang hiện tại
    }

    renderProducts(1);
    renderPagination();
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('input[type="checkbox"][data-url]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const url = new URL(window.location.href);
            const param = this.getAttribute('data-param'); // Sử dụng data-param để phân biệt giữa trademark và cartegory_id

            if (this.checked) {
                url.searchParams.set(param, this.value);
            } else {
                url.searchParams.delete(param);
            }

            // Cập nhật URL mà không tải lại trang
            window.history.pushState({}, '', url);
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Xử lý thay đổi trạng thái của checkbox
    document.querySelectorAll('input[type="checkbox"][data-param]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const param = this.getAttribute('data-param'); // Tham số lọc như 'category_id' hoặc 'trademark'
            const value = this.getAttribute('data-value'); // Giá trị của tham số
            const url = new URL(window.location.href);

            if (this.checked) {
                url.searchParams.set(param, value);
            } else {
                url.searchParams.delete(param);
            }

            // Cập nhật URL và tải lại trang
            window.location.href = url.toString();
        });
    });
});

