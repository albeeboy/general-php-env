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

  <nav>
    <ul class="menu-items">
      <li class="menu-item menu-item--1"><a href="/">Menu item 1</a></li>
      <li class="menu-item menu-item--2"><a href="/">Menu item 2</a></li>
      <li class="menu-item menu-item--3"><a href="/">Menu item 3</a></li>
      <li class="menu-item menu-item--4"><a href="/">Menu item 4</a></li>
      <li class="menu-item menu-item--5"><a href="/">Menu item 5</a></li>
      <li class="menu-item menu-item--6"><a href="/">Menu item 6</a></li>
    </ul>
  </nav>

  <section class="subnav-items-container subnav-1 closed">
    <div class="row">
      <div class="col">
        <h3>Menu item 1, what is going on?</h3>
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

  <section class="subnav-items-container subnav-2 closed">
    <div class="row">
      <div class="col">
        <h3>Menu item 2, I love you!</h3>
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

  <section class="hero-space">
    <h1>This is the hero space</h1>
    <p class="intro">Eveniet inventore voluptatem voluptates velit, laborum maxime beatae corporis aliquid perspiciatis et tenetur dolor numquam veniam, repudiandae animi. Voluptatum, dicta perspiciatis? Veniam.</p>
  </section>

</body>
<script>
  const subnavItemsContainers = document.querySelectorAll(".subnav-items-container");
  const menuItem1 = document.querySelector(".menu-item--1");
  let timeoutID;
  const subnavItemsContainersArray = [];

  for (let i = 1; i <= subnavItemsContainers.length; i++) {
    const sI = window["subnavItems" + i] = document.querySelector(".subnav-" + i);
    subnavItemsContainersArray.push(sI);
  }

  console.log("subnavItemsContainersArray", subnavItemsContainersArray);

  [...subnavItemsContainers].forEach((container) => {
    console.log("container.classList", container.classList);
  });

  menuItem1.addEventListener("mouseenter", evt => {
    subnavItems1.classList.add("open");
    subnavItems1.classList.remove("closed");
  }, false);

  menuItem1.addEventListener("mouseleave", evt => {
    subnavItems1.classList.add("init-close", "closed");
    subnavItems1.classList.remove("open");
    timeoutID = window.setTimeout(() => {
      subnavItems1.classList.remove("init-close");
    }, 300)
  }, false);

</script>
</html>
