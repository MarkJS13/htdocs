const hide = document.querySelector('.hide');

hide.style.transition = 'opacity 1s, transform 1s';

setTimeout(() => {
  hide.style.opacity = 0;
  hide.style.transform = 'translateY(-100%)';
}, 2000);

setTimeout(() => {
  hide.remove();
}, 3000);
