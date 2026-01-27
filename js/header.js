const account = document.getElementById("account");
const account_ul = document.getElementById("account-ul");
const mobile_side_bar = document.getElementById("mobile-side-bar");
const hamburger_menu = document.getElementById("hamburger_menu");

if (account && account_ul) {
  account.addEventListener("click", (event) => {
    account_ul.classList.toggle("active");
    event.stopPropagation();
  });

  account_ul.querySelectorAll("li").forEach((li) => {
    li.addEventListener("click", () => {
      account_ul.classList.remove("active");
    });
  });

  account_ul.addEventListener("click", (event) => {
    event.stopPropagation();
  });
}

if (mobile_side_bar) {
  mobile_side_bar.addEventListener("click", (e) => {
    const li = e.target.closest("li");
    if (li) {
      mobile_side_bar
        .querySelectorAll("li")
        .forEach((item) => item.classList.remove("active"));
      li.classList.add("active");
    }
    e.stopPropagation();
  });
}

if (hamburger_menu && mobile_side_bar) {
  hamburger_menu.addEventListener("click", (event) => {
    mobile_side_bar
      .querySelectorAll("li")
      .forEach((item) => item.classList.remove("active"));
    hamburger_menu.classList.toggle("active");
    mobile_side_bar.classList.toggle("active");
    event.stopPropagation();
  });
}

document.addEventListener("click", () => {
  if (account_ul) account_ul.classList.remove("active");
  if (mobile_side_bar) mobile_side_bar.classList.remove("active");
  if (hamburger_menu) hamburger_menu.classList.remove("active");
});

function navigateToPage(url) {
  window.location.href = url;
}
