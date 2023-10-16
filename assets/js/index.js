const institucionalLink = document.querySelector('#institucionalLink');
const institucionalSubMenu = document.querySelector('#institucionalSubMenu');
const menuItem = document.querySelectorAll('.menuItem');


institucionalLink.addEventListener('click', (e) => {
    institucionalSubMenu.classList.remove('displayNone')
    institucionalSubMenu.classList.add('displayBlock')
    menuItem.forEach((item) => {
        item.classList.add('displayNone')
    })
});
