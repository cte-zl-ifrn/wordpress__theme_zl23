

const menuWithSubmenuItems = document.querySelectorAll(".menu-item-has-children");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menu a");
let conditionMet = false;


menuWithSubmenuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        $(".menuUl > .voltar").css("display", "block");
        $(".menu > li > a").addClass("sub-menu");
        $(e.target).parent().find("ul").removeClass("sub-menu");
      
        //  removerLine()
      
    });
  
});


     // Substitua true pela sua própria condição
   
// Se a condição for atendida, altere a cor de fundo do pseudo-elemento
/**
 * 
 * function hideLi(){
    $(document).ready(function() {
        // Usando each para percorrer cada elemento <li> dentro da lista
        $("ul.menuList li").each(function() {
          // Verifica se o elemento não possui a classe "menuwithsubmenu" e não possui a classe "willNotBeHide"
          if (!$(this).hasClass("menuwithsubmenu") && !$(this).hasClass("willNotBeHide")) {
            // Adiciona a classe "hide"
            $(this).addClass("hide");
          }
        });
      });
    
}
 * 
 * 
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





