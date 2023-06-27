document.addEventListener("DOMContentLoaded", function() {
  const cartProductElement = document.getElementById("cart-products");
  const cartPriceElement = document.getElementById("cart-price");

  function updateCartDisplay() {
    const cartProduct = localStorage.getItem("cartProduct");
    const cartPrice = localStorage.getItem("cartPrice");

    if (cartProduct && cartPrice) {
      const productNames = cartProduct.split(", ");
      const totalPrice = parseFloat(cartPrice);

      // Clear the cart display
      cartProductElement.innerHTML = "";

      // Display the cart items
      productNames.forEach(function(productName) {
        const productItem = document.createElement("li");
        productItem.textContent = productName;
        cartProductElement.appendChild(productItem);
      });

      // Display the total price
      cartPriceElement.textContent = "$" + totalPrice.toFixed(2);
    } else {
      // Display a message when the cart is empty
      const emptyCartMessage = document.createElement("p");
      emptyCartMessage.textContent = "Your cart is empty.";
      cartProductElement.appendChild(emptyCartMessage);
      cartPriceElement.textContent = "$0.00";
    }
  }

  // Initial cart display
  updateCartDisplay();

  // Listen for delete button clicks
  const deleteButton = document.getElementById("delete-button");
  deleteButton.addEventListener("click", function() {
    // Remove cart products from local storage
    localStorage.removeItem("cartProduct");
    localStorage.removeItem("cartPrice");

    // Clear the cart display
    updateCartDisplay();
  });
});
