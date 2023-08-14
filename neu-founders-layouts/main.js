(function () {
  const openHamburgerIcon = (evt) => {
    evt.stopImmediatePropagation();
    hamburgerMenuIcon.classList.add("x-config");
    hamburgerMenuButton.removeEventListener("click", openHamburgerIcon, false);
    hamburgerMenuButton.addEventListener("click", closeHamburgerIcon, false);
  };
  const closeHamburgerIcon = (evt) => {
    evt.stopImmediatePropagation();
    hamburgerMenuIcon.classList.remove("x-config");
    hamburgerMenuButton.removeEventListener("click", closeHamburgerIcon, false);
    hamburgerMenuButton.addEventListener("click", openHamburgerIcon, false);
  };

  const hamburgerMenuIcon = document.querySelector(".hamburger-menu--icon");
  const hamburgerMenuButton = document.querySelector(".hamburger-menu--button");

  hamburgerMenuButton.addEventListener("click", openHamburgerIcon, false);
})();
