function adicionarValor(valor) {
    const input = document.getElementById('input-customizado');
    input.value += valor;
    atualizarDisplay(input.value);
}

function limpar() {
    const input = document.getElementById('input-customizado');
    input.value = '';
    atualizarDisplay('');
}

function calcular() {
    const input = document.getElementById('input-customizado');
        input.value = eval(input.value) || '';
        atualizarDisplay(input.value);
    } 


function atualizarDisplay(valor) {
    document.getElementById('display').textContent = valor;
}
