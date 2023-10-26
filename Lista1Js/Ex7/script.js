let n = document.querySelector('#n');
let list = document.querySelector('ul')


function add(){
    nota = n.value
    let li = document.createElement('li');
    li.innerText = nota
    list.appendChild(li);
}