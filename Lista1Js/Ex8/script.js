resultado = document.querySelector('#resultado')
function addR(valor){
    resultado.value += valor;
}
function limpa(){
    resultado.value = 0;
}


function calcular(){
    try {
     resultado.value = eval(resultado.value);   
    } catch (error) {
        resultado.value = error;
    }
}