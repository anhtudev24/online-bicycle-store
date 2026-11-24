const products = [
    { name: 'Xe đạp đường trường Allez 2021', brand: 'EGA BIKE', price: 15990000, oldPrice: 24580000, sold: 192, stock: 300 },
    { name: 'Xe Đạp Đường Trường CF 1 Đĩa 2021', brand: 'EGA BIKE', price: 38900000, oldPrice: 38900000, sold: 30, stock: 100 },
    { name: 'Xe đạp đường trường dành cho nữ Ruby 2024', brand: 'EGA BIKE', price: 19590000, oldPrice: 22500000, sold: 144, stock: 200 },
    { name: 'Xe đạp đường trường Domane AL 5 đĩa', brand: 'KHÁC', price: 32590000, oldPrice: 44990000, sold: 100, stock: 100 }
];

function renderProducts() {
    const root = document.getElementById('root');
    root.innerHTML = `
        <div class="container">
            <div class="header">
                <h2>HAPPY SUMMER - GIẢM ĐẾN 50%</h2>
            </div>
            <div class="product-grid">
                ${products.map(product => `
                    <div class="card">
                        <h4>${product.brand}</h4>
                        <h3>${product.name}</h3>
                        <p class="price">${product.price.toLocaleString()}₫</p>
                        <p class="old-price">${product.oldPrice.toLocaleString()}₫</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: ${(product.sold / product.stock) * 100}%"></div>
                        </div>
                    </div>
                `).join('')}
            </div>
            <a href="#" class="view-all">XEM TẤT CẢ</a>
        </div>
    `;
}

renderProducts();