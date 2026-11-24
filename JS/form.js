// form.js

document.addEventListener('DOMContentLoaded', function () {
  const formWrapper = document.getElementById('connect-form');
  const openBtn1 = document.getElementById('open-form');
  const openBtn2 = document.getElementById('open-form-2');
  const closeBtn = document.getElementById('close-form');

  function openForm() {
    formWrapper.classList.remove('hidden');
  }

  function closeForm() {
    formWrapper.classList.add('hidden');
  }

  openBtn1.addEventListener('click', openForm);
  openBtn2.addEventListener('click', openForm);
  closeBtn.addEventListener('click', closeForm);
});
