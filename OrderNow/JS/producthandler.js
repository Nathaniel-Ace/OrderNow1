document.addEventListener("DOMContentLoaded", function() {
  const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

  addToCartButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      const productName = button.dataset.product;
      const productPrice = parseFloat(button.dataset.price);

      addToCart(productName, productPrice);
    });
  });

  function addToCart(productName, productPrice) {
    const cartProduct = localStorage.getItem("cartProduct");
    const cartPrice = localStorage.getItem("cartPrice");

    if (cartProduct && cartPrice) {
      // If the cart already exists, update the existing cart
      const updatedCartProduct = cartProduct + ", " + productName;
      const updatedCartPrice = parseFloat(cartPrice) + productPrice;

      localStorage.setItem("cartProduct", updatedCartProduct);
      localStorage.setItem("cartPrice", updatedCartPrice.toFixed(2));
    } else {
      // If the cart doesn't exist, create a new cart
      localStorage.setItem("cartProduct", productName);
      localStorage.setItem("cartPrice", productPrice.toFixed(2));
    }

   //window.location.href = "shoppingcart.html";
  }
});

