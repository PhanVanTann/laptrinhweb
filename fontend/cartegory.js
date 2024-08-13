document.addEventListener('DOMContentLoaded', () => {
    const productsPerPage = 20;
    const productList = document.querySelector('.cartegory_right_center');
    const pagination = document.getElementById('pagination');
    const products = Array.from(productList.querySelectorAll('.product-item'));

    function renderProducts(page) {
        const start = (page - 1) * productsPerPage;
        const end = start + productsPerPage;
        
        products.forEach((product, index) => {
            if (index >= start && index < end) {
                product.style.display = 'block'; // Hiển thị sản phẩm
            } else {
                product.style.display = 'none'; // Ẩn sản phẩm
            }
        });
    }

    function renderPagination() {
        pagination.innerHTML = '';
        const pageCount = Math.ceil(products.length / productsPerPage);

        for (let i = 1; i <= pageCount; i++) {
            const pageLink = document.createElement('a');
            pageLink.href = '#';
            pageLink.textContent = i;
            pageLink.addEventListener('click', (e) => {
                e.preventDefault();
                renderProducts(i);
                updateActivePage(i);
            });
            pagination.appendChild(pageLink);
        }
    }

    function updateActivePage(activePage) {
        const links = pagination.getElementsByTagName('a');
        Array.from(links).forEach((link, index) => {
            if (index + 1 === activePage) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    renderProducts(1);
    renderPagination();
});
