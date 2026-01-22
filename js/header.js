const account = document.getElementById("account");
const account_ul = document.getElementById("account-ul");  
const mobile_side_bar = document.getElementById("mobile-side-bar")
const hamburger_menu = document.getElementById("hamburger_menu")

mobile_side_bar.addEventListener("click", (e) => {
    const list_items = mobile_side_bar.querySelectorAll('li')
    
    list_items.forEach(list_item => {
        list_item.classList.remove("active")
    });

    if (e.target.tagName === "LI") {
        e.target.classList.toggle("active");
    }
});

mobile_side_bar.addEventListener("click", (event) => {
    event.stopPropagation();
});

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
    mobile_side_bar.classList.toggle("active")
    event.stopPropagation();
}); 

document.body.addEventListener("click", () => {
    account_ul.classList.remove("active");
    mobile_side_bar.classList.remove("active")
    hamburger_menu.classList.remove("active")
});


hamburger_menu.addEventListener("click", () => {
    const list_items = mobile_side_bar.querySelectorAll('li')
    list_items.forEach(list_item => {
        list_item.classList.remove("active")
    });

    hamburger_menu.classList.toggle("active");
    mobile_side_bar.classList.toggle("active")
    event.stopPropagation();
});