// Thay đổi số lượng trong trang sản phẩm
function changeQty(amount) {
  const qtyInput = document.getElementById("qty");
  let current = parseInt(qtyInput.value) || 1;
  current += amount;
  if (current < 1) current = 1;
  qtyInput.value = current;
}

// Cập nhật số lượng trên badge giỏ hàng
function updateCartCountFromStorage() {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
  const cartBadge = document.getElementById("cartCount");
  if (cartBadge) {
    if (totalItems > 0) {
      cartBadge.textContent = totalItems;
      cartBadge.style.display = "inline-block";
    } else {
      cartBadge.style.display = "none";
    }
  }
}

// Thêm sản phẩm vào giỏ hàng
function setupAddToCart() {
  const addToCartBtn = document.getElementById("addToCartBtn");
  if (!addToCartBtn) return;

  addToCartBtn.addEventListener("click", () => {
    const qty = parseInt(document.getElementById("qty").value) || 1;
    if (qty < 1) {
      alert("Số lượng phải lớn hơn 0");
      return;
    }

    const product = document.getElementById("productInfo");
    const cartItem = {
      id: product.dataset.id,
      title: product.dataset.title,
      brand: product.dataset.brand,
      price: Number(product.dataset.price),
      oldPrice: Number(product.dataset.oldPrice),
      discount: Number(product.dataset.discount),
      image: product.dataset.image,
      qty: qty
    };

    let cart = [];
    try {
      cart = JSON.parse(localStorage.getItem("cart")) || [];
      if (!Array.isArray(cart)) cart = [];
    } catch {
      cart = [];
    }

    const existing = cart.find(item => item.id === cartItem.id);
    if (existing) {
      existing.qty += cartItem.qty;
    } else {
      cart.push(cartItem);
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    
    // ✅ Gọi cập nhật số lượng giỏ hàng ngay
    updateCartCountFromStorage();

    // ✅ Thông báo sau cùng
    alert(`Đã thêm ${cartItem.qty} sản phẩm vào giỏ hàng!`);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  setupAddToCart();
  updateCartCountFromStorage(); // Khởi tạo badge đúng ngay khi tải trang
});

window.addEventListener("beforeunload", function (event) {
  const activeElement = document.activeElement;

  // Nếu phần tử được tương tác là liên kết (thẻ <a>)
  if (activeElement?.tagName === "A") {
    const nextURL = activeElement.href || "";
    const sameSite = nextURL.startsWith(location.origin);

    // Nếu là liên kết ra ngoài trang → xóa giỏ hàng
    if (!sameSite) {
      localStorage.removeItem("cart");
    }
  }
  // Nếu không phải là thẻ <a> → không làm gì (nút, reload, đóng tab, internal SPA transition,...)
});

