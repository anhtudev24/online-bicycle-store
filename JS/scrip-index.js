  document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.faq-question').forEach((question) => {
    question.addEventListener('click', () => {
      const item = question.parentElement;
      const isActive = item.classList.contains('active');

      if (isActive) {
        // Đóng nếu đang mở
        item.classList.remove('active');
        item.querySelector('.toggle-btn').textContent = '+';
      } else {
        // Mở nếu đang đóng
        item.classList.add('active');
        item.querySelector('.toggle-btn').textContent = '−';
      }
    });
  });
});