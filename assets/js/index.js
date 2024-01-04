const menuWithSubmenuItems = document.querySelectorAll(".menu-item-has-children");
const backMenuIcon = document.querySelectorAll(".backMenuIcon");
const menulink = document.querySelectorAll(".floatingMenu .menu a");
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
        $(".floatingMenu .menu > li > a").addClass("sub-menu");
        $(e.target).parent().find("ul").removeClass("sub-menu");
        submenus.forEach((item) => {
            if(item.classList.contains("showDesktop")) {
               item.classList.toggle("showDesktop");
            }
        })
        $(e.target).parent().find("ul").addClass("showDesktop");
      
        $(".floatingMenu ul#menu-mainmenu").addClass("special");
      
    });
  
});



$(".menuUl > .voltar, #closeMainMenu").on("click", function (e) {
    resetMenu();
});


function resetMenu(){
    $(".menuUl > .voltar").css("display", "none");
    $(".floatingMenu .menu > li > a").removeClass("sub-menu");
    $(".floatingMenu .menu-item-has-children > ul").addClass("sub-menu");
    $(".floatingMenu ul#menu-mainmenu").removeClass("special");
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



// Abrir pesquisa
const toggleSearch = document.querySelector('#searchIcon');
const closeSearch = document.querySelector('#myForm i');


toggleSearch.addEventListener('click', () => {
    $("#myForm i, #myForm").css("display", "flex");
    $("#searchTopMenu").focus();
})

closeSearch.addEventListener('click', () => {
    $("#myForm").css("display", "none");
})

//Slide stories
var splide = new Splide( '.splide', {
    perPage: 1,
    perMove: 1,
    padding: { right: '3rem' },
    gap: '1.5rem',
    omitEnd : true,
    pagination: false,
    mediaQuery: 'min',
    breakpoints: {
        1240: {
		    arrows: false,
            drag: false,
            gap: '40px',
		},
    }
  } );
  
  splide.mount();





