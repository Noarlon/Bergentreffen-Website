// Countdown
const countDownDate = new Date("May 29, 2025 19:00:00").getTime();

const countdownFunction = setInterval(() => {
    const now = new Date().getTime();

    const distance = countDownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    const formatNumber = num => num < 10 ? `0${num}` : num;

    document.getElementById("countdown").innerHTML = `<h1>🕙 Noch <b>
        ${formatNumber(days)}d : ${formatNumber(hours)}h : ${formatNumber(minutes)}min : ${formatNumber(seconds)}s
    </b> ...</h1>`;

    if (distance < 0) {
        clearInterval(countdownFunction);
        document.getElementById("countdown").innerHTML = "<h1>🕙 Noch <b>00d : 00h : 00min : 00s</b> ...</h1>";
    }
}, 1000);



document.addEventListener("DOMContentLoaded", function() {
  // Smooth Scroll Animation for Navigation Bar
  var navigation = document.getElementById("top-bar");
  if (navigation) {
      navigation.addEventListener("click", function(event) {
        // Überprüfen, ob der geklickte Link innerhalb der Navigationsleiste liegt
        if (event.target.tagName === "A"  && !event.target.classList.contains("online-banking")) {
          event.preventDefault();
  
          var targetId = event.target.getAttribute("href").substring(1);
          var targetElement = document.getElementById(targetId);
  
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: "smooth"
            });
          }
        }
      }
      );
  } 
});