let acao = document.querySelector('#acao');
let valor = document.querySelector('#valor');
let codigo = document.querySelector('#codigo');
let empresa = document.querySelector('#nome');
let titulo = document.querySelector('#titulo');
let total = document.querySelector('#total');
let input = document.querySelector('input');
let button = document.querySelector('#confirm');
let valorTotal;

document.addEventListener('DOMContentLoaded', (event) => {
  let compra = localStorage.getItem('compra');
  compra = (compra === 'true');
  acao.innerHTML = `Ação selecionada: ${localStorage.getItem('codigo')}`
  valor.innerHTML = `Valor da ação: R$${localStorage.getItem('valor')}`
  empresa.innerHTML = `Nome da empresa: ${localStorage.getItem('empresa')}`

  if(compra == true) {
    button.classList.add('button-primary')
    button.innerHTML = "COMPRAR"
    titulo.innerHTML = 'COMPRAR AÇÃO'
  }
  else if (compra == false) {
    button.classList.add('button-secondary')
    button.innerHTML = "VENDER"
    titulo.innerHTML = 'VENDER AÇÃO'
  }
});

input.addEventListener('change', () => {
  // Converter o valor do input para float
  let valorInput = parseFloat(input.value);
  // Converter o valor do localStorage para float
  let valorAcao = parseFloat(localStorage.getItem('valor').replace(',', '.'));

  // Multiplicar os valores
  valorTotal = valorInput * valorAcao;

  // Atualizar o HTML com o valor total formatado com 2 casas decimais
  total.innerHTML = `O valor total será: R$${valorTotal.toFixed(2)}`;
});

button.addEventListener('click', () => {
  if(button.classList.contains('button-primary')) {
    alert(`Você comprou R$${valorTotal.toFixed(2)} em ações`)
  }
  else {
    alert(`Você vendeu R$${valorTotal.toFixed(2)} em ações`)
  }
})