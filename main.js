const buttonsProx = document.querySelectorAll('[data-prox]');
const buttonsAnt = document.querySelectorAll('[data-ant]');
const stepDivs = document.querySelectorAll('.steps');

for(let i = 0; i < buttonsProx.length; i++){
    buttonsProx[i].addEventListener('click', () => {
        stepDivs[i].classList.remove('active');
        stepDivs[i+1].classList.add('active');
    });
}

for(let i = 0; i < buttonsAnt.length; i++){
    buttonsAnt[i].addEventListener('click', () => {
        stepDivs[i+1].classList.remove('active');
        stepDivs[i].classList.add('active');
    });
}