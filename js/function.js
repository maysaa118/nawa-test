let msg = 'hello word';

function hello() {
    alert(msg);
}


let el = document.querySelector('h1 i'); //object
el.onclick = function () {
    hello();
    el.style.color = "red";
    el.style.backgroundColor = "#fff";
    el.style.fontSize = "30px";
};

let input = document.querySelector('[placeholder=Name]');
input.addEventListener('keyup', function () {
    el.innerHTML = "<b>" + input.value + "</b>";

});

let form = document.querySelector('#contact-form');
let txtarea = document.querySelector('textarea');
let err = document.querySelector('.error');
form.addEventListener('submit', function (event) {
    //let msg = document.querySelector('textarea');
   // alert('Form Submitted');
    if (txtarea.value === '') {
        event.preventDefault();
        //alert('please write something');
        err.classList.remove('hide');

        err.classList.remove('hide');
        return;
    }
});

txtarea.onkeyup = function () {
    err.classList.add('hide');
}


