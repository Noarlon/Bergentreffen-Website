document.addEventListener("DOMContentLoaded", function() {
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
      });
    }
  });
  