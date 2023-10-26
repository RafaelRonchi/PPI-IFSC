let valor =  Number.parseFloat(prompt("Digite um numero"));
let resultado = "";

for (let index = 1; index < valor+1; index++){
    resultado += " "+ index.toString();
}

alert(`Total: ${resultado}`)