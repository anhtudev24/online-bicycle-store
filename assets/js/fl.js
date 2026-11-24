window.onload = function () {
  function startCountdown(durationInSeconds) {
    let time = durationInSeconds;

    const update = () => {
      const hours = Math.floor(time / 3600);
      const minutes = Math.floor((time % 3600) / 60);
      const seconds = time % 60;

      document.getElementById("h").textContent = String(hours).padStart(2, '0');
      document.getElementById("m").textContent = String(minutes).padStart(2, '0');
      document.getElementById("s").textContent = String(seconds).padStart(2, '0');

      if (time > 0) {
        time--;
      }
    };

    update(); // update lần đầu ngay lập tức
    setInterval(update, 1000);
  }

  // Ví dụ: 18 giờ = 64800 giây
  startCountdown(64800);
};