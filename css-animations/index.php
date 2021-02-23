<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS Animations</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <nav id="nav__desktop">
    <ul class="menu-items">
      <li class="menu-item menu-item--1"><a href="/"><span>Menu item 1</span></a></li>
      <li class="menu-item menu-item--2 current-menu-item"><a href="/"><span>Menu item 2</span></a></li>
      <li class="menu-item menu-item--3"><a href="/"><span>Menu item 3</span></a></li>
      <li class="menu-item menu-item--4"><a href="/"><span>Menu item 4</span></a></li>
      <li class="menu-item menu-item--5"><a href="/"><span>Menu item 5</span></a></li>
      <li class="menu-item menu-item--6"><a href="/"><span>Menu item 6</span></a></li>
    </ul>
    <div class="subnav-items__safety"></div>
  </nav>

  <div class="subnav-items__container">
    <section class="subnav-item subnav-item--1 closed">
      <div class="row">
        <div class="col">
          <h3>Subnav item 1, what is going on?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci non, ducimus nemo quasi illo incidunt culpa maiores inventore rem nesciunt! Molestias quia animi officia totam, nisi ipsa culpa. Commodi, cumque.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat commodi necessitatibus iusto exercitationem ab?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste porro libero totam accusamus velit! Molestias sit veritatis natus recusandae facere suscipit, consequatur repudiandae harum porro aut laudantium minima, doloribus nam?</p>
        </div>
        <div class="col">
          <h3>This is column 2</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nemo eius recusandae officia aspernatur a facilis, perferendis beatae earum totam? Corporis impedit dolorem repudiandae neque reiciendis necessitatibus adipisci, nostrum perferendis.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, corrupti tempora dolorum aliquam dolor mollitia consequuntur sit at animi. Reiciendis tempora ex in deleniti labore reprehenderit vitae, asperiores quibusdam aliquid!</p>
        </div>
      </div>
    </section>

    <section class="subnav-item subnav-item--2 closed">
      <div class="row">
        <div class="col">
          <h3>Subnav item 2, I love you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio mollitia repellendus aspernatur similique dolore iure esse dolorum explicabo magnam sed. Nisi saepe dolores tenetur eos illum! Atque accusantium quidem officiis!</p>
          <p>Tempora aliquam ratione ipsa quis corporis, esse commodi ullam provident accusamus odio fugit nobis accusantium veritatis harum impedit blanditiis cupiditate saepe reprehenderit!</p>
        </div>
        <div class="col">
          <h3>Column 2 is a useful column</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aliquid cumque fuga facere ducimus dolor animi maiores excepturi laboriosam? Consequuntur nihil cumque ullam ea? Sint atque esse quaerat vero possimus!</p>
        </div>
        <div class="col">
          <h3>Introducing column 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur eligendi quasi optio odio. Ad veniam facilis quae odit tempore porro nulla pariatur laboriosam? Provident, nostrum. Libero optio magnam at?</p>
          <p>Cumque, libero rerum voluptate consequuntur ut laboriosam unde? Illo ipsam deserunt, neque maiores, aliquid molestias eligendi libero non porro architecto repudiandae ullam!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum explicabo adipisci accusantium molestiae cupiditate similique fugiat blanditiis. Suscipit odio necessitatibus quas dolore repellendus harum perspiciatis molestias nostrum? Neque, enim illo!</p>
        </div>
      </div>
    </section>

    <section class="subnav-item subnav-item--3 closed">
      <div class="row">
        <div class="col">
          <h3>Subnav item 3, where have you been all my life?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci non, ducimus nemo quasi illo incidunt culpa maiores inventore rem nesciunt! Molestias quia animi officia totam, nisi ipsa culpa. Commodi, cumque.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat commodi necessitatibus iusto exercitationem ab?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste porro libero totam accusamus velit! Molestias sit veritatis natus recusandae facere suscipit, consequatur repudiandae harum porro aut laudantium minima, doloribus nam?</p>
        </div>
        <div class="col">
          <h3>Column 2 is groovy, man!</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nemo eius recusandae officia aspernatur a facilis, perferendis beatae earum totam? Corporis impedit dolorem repudiandae neque reiciendis necessitatibus adipisci, nostrum perferendis.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, corrupti tempora dolorum aliquam dolor mollitia consequuntur sit at animi. Reiciendis tempora ex in deleniti labore reprehenderit vitae, asperiores quibusdam aliquid!</p>
        </div>
      </div>
    </section>

    <section class="subnav-item subnav-item--4 closed">
      <div class="row">
        <div class="col">
          <h3>We adore subnav item 4!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio mollitia repellendus aspernatur similique dolore iure esse dolorum explicabo magnam sed. Nisi saepe dolores tenetur eos illum! Atque accusantium quidem officiis!</p>
          <p>Tempora aliquam ratione ipsa quis corporis, esse commodi ullam provident accusamus odio fugit nobis accusantium veritatis harum impedit blanditiis cupiditate saepe reprehenderit!</p>
        </div>
        <div class="col">
          <h3>Column 2, electric boogaloo</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aliquid cumque fuga facere ducimus dolor animi maiores excepturi laboriosam? Consequuntur nihil cumque ullam ea? Sint atque esse quaerat vero possimus!</p>
        </div>
        <div class="col">
          <h3>&ldquo;Good things come in threes,&rdquo; said column 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia consequatur eligendi quasi optio odio. Ad veniam facilis quae odit tempore porro nulla pariatur laboriosam? Provident, nostrum. Libero optio magnam at?</p>
          <p>Cumque, libero rerum voluptate consequuntur ut laboriosam unde? Illo ipsam deserunt, neque maiores, aliquid molestias eligendi libero non porro architecto repudiandae ullam!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum explicabo adipisci accusantium molestiae cupiditate similique fugiat blanditiis. Suscipit odio necessitatibus quas dolore repellendus harum perspiciatis molestias nostrum? Neque, enim illo!</p>
        </div>
      </div>
    </section>
  </div>

  <section class="hero-space">
    <h1>This is the hero space</h1>
    <p class="intro">Eveniet inventore voluptatem voluptates velit, laborum maxime beatae corporis aliquid perspiciatis et tenetur dolor numquam veniam, repudiandae animi. Voluptatum, dicta perspiciatis? Veniam.</p>
  </section>

