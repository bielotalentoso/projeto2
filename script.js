const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    alert("Serviço selecionado!");
  });
});

const logo = document.querySelector(".logo");

logo.addEventListener("mouseover", () => {
  logo.style.color = "white";
});

logo.addEventListener("mouseout", () => {
  logo.style.color = "#00ff99";
});

const links = document.querySelectorAll("nav a");

links.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    const id = this.getAttribute("href");

    const secao = document.querySelector(id);

    secao.scrollIntoView({
      behavior: "smooth",
    });
  });
});
