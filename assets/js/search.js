document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");

  searchInput.addEventListener("input", function () {
    const keyword = this.value.toLowerCase().trim();

    const products = document.querySelectorAll(".product-card");

    products.forEach((product) => {
      const title = product.querySelector(".product-title").textContent.toLowerCase();
      const brand = product.getAttribute("data-brand")?.toLowerCase() || "";
      const color = product.getAttribute("data-color")?.toLowerCase() || "";

      if (title.includes(keyword) || brand.includes(keyword) || color.includes(keyword)) {
        product.style.display = "block";
      } else {
        product.style.display = "none";
      }
    });
  });
});
