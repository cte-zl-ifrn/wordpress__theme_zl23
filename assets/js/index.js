

const menuWithSubmenuItems = document.querySelectorAll(".menuwithsubmenu");
const backMenuIcon = document.querySelector(".backMenuIcon");
const menulink = document.querySelectorAll(".menulink");
let conditionMet = false;


//console.log(menuWithSubmenuItems);
console.log(backMenuIcon);
//console.log(menulink);

menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        $(".menuUl > div").css("display", "block");
        $(".menuList > li > a").addClass("displayNone");
        $(e.target).parent().find("ul").removeClass("displayNone");
      
        removerLine()
    });
  
});

     // Substitua true pela sua própria condição
   
// Se a condição for atendida, altere a cor de fundo do pseudo-elemento
/**
 * 
 * $(".menuUl > .voltar").on("click", function (e) {
   resetMenu();
    
})

$("#closerDropMenu").on("click", function (e) {
  resetMenu();  
 }
)
 */
$(".menuUl > .voltar, #closerDropMenu").on("click", function (e) {
    resetMenu();
});


function resetMenu(){
    $(".menuUl > div").css("display", "none");
    $(".menuList > li > a").removeClass("displayNone");
    $(".menuwithsubmenu > ul").addClass("displayNone");
    $(".menuList").removeClass("special");
}
function removerLine(){
      
    conditionMet = true;

    if (conditionMet) {
        $("ul.menuList").addClass("special");
    } else {
       
        $("ul.menuList").removeClass("special");
    }
    
}


function backToMainMenu(){
    menulink.forEach((link) => {
        link.classList.remove("displayNone");
    });
}

backMenuIcon.addEventListener(("click"), backToMainMenu);


 // Substitua true pela sua própria condição

// Se a condição for atendida, adicione a classe "special" ao elemento






