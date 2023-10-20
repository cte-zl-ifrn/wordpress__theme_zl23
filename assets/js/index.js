

const menuWithSubmenuItems = document.querySelectorAll(".menuwithsubmenu");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menulink");


console.log(menuWithSubmenuItems);
console.log(backMenuIcon);
console.log(menulink);

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

function backToMainMenu(){
    menulink.forEach((link) => {
        link.classList.remove("displayNone");
    });
    menuWithSubmenuItems.forEach((item) => {
        console.log(item)
        item.target.nextElementSibling.classList.remove("active");
        item.classList.add("displayNone");
    });
}

backMenuIcon.forEach((item)=>{
    item.addEventListener(("click"), backToMainMenu);
})











