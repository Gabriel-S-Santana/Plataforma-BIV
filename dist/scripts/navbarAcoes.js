document.querySelectorAll('.navigate-home').forEach(element =>{
    element.addEventListener('click', ()=>{
        window.location.href = '../../index.html'
    })
})
document.querySelectorAll('#navigate-acoes').forEach(element =>{
    element.addEventListener('click', ()=>{
        window.location.href = 'acoes.html'
    })
})
document.getElementById('navigate-historico').addEventListener('click', ()=>{
    window.location.href = 'historico.html'
})