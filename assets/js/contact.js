const citySelect = document.getElementById('city');
const branchSelect = document.getElementById('branch');
const addressP = document.getElementById('branch-address');
const mapFrame = document.getElementById('map-frame');

const data = {
  hn: [
    {
      value: 'thanhxuan',
      label: 'Chi nhánh Thanh Xuân',
      address: 'Đường Nguyễn Trãi, Thanh Xuân, Hà Nội',
      mapSrc:
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2899328857297!2d105.7866935753107!3d20.98101198065639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acce612c766f%3A0xf1fff967689168e!2zxJDhuqFpIEjhu41jIEtp4bq_biBUcsO6YyAtIFRy4bqnbiBQaMO6IChIw6AgxJDDtG5nKQ!5e0!3m2!1svi!2s!4v1747505355825!5m2!1svi!2s',
    },
    {
      value: 'badinh',
      label: 'Chi nhánh Ba Đình',
      address: 'Láng Hạ, Đống Đa, Hà Nội',
      mapSrc:
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4827255589416!2d105.80537817531163!3d21.013362480632207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab63f9da4cad%3A0x75afdf3a27e5b68!2zMlI3NSs4NVcsIEzDoW5nIEjhuqEsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1747505097554!5m2!1svi!2s',
    },
  ],
  hcm: [
    {
      value: 'govap',
      label: 'Chi nhánh Gò Vấp',
      address: '150 Nguyễn Duy Cung, Gò Vấp, TP.HCM',
      mapSrc:
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.631720592203!2d106.63982437510106!3d10.839469889313106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175299cc282f5d9%3A0x7a1a1342b1de2f3f!2zMTUwIE5ndXnhu4VuIER1eSBDdW5nLCBQaMaw4budbmcgMTIsIEfDsiBW4bqlcCwgSOG7kyBDaMOtIE1pbmggNzI3MDEwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1747505384351!5m2!1svi!2s',
    },
    {
      value: 'phunhuan',
      label: 'Chi nhánh Phú Nhuận',
      address: '123b Đ. Phan Đăng Lưu, Phú Nhuận, TP.HCM',
      mapSrc:
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2216184393787!2d106.68050507510043!3d10.794331189355525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d3ed06e993%3A0x6c44bf232ad946f!2zMTIzYiDEkC4gUGhhbiDEkMOsbmggUGjDuW5nLCBQaMaw4budbmcgMTUsIFBow7ogTmh14bqtbiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1747505426666!5m2!1svi!2s',
    },
  ],
};

// Hàm cập nhật danh sách chi nhánh theo tỉnh thành
function updateBranches() {
  const city = citySelect.value;
  const branches = data[city] || [];

  // Xóa các option cũ
  branchSelect.innerHTML = '';

  // Thêm option mới
  branches.forEach((branch, index) => {
    const option = document.createElement('option');
    option.value = branch.value;
    option.textContent = branch.label;
    branchSelect.appendChild(option);
  });

  // Chọn chi nhánh đầu tiên nếu có
  if (branches.length > 0) {
    branchSelect.value = branches[0].value;
    updateAddressAndMap();
  } else {
    addressP.textContent = 'Vui lòng chọn cửa hàng';
    mapFrame.src = '';
  }
}

// Hàm cập nhật địa chỉ và map khi chọn chi nhánh
function updateAddressAndMap() {
  const city = citySelect.value;
  const branchValue = branchSelect.value;
  const branches = data[city] || [];
  const branch = branches.find((b) => b.value === branchValue);

  if (branch) {
    addressP.textContent = branch.address;
    mapFrame.src = branch.mapSrc;
  } else {
    addressP.textContent = 'Vui lòng chọn cửa hàng';
    mapFrame.src = '';
  }
}

// Event listeners
citySelect.addEventListener('change', () => {
  updateBranches();
});

branchSelect.addEventListener('change', () => {
  updateAddressAndMap();
});

// Khởi tạo
updateBranches();