</body>

<script>
  // NodeList polyfill for IE11 compatibility
  if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
  }
  // DOMTokenList polyfill for IE11 compatibility
  if (window.DOMTokenList && !DOMTokenList.prototype.forEach) {
    DOMTokenList.prototype.forEach = function (callback, thisArg) {
      thisArg = thisArg || window;
      for (var i = 0; i < this.length; i++) {
        callback.call(thisArg, this[i], i, this);
      }
    };
  }

  const openSubnavItem = (evt) => {
    evt.stopPropagation();
    const liP = evt.target.parentNode;
    console.log("evt.target.parentNode: " , liP);
    let targetID;
    for (let i = 0; i < liP.classList.length; i++) {
      if(liP.classList.item(i).indexOf("menu-item--") !== -1) {
        targetID = liP.classList.item(i).substring(11);
        break;
      }
    }
    console.log("targetID: " + targetID + "; Triggered openSubnavItem: *.menu-item a -> mouseenter*");

    const subnavItem = document.querySelector(".subnav-item--" + targetID);
    newSubnavItem = subnavItem;
    console.log("subnavItem: ", subnavItem);
    subnavItem.style.zIndex = subnavZindexMax;
    if(currentSubnavItem) {
      const stayCurrent = currentSubnavItem;
      currentSubnavItem.style.zIndex = subnavZindexMin;
      currentSubnavItem.classList.add("init-close", "closed");
      currentSubnavItem.classList.remove("open");
      window.setTimeout(() => {
        stayCurrent.classList.remove("init-close");
      }, 300);
    }
    subnavItem.classList.remove("closed");
    subnavItem.classList.add("open");
    currentSubnavItem = subnavItem;
    navBar.addEventListener("mouseenter", closeSubnavItem, false);

  }

  const closeSubnavItem = (evt) => {
    evt.stopPropagation();
    if(newSubnavItem) {
      console.log("Triggered closeSubnavItem: *navBar mouseover*");
      const stayNew = newSubnavItem;
      newSubnavItem.style.zIndex = subnavZindexMin;
      newSubnavItem.classList.add("init-close", "closed");
      newSubnavItem.classList.remove("open");
      window.setTimeout(() => {
        stayNew.classList.remove("init-close");
      }, 300);
      currentSubnavItem = null;
      newSubnavItem = null;
    }
  }

  const subnavItemsContainer = document.querySelector(".subnav-items__container");
  const subnavItems = document.querySelectorAll(".subnav-item");
  const menuItems = document.querySelectorAll(".menu-item a");
  const navBar = document.getElementById("nav__desktop");
  let timeoutID, currentSubnavItem, newSubnavItem;
  const subnavZindexMax = 999;
  const subnavZindexMin = subnavZindexMax - menuItems.length;

  menuItems.forEach((menuItem, index) => {
    menuItem.addEventListener("mouseenter", openSubnavItem, false);
    // menuItem.addEventListener("mouseleave", closeSubnavItem, false);
  });

  // navBar.addEventListener("mouseover", closeSubnavItem, false);
  
  subnavItems.forEach((subnavItem, index) => {
    const menuItem = menuItems[index];

    subnavItem.addEventListener("mouseeenter", evt => {
      // blergity blerg
    }, false);
  });

  /*
  menuItem.addEventListener("mouseleave", closeSubnavItemContainer, false);
  menuItem.addEventListener("mouseenter", (evt) => {
    newsubnavItem = subnavItem;
    newsubnavItem.style.zIndex = subnavZindexMax;
    if(currentSubnavItem) {
      currentSubnavItem.style.zIndex = subnavZindexMin;
    }
    subnavItem.classList.remove("closed");
    subnavItem.classList.add("open");
    currentSubnavItem = subnavItem
  }, false);
  menuItem.addEventListener("mouseleave", evt => {
    subnavItem.classList.add("init-close", "closed");
    subnavItem.classList.remove("open");
    window.setTimeout(() => {
      subnavItem.classList.remove("init-close");
    }, 300);
  }, false);
  */
</script>
</html>
