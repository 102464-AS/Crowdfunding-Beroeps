const nav_items = document.querySelectorAll(".nav-item")

function nav_bar_click(item){
    for (const item of nav_items){
        item.classList.remove("active")   
    }

    item.classList.add("active")
}



for (const item of nav_items) {
    item.addEventListener('click', () => {
        nav_bar_click(item)
    });
}
