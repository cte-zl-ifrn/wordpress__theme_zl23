

const menuWithSubmenuItems = document.querySelectorAll(".menuwithsubmenu");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".menulink");
let conditionMet = false;




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
    menuWithSubmenuItems.forEach((link)=>{
       link.style.display = "none";
    })
}

backMenuIcon.forEach((item)=>{
    item.addEventListener(("click"), backToMainMenu);
})



 // Substitua true pela sua própria condição

// Se a condição for atendida, adicione a classe "special" ao elemento






