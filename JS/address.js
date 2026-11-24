const districtData = {
  hanoi: [
    { value: "caugiay", text: "Cầu Giấy" },
    { value: "dongda", text: "Đống Đa" },
    { value: "thanhxuan", text: "Thanh Xuân" },
    { value: "hoankiem", text: "Hoàn Kiếm" }
  ],
  hcm: [
    { value: "q1", text: "Quận 1" },
    { value: "q3", text: "Quận 3" },
    { value: "binhtan", text: "Bình Tân" },
    { value: "thuduc", text: "Thủ Đức" }
  ],
  danang: [
    { value: "haichau", text: "Hải Châu" },
    { value: "thanhkhe", text: "Thanh Khê" },
    { value: "sontra", text: "Sơn Trà" },
    { value: "nguhaan", text: "Ngũ Hành Sơn" }
  ],
  cantho: [
    { value: "ninhkieu", text: "Ninh Kiều" },
    { value: "binhthuy", text: "Bình Thủy" },
    { value: "cairang", text: "Cái Răng" }
  ],
  haiphong: [
    { value: "ngoquyen", text: "Ngô Quyền" },
    { value: "hongbang", text: "Hồng Bàng" },
    { value: "lechan", text: "Lê Chân" }
  ],
  hue: [
    { value: "huethanhpho", text: "TP Huế" },
    { value: "phuvang", text: "Phú Vang" },
    { value: "quangdien", text: "Quảng Điền" }
  ]
};

const provinceSelect = document.getElementById("province");
const districtSelect = document.getElementById("district");

provinceSelect.addEventListener("change", function () {
  const selectedProvince = this.value;
  const districts = districtData[selectedProvince] || [];

  districtSelect.innerHTML = '<option value="">Chọn quận/huyện</option>';

  districts.forEach(district => {
    const option = document.createElement("option");
    option.value = district.value;
    option.textContent = district.text;
    districtSelect.appendChild(option);
  });
});
