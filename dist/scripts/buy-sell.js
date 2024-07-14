let buttonArray = document.querySelectorAll('button');

buttonArray.forEach((btn) => {
    btn.addEventListener('click', (event) => {
        let valor = event.target.getAttribute('data-valor')
        let codigo = event.target.getAttribute('data-codigo');
        let empresa = event.target.getAttribute('data-nome');
        let compra;

        if(event.target.classList.contains('button-primary')) {
            compra = true
        }
        else {
            compra = false
        }

        localStorage.setItem('valor', valor)
        localStorage.setItem('codigo', codigo)
        localStorage.setItem('empresa', empresa)
        localStorage.setItem('compra', compra)

        window.location.href = "../pages/confirm.html"
    })
});
