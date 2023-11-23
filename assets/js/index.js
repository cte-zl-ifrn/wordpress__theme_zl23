const menuWithSubmenuItems = document.querySelectorAll(".menu-item-has-children");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menu a");
const menuIcon = document.querySelector('#menuMobileIcon');
const closeMenu = document.querySelector('#closeMainMenu');
let conditionMet = false;


menuIcon.addEventListener('click', () => {
    $(".floatingMenu").css("display", "block");
})

closeMenu.addEventListener('click', () => {
    $(".floatingMenu").css("display", "none");
})


menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        $(".menuUl > .voltar").css("display", "block");
        $(".menu > li > a").addClass("sub-menu");
        $(e.target).parent().find("ul").removeClass("sub-menu");
      
        //  removerLine()
      
    });
  
});



$(".menuUl > .voltar, #closerDropMenu").on("click", function (e) {
    resetMenu();
});


function resetMenu(){
    $(".menuUl > .voltar").css("display", "none");
    $(".menu > li > a").removeClass("sub-menu");
    $(".menu-item-has-children > ul").addClass("sub-menu");
    $(".menu").removeClass("special");
}
function removerLine(){
      
    conditionMet = true;

    if (conditionMet) {
        $("ul.menu").addClass("special");
    } else {
       
        $("ul.menu").removeClass("special");
    }
    
}


function backToMainMenu(){
    menulink.forEach((link) => {
        link.classList.remove("sub-menu");
    });
    menuWithSubmenuItems.forEach((link)=>{
       link.style.display = "none";
    })
}

backMenuIcon.forEach((item)=>{
    item.addEventListener(("click"), backToMainMenu);
})



 // Substitua true pela sua própria condição

// Se a condição for atendida, adicione a classe "special" ao elemento


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





