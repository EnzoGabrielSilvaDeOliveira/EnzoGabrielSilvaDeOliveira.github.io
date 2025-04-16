// Mostra uma mensagem na tela quando o usuário clica em um botão
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('#main-div button');
    const inputField = document.getElementById('input-customizado');
    
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            alert(`Você clicou no BOTÃO ${index + 1}`);
            inputField.value += `${index + 1}`; // Concatena o número do botão ao valor atual do campo de entrada
            
            // Atualiza o texto do elemento de exibição
            const displayElement = document.getElementById('display');
            if (displayElement) {
                displayElement.textContent = `Olá, ${inputField.value}`;
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const inputField = document.getElementById('input-customizado');
    
    inputField.addEventListener('input', function() {
        const inputValue = inputField.value;
        
        // Atualiza o texto do elemento de exibição
        const displayElement = document.getElementById('display');
        if (displayElement) {
            if (inputValue) {
                displayElement.textContent = `Olá, ${inputValue}`;
            } else {
                displayElement.textContent = '';
            }
        }
    });
});