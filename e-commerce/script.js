const buttons = document.querySelectorAll('form div a');
const cartNum  = document.querySelector('.menu p');
//const text  = document.querySelector('button a');

let score = 0;

buttons.forEach(btn => {
  btn.addEventListener('click', e => {
    score++;
    cartNum.textContent = score;
    e.target.style.display = 'none';
    //text.textContent = 'Added to Cart!';
    console.log(e.target)
  })
})


console.log(cartNum);
