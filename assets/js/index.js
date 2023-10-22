

const menuWithSubmenuItems = document.querySelectorAll(".menuwithsubmenu");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menulink");

console.log(menuWithSubmenuItems);
console.log(backMenuIcon);

menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.target.nextElementSibling.classList.add("active");
        e.target.nextElementSibling.classList.remove("displayNone");
        menulink.forEach((link) => {
            link.classList.add("displayNone");
        }
        );
    });
});


