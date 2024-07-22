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

        window.location.href = "../pages/confirm.php"
    })
});

document.getElementById('switch').addEventListener('change', function() {
    const comprarSection = document.querySelector('.section-comprar');
    const venderSection = document.querySelector('.section-vender');
    const switchText = document.querySelector('#switch-text');

    if (this.checked) {
        comprarSection.classList.add('hidden');
        venderSection.classList.remove('hidden');
        switchText.innerHTML = "VENDER";
    } else {
        comprarSection.classList.remove('hidden');
        venderSection.classList.add('hidden');
        switchText.innerHTML = "COMPRAR";
    }
})