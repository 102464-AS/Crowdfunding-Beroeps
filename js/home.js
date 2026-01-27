const nav_items = document.querySelectorAll(".nav-item");

function nav_bar_click(item) {
  for (const item of nav_items) {
    item.classList.remove("active");
  }

  item.classList.add("active");
}

for (const item of nav_items) {
  item.addEventListener("click", () => {
    nav_bar_click(item);
  });
}

document
  .getElementById("newsletterForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(this);
    const name = formData.get("name");

    const messageDiv = document.getElementById("formMessage");
    messageDiv.style.display = "block";
    messageDiv.style.color = "rgb(26, 26, 26)";
    messageDiv.innerHTML = `Bedankt, ${name}! Je bent nu aangemeld.`;

    this.reset();
  });
