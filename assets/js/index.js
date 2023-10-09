
let institucional = document.querySelector('#institucional');
let SubMenuInstitucional = document.querySelector('#institucionalSubMenu');
let ensinoSubMenu = document.querySelector('#ensinoSubMenu');
const preventDefault = (event) => event.preventDefault();
let menu = document.querySelector('.menuUl');
let backBtn = document.querySelectorAll('.backBtn');
let ensinoLink = document.querySelector('#ensinoLink');
let pesquisaSub = document.querySelector('#pesquisaSub');
let pesquisaLink = document.querySelector('#pesquisaLink');
let extSub = document.querySelector('#extSub');
let extLink = document.querySelector('#extLink');
let noticiasSub = document.querySelector('#noticiasSub');
let noticiasLink = document.querySelector('#noticiasLink');
let ajudaLink = document.querySelector('#ajudaLink');
let ajudaSub = document.querySelector('#ajudaSub');
let servLink = document.querySelector('#servLink');
let servSub = document.querySelector('#servSub');
let body =  document.querySelector('body');
const dropDownMenu = document.querySelector('#dropDownMenu');







//eventos do menu 
institucional.addEventListener('click',function(){
    preventDefault(event);
    SubMenuInstitucional.classList.remove('displayNone');
    menu.classList.add('displayNone');
        
})


ensinoLink.addEventListener('click',function(){
    preventDefault(event);
    ensinoSubMenu.classList.remove('displayNone');
    SubMenuInstitucional.classList.add('displayNone');
    menu.classList.add('displayNone');
   
})

pesquisaLink.addEventListener('click',function(){
    preventDefault(event);
    pesquisaSub.classList.remove('displayNone');
    
    menu.classList.add('displayNone');
   
})

extLink.addEventListener('click',function(){
    preventDefault(event);
    extSub.classList.remove('displayNone');
    
    menu.classList.add('displayNone');
   
})

noticiasLink.addEventListener('click',function(){
    preventDefault(event);
    noticiasSub.classList.remove('displayNone');
    
    menu.classList.add('displayNone');
   
})

ajudaLink.addEventListener('click',function(){
    preventDefault(event);
    ajudaSub.classList.remove('displayNone');
    
    menu.classList.add('displayNone');
   
})

servLink.addEventListener('click',function(){
    preventDefault(event);
    servSub.classList.remove('displayNone');
    
    menu.classList.add('displayNone');
    servLink.classList.add('displayNone');
   
}
)


backBtn.forEach(element => {
    element.addEventListener('click',function(){
        preventDefault(event);
        ensinoSubMenu.classList.add('displayNone');
        SubMenuInstitucional.classList.add('displayNone');
        pesquisaSub.classList.add('displayNone');
        extSub.classList.add('displayNone');
        menu.classList.remove('displayNone');
        noticiasSub.classList.add('displayNone');
        ajudaSub.classList.add('displayNone');
        servSub.classList.add('displayNone');   
       servLink.classList.remove('displayNone');
    })
});



dropDownMenu.addEventListener('click',function(){
  
   
})
//evento de retorno do menu



