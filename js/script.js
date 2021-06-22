// modal
const createButton = document.querySelector('#create');
const modalBg = document.querySelector('.modal-background');
const modal = document.querySelector('.modal');

createButton.addEventListener('click', () => {
  modal.classList.add('is-active');
});

modalBg.addEventListener('click', () => {
  modal.classList.remove('is-active');
});