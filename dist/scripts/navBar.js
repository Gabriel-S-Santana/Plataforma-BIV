const btnMenu = document.getElementById('menu-button')
const listMenu = document.querySelector('.list-menu')

btnMenu.addEventListener('click', ()=>{
    if(listMenu.style.display == 'none'){
        listMenu.style.display = 'flex'
    }else {
        listMenu.style.display = 'none'
    }
})
