document.querySelectorAll('.navigate-home').forEach(element =>{
    element.addEventListener('click', ()=>{
        window.location.href = '../../index.php'
    })
})
document.querySelectorAll('#navigate-acoes').forEach(element =>{
    element.addEventListener('click', ()=>{
        window.location.href = 'acoes.php'
    })
})
document.getElementById('navigate-historico').addEventListener('click', ()=>{
    window.location.href = 'historico.php'
})