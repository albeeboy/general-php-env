(function () {
  
  const cookieBanner = document.querySelector(".cookie-banner");
  const cookieBtn = document.querySelector(".cookie-banner .opt-in-button");

  const optIn = (evt) => {
    cookieBanner.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", true);
  }

  cookieBtn.addEventListener("click", optIn, false);

  setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
      cookieBanner.classList.add("active");
    }
  }, 2000);

}());
