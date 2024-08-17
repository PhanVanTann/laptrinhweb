function changeImage(src) {
    console.log("Changing image to:", src); // Kiểm tra xem hàm có được gọi hay không
    document.getElementById('mainImage').src = src;
}

document.addEventListener('DOMContentLoaded', () => {
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const quantityInput = document.getElementById('quantity-input');

   

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
