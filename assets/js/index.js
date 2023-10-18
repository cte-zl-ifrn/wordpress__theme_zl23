const institucionalLink = document.querySelector('#institucionalLink');
const institucionalSubMenu = document.querySelector('#institucionalSubMenu');
const menuItem = document.querySelectorAll('.menuItem');
const closerDropMenu = document.querySelector('#closerDropMenu');
const submenuUl = document.querySelectorAll('.submenuUl');
const backMenuIcon = document.querySelectorAll('.backMenuIcon');
const ensinoSubMenu = document.querySelector('#ensinoSubMenu');
const ensinolink = document.querySelector('#ensinolink');
const pesquisaLink = document.querySelector('#pesquisaLink');
const pesquisaSubMenu = document.querySelector('#pesquisaSubMenu');



function hideMenu(){
    menuItem.forEach((item) => {
        item.classList.remove('displayNone')
    })
    submenuUl.forEach((item) => {
        item.classList.add('displayNone')
    }
    )
}

function subMenuInstitucional(){
    menuItem.forEach((item) => {
        item.classList.add('displayNone')
    })
    institucionalSubMenu.classList.remove('displayNone');
   

}
function subMenuEnsino(){
    menuItem.forEach((item) => {
        item.classList.add('displayNone')
    })
    ensinoSubMenu.classList.remove('displayNone');
   
}

function bachToMainMenu() {
    
    submenuUl.forEach((item) => {
        item.classList.add('displayNone');
    });

   
    menuItem.forEach((item) => {
        item.classList.remove('displayNone');
    });
}

function pesquisaSubMenuFunction(){
    menuItem.forEach((item) => {
        item.classList.add('displayNone')
    })
    pesquisaSubMenu.classList.remove('displayNone');
   
}

pesquisaLink.addEventListener('click', (e) => {
    pesquisaSubMenuFunction()
})




closerDropMenu.addEventListener('click', (e) => {
    hideMenu();
})

institucionalLink.addEventListener('click', (e) => {
    subMenuInstitucional()
});


ensinolink.addEventListener('click', (e) => {
    subMenuEnsino()
})


backMenuIcon.forEach((item) => {
    item.addEventListener('click', (e) => {
        bachToMainMenu()
    })
})


