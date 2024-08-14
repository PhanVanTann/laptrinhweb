function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

document.addEventListener('DOMContentLoaded', () => {
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const quantityInput = document.getElementById('quantity-input');

    // Kiểm tra xem phần tử có tồn tại không
    if (!quantityInput || !decreaseBtn || !increaseBtn) {
        console.error('Một hoặc nhiều phần tử không tồn tại.');
        return;
    }

    let quantity = parseInt(quantityInput.value);

    decreaseBtn.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
        }
    });

    increaseBtn.addEventListener('click', () => {
        quantity++;
        quantityInput.value = quantity;
    });
});
