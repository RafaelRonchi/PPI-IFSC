let b = document.querySelector('#b');
let r = document.querySelector('#r');

let i1 = document.querySelector('#i1');
let i2 = document.querySelector('#i2');

function somar(){
    r.value = Number.parseFloat(i1.value) + Number.parseFloat(i2.value);
}