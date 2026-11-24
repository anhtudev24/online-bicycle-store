
// XỬ LÝ TĂNG GIẢM SỐ LƯỢNG KHI THÊM VÀO GIỎ HÀNG - MUA HÀNG
function changeQty(delta) {
    const qtyInput = document.getElementById('qty');
    let qty = parseInt(qtyInput.value) || 1;
    qty += delta;
    if (qty < 1) qty = 1;
    qtyInput.value = qty;
  }
  
  // Xử lý click vào hình ảnh thu nhỏ thumbnail để đổi ảnh chính
  const thumbnails = document.querySelectorAll(".thumbnails img");
  const mainImage = document.querySelector(".main-image img");
  
  thumbnails.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      thumbnails.forEach(t => t.classList.remove("active"));
      thumb.classList.add("active");
      mainImage.src = thumb.src;
      mainImage.alt = thumb.alt || "Ảnh sản phẩm";
    });
  });
// XỬ LÝ CHUYỂN TAB (Mô tả sản phẩm - Chính sách đổi trả - Chính sách giao hàng)
function showTab(index) {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');
    tabs.forEach((tab, i) => {
      tab.classList.toggle('active', i === index);
      contents[i].classList.toggle('active', i === index);
    });
  }
// THAO TÁC PHẦN LỌC VÀ SẮP XẾP SẢN PHẨM 
document.addEventListener("DOMContentLoaded", function () {
    const products = Array.from(document.querySelectorAll(".product-card"));
    const container = document.querySelector(".product-grid");
    const checkboxes = document.querySelectorAll(".filter-sidebar input[type='checkbox']");
    const sortSelect = document.querySelector(".sort-dropdown select");
  
    // Tạo active filter container nếu chưa có
    let activeFilterContainer = document.querySelector(".active-filters");
    if (!activeFilterContainer) {
        activeFilterContainer = document.createElement("div");
        activeFilterContainer.className = "active-filters";
        activeFilterContainer.style.display = "none"; // Ẩn ban đầu
        container.parentNode.insertBefore(activeFilterContainer, container);
      }
      
  
    // Tạo thông báo không có sản phẩm nếu chưa có
    let noResultsMessage = document.querySelector(".no-results");
    if (!noResultsMessage) {
      noResultsMessage = document.createElement("div");
      noResultsMessage.className = "no-results";
      noResultsMessage.textContent = "Không có sản phẩm nào trong danh mục này.";
    }
  
    checkboxes.forEach(cb => {
      cb.addEventListener("change", filterAndSortProducts);
    });
  
    sortSelect.addEventListener("change", filterAndSortProducts);
  
    function filterAndSortProducts() {
      const selectedBrands = getCheckedValues("brand");
      const selectedColors = getCheckedValues("color");
      const selectedPrices = getCheckedValues("price");
      const selectedDelivery = getCheckedValues("delivery");
  
      let filtered = [...products].filter(product => {
        const brand = product.dataset.brand;
        const color = product.dataset.color;
        const price = parseInt(product.dataset.price);
        const deliveryData = (product.dataset.delivery || "")
                              .split(",")
                              .map(item => item.trim());
  
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(brand);
        const colorMatch = selectedColors.length === 0 || selectedColors.includes(color);
        const deliveryMatch = selectedDelivery.length === 0 || selectedDelivery.some(d => deliveryData.includes(d));
        const priceMatch = selectedPrices.length === 0 || selectedPrices.some(range => {
          if (range === "Giá dưới 5,000,000₫") return price < 5000000;
          if (range === "10,000,000₫ - 15,000,000₫") return price >= 10000000 && price <= 15000000;
          if (range === "15,000,000₫ - 20,000,000₫") return price > 15000000 && price <= 20000000;
          if (range === "Giá trên 20,000,000₫") return price > 20000000;
          return true;
        });
  
        return brandMatch && colorMatch && priceMatch && deliveryMatch;
      });
  
      const sortValue = sortSelect.value;
      filtered.sort((a, b) => {
        const nameA = a.querySelector(".product-title").textContent.trim().toLowerCase();
        const nameB = b.querySelector(".product-title").textContent.trim().toLowerCase();
        const priceA = parseInt(a.dataset.price);
        const priceB = parseInt(b.dataset.price);
  
        switch (sortValue) {
          case "Tên A - Z": return nameA.localeCompare(nameB);
          case "Tên Z - A": return nameB.localeCompare(nameA);
          case "Giá thấp - cao": return priceA - priceB;
          case "Giá cao - thấp": return priceB - priceA;
          default: return 0;
        }
      });
  
      updateActiveFilters([...selectedBrands, ...selectedColors, ...selectedPrices, ...selectedDelivery]);
  
      // Cập nhật danh mục lọc hiển thị
      container.innerHTML = "";
      if (filtered.length === 0) {
        container.appendChild(noResultsMessage);
      } else {
        filtered.forEach(p => container.appendChild(p));
      }
    }
  
    function getCheckedValues(type) {
      const group = document.querySelector(`.filter-group[data-type='${type}']`);
      if (!group) return [];
      return Array.from(group.querySelectorAll("input:checked")).map(cb => cb.value);
    }
  
    function updateActiveFilters(filters) {
        if (filters.length > 0) {
          activeFilterContainer.style.display = "block"; // Hiện khi có bộ lọc
          activeFilterContainer.innerHTML = "<strong>Đã chọn:</strong> " + filters.map(f => `<span>${f}</span>`).join(" ");
        } else {
          activeFilterContainer.style.display = "none"; // Ẩn khi không có bộ lọc nào
        }
      }
      
  
    filterAndSortProducts();
  });




