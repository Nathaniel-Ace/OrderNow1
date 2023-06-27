document.addEventListener("DOMContentLoaded", function() {
    var minPriceInput = document.getElementById("min-price");
    var maxPriceInput = document.getElementById("max-price");
    var filterBtn = document.getElementById("filter-btn");
    var whiteCheckbox = document.getElementById("white-checkbox");
    var blackCheckbox = document.getElementById("black-checkbox");
    var redCheckbox = document.getElementById("red-checkbox");
    var woodenCheckbox = document.getElementById("wooden-checkbox");
    var greyCheckbox = document.getElementById("grey-checkbox");
    var searchInput = document.getElementById("search-input");
    var searchBtn = document.getElementById("search-btn");
    var productsContainer = document.getElementById("products-container");
    var products = Array.from(document.getElementsByClassName("product"));
  
    function filterProducts() {
      var minPrice = parseFloat(minPriceInput.value);
      var maxPrice = parseFloat(maxPriceInput.value);
      var isWhiteChecked = whiteCheckbox.checked;
      var isBlackChecked = blackCheckbox.checked;
      var isRedChecked = redCheckbox.checked;
      var isWoodenChecked = woodenCheckbox.checked;
      var isGreyChecked = greyCheckbox.checked;
  
      products.forEach(function(product) {
        var productName = product.querySelector("h2").textContent;
        var productPrice = product.querySelector(".product-price").textContent;
  
        productPrice = productPrice.replace(/[^0-9.]/g, "");
        var price = parseFloat(productPrice);
  
        var showProduct =
          (isNaN(minPrice) || price >= minPrice) &&
          (isNaN(maxPrice) || price <= maxPrice) &&
          (
            (!isWhiteChecked && !isBlackChecked && !isRedChecked && !isWoodenChecked && !isGreyChecked) ||
            (isWhiteChecked && productName.toLowerCase().includes("weiß")) ||
            (isBlackChecked && productName.toLowerCase().includes("schwarz")) ||
            (isRedChecked && productName.toLowerCase().includes("rot")) ||
            (isWoodenChecked && productName.toLowerCase().includes("holz")) ||
            (isGreyChecked && productName.toLowerCase().includes("grau"))
          );
  
        if (showProduct) {
          product.style.display = "block";
        } else {
          product.style.display = "none";
        }
      });
    }
  
    function searchProducts() {
      var searchQuery = searchInput.value.toLowerCase().trim();
  
      products.forEach(function(product) {
        var productName = product.querySelector("h2").textContent.toLowerCase();
  
        if (productName.includes(searchQuery)) {
          product.style.display = "block";
        } else {
          product.style.display = "none";
        }
      });
    }
  
    filterBtn.addEventListener("click", filterProducts);
    minPriceInput.addEventListener("input", filterProducts);
    maxPriceInput.addEventListener("input", filterProducts);
    whiteCheckbox.addEventListener("change", filterProducts);
    blackCheckbox.addEventListener("change", filterProducts);
    redCheckbox.addEventListener("change", filterProducts);
    woodenCheckbox.addEventListener("change", filterProducts);
    greyCheckbox.addEventListener("change", filterProducts);
    searchBtn.addEventListener("click", searchProducts);
  });
  