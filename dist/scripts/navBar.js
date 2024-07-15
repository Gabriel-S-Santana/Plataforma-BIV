const btnMenu = document.getElementById('menu-button')
const listMenu = document.querySelector('.list-menu')

btnMenu.addEventListener('click', () => {
    if (!listMenu.classList.contains('active')) {
        listMenu.style.display = 'flex'; // Exibe o menu antes de adicionar a classe
        setTimeout(() => {
            listMenu.classList.add('active');
        }, 10); // Adiciona a classe após um pequeno atraso
    } else {
        listMenu.classList.remove('active');
        setTimeout(() => {
            listMenu.style.display = 'none'; // Esconde o menu após a animação
        }, 80); // Tempo da animação
    }
});


document.querySelectorAll('.navigate-home').forEach(element =>{
    element.addEventListener('click', ()=>{
        console.log(window.location.href)
        window.location.href = './../../index.html'
    })
})
document.querySelectorAll('#navigate-acoes').forEach(element =>{
    element.addEventListener('click', ()=>{
        window.location.href = './dist/pages/acoes.html'
    })
})
document.getElementById('navigate-historico').addEventListener('click', ()=>{
    window.location.href = './dist/pages/historico.html'
})