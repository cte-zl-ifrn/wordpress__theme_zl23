const menuWithSubmenuItems = document.querySelectorAll(".menu-item-has-children");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menu a");
const menuIcon = document.querySelector('#menuMobileIcon');
const closeMenu = document.querySelector('#closeMainMenu');
const submenus = document.querySelectorAll('#stickContainer ul.menu .sub-menu');



menuIcon.addEventListener('click', () => {
    $(".floatingMenu").css("display", "block");
})

closeMenu.addEventListener('click', () => {
    $(".floatingMenu").css("display", "none");
})


menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        $(".menuUl > .voltar").css("display", "block");
        $(".menu > li > a").addClass("sub-item");
        $(e.target).parent().find("ul").removeClass("sub-item");
        submenus.forEach((item) => {
            if(item.classList.contains("showDesktop")) {
               item.classList.toggle("showDesktop");
            }
        })
        $(e.target).parent().find("ul").addClass("showDesktop");
      
        $("ul#menu-mainmenu").addClass("special");
      
    });
  
});



$(".menuUl > .voltar, #closerDropMenu").on("click", function (e) {
    resetMenu();
});


function resetMenu(){
    $(".menuUl > .voltar").css("display", "none");
    $(".menu > li > a").removeClass("sub-item");
    $(".menu-item-has-children > ul").addClass("sub-item");
    $("ul#menu-mainmenu").removeClass("special");
}


function backToMainMenu(){
    menulink.forEach((link) => {
        link.classList.remove("sub-item");
    });
    menuWithSubmenuItems.forEach((link)=>{
       link.style.display = "none";
    })
}

backMenuIcon.forEach((item)=>{
    item.addEventListener(("click"), backToMainMenu);
})



// Abrir pesquisa
const toggleSearch = document.querySelector('#searchIcon');
const closeSearch = document.querySelector('#myForm i');


toggleSearch.addEventListener('click', () => {
    $("#myForm i, #searchTopMenu").css("display", "block");
    $("#searchTopMenu").focus();
})

closeSearch.addEventListener('click', () => {
    $("#myForm i, #searchTopMenu").css("display", "none");
})





