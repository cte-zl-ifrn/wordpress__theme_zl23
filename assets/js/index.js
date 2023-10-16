const institucionalLink = document.querySelector('#institucionalLink');
const institucionalSubMenu = document.querySelector('#institucionalSubMenu');
const menuItem = document.querySelectorAll('.menuItem');
const closerDropMenu = document.querySelector('#closerDropMenu');
const submenuUl = document.querySelectorAll('.submenuUl');
const backMenuIcon = document.querySelector('.backMenuIcon');
const ensinoSubMenu = document.querySelector('#ensinoSubMenu');
const ensinolink = document.querySelector('#ensinolink');

function clearMenu(){
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

function bachToMainMenu(){
    clearMenu();
}





closerDropMenu.addEventListener('click', (e) => {
   clearMenu();
})

institucionalLink.addEventListener('click', (e) => {
    subMenuInstitucional()
});


ensinolink.addEventListener('click', (e) => {
    subMenuEnsino()
})

backMenuIcon.addEventListener('click', (e) => {
    bachToMainMenu();
})


