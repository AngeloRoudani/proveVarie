let myInput = document.getElementById('figa');
let listwrapper = document.getElementById('list');

function getList() {

    let myValue = "";

    myValue = myInput.value;

    listwrapper.innerHTML += myValue;

}