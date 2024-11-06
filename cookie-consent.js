document.addEventListener("DOMContentLoaded", function () {
  const cookieBanner = document.getElementById("cookie-banner");
  const acceptAllButton = document.getElementById("accept-all-cookies");
  const acceptNecessaryButton = document.getElementById(
    "accept-necessary-cookies"
  );
  const rejectAllButton = document.getElementById("reject-all-cookies");

  function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      const date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(";");
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  function hideBanner() {
    cookieBanner.style.display = "none";
  }

  if (!getCookie("cookieConsent")) {
    cookieBanner.style.display = "block";
  }

  acceptAllButton.addEventListener("click", function () {
    setCookie("cookieConsent", "all", 365);
    hideBanner();
    // Ici, vous pouvez ajouter le code pour activer tous les cookies
  });

  acceptNecessaryButton.addEventListener("click", function () {
    setCookie("cookieConsent", "necessary", 365);
    hideBanner();
    // Ici, vous pouvez ajouter le code pour activer uniquement les cookies nécessaires
  });

  rejectAllButton.addEventListener("click", function () {
    setCookie("cookieConsent", "none", 365);
    hideBanner();
    // Ici, vous pouvez ajouter le code pour désactiver tous les cookies non essentiels
  });
});
