

const menuWithSubmenuItems = document.querySelectorAll(".menuwithsubmenu");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menulink");


console.log(menuWithSubmenuItems);
console.log(backMenuIcon);
console.log(menulink);

menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        $(".menuUl > div").css("display", "block");
        $(".menuList > li > a").addClass("displayNone");
        $(e.target).parent().find("ul").removeClass("displayNone");
    });
});


$(".menuUl > .voltar").on("click", function (e) {
    $(".menuUl > div").css("display", "none");
    $(".menuList > li > a").removeClass("displayNone");
    $(".menuwithsubmenu > ul").addClass("displayNone");
})


function backToMainMenu(){
    menulink.forEach((link) => {
        link.classList.remove("displayNone");
    });
    menuWithSubmenuItems.forEach((link)=>{
       link.style.display = "none";
    })
}

backMenuIcon.forEach((item)=>{
    item.addEventListener(("click"), backToMainMenu);
})











