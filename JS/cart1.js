function formatCurrency(num) {
  return num.toLocaleString('vi-VN') + '₫';
}

function renderCart() {
  const cartBody = document.getElementById("cartBody");
  const totalItemsElem = document.getElementById("totalItems");
  const cartSubtotalElem = document.getElementById("cartSubtotal");
  const cartTotalElem = document.getElementById("cartTotal");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  if (!Array.isArray(cart)) cart = [];

  if (cart.length === 0) {
    cartBody.innerHTML = `<tr><td colspan="4" style="text-align:center;">Giỏ hàng đang trống</td></tr>`;
    totalItemsElem.textContent = "0";
    cartSubtotalElem.textContent = "0₫";
    cartTotalElem.textContent = "0₫";
    updateCartCount(0); // cập nhật badge khi giỏ rỗng
    return;
  }

  let totalItems = 0;
  let totalMoney = 0;

  cartBody.innerHTML = cart.map(item => {
    const itemTotal = item.qty * item.price;
    totalItems += item.qty;
    totalMoney += itemTotal;

    return `
      <tr>
        <td><img src="${item.image}" style="width: 80px;" alt="${item.title}"></td>
        <td>${item.title}</td>
        <td>
          <input type="number" value="${item.qty}" min="0" data-id="${item.id}" class="qty-input">
        </td>
        <td>${formatCurrency(itemTotal)}</td>
      </tr>
    `;
  }).join("");

  totalItemsElem.textContent = totalItems;
  cartSubtotalElem.textContent = formatCurrency(totalMoney);
  cartTotalElem.textContent = formatCurrency(totalMoney);

  updateCartCount(totalItems); // cập nhật badge số lượng

  // Sự kiện thay đổi số lượng
  document.querySelectorAll(".qty-input").forEach(input => {
    input.addEventListener("change", function () {
      let newQty = parseInt(this.value);
      const id = this.dataset.id;

      if (isNaN(newQty) || newQty < 0) {
        newQty = 1;
        this.value = newQty;
      }

      const index = cart.findIndex(item => item.id === id);
      if (index !== -1) {
        if (newQty === 0) {
          const confirmDelete = confirm("Bạn có muốn xóa sản phẩm này khỏi giỏ hàng?");
          if (confirmDelete) {
            cart.splice(index, 1);
          } else {
            this.value = cart[index].qty;
            return;
          }
        } else {
          cart[index].qty = newQty;
        }
      }

      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart(); // cập nhật lại toàn bộ
    });
  });
}

function updateCartCount(count) {
  const cartBadge = document.getElementById("cartCount");
  if (count > 0) {
    cartBadge.textContent = count;
    cartBadge.style.display = "inline-block";
  } else {
    cartBadge.style.display = "none";
  }
}

// Hàm thêm sản phẩm vào giỏ hàng, cập nhật localStorage, cập nhật giao diện và badge
function addToCart(newItem) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  if (!Array.isArray(cart)) cart = [];

  // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
  const index = cart.findIndex(item => item.id === newItem.id);
  if (index !== -1) {
    // Nếu đã có, tăng số lượng
    cart[index].qty += newItem.qty || 1;
  } else {
    // Nếu chưa có, thêm sản phẩm mới
    cart.push({
      ...newItem,
      qty: newItem.qty || 1
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

document.addEventListener("DOMContentLoaded", renderCart);

function updateCartCount() {
  const cartBadge = document.getElementById("cartCount");
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  if (!Array.isArray(cart)) cart = [];

  const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);

  if (totalItems > 0) {
    cartBadge.textContent = totalItems;
    cartBadge.style.display = "inline-block";
  } else {
    cartBadge.style.display = "none";
  }
}
document.addEventListener("DOMContentLoaded", () => {
  updateCartCount();
});
function addToCart(newItem) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  if (!Array.isArray(cart)) cart = [];

  const index = cart.findIndex(item => item.id === newItem.id);
  if (index !== -1) {
    cart[index].qty += newItem.qty || 1;
  } else {
    cart.push({ ...newItem, qty: newItem.qty || 1 });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartCount();
}
