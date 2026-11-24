document.addEventListener("DOMContentLoaded", function () {
  const cartTop = document.getElementById("cartTop");
  const steps = document.querySelectorAll(".cart-step");
  const btnStep1 = document.getElementById("btn-to-step-1");
  const btnStep2 = document.getElementById("btn-to-step-2");
  const btnStep3 = document.getElementById("btn-to-step-3");

  function setActiveStep(stepNum) {
    // Cập nhật class step trên cart-top container
    cartTop.classList.remove("step-1", "step-2", "step-3");
    cartTop.classList.add(`step-${stepNum}`);

    // Cập nhật class active cho từng cart-step
    steps.forEach((step) => {
      step.classList.remove("active");
      if (step.classList.contains(`step-${stepNum}`)) {
        step.classList.add("active");
      }
    });
  }

  // Các nút chuyển bước
  btnStep1.addEventListener("click", () => setActiveStep(1));
  btnStep2.addEventListener("click", () => setActiveStep(2));
  btnStep3.addEventListener("click", () => setActiveStep(3));
});
