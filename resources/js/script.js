const img = document.getElementById('imgUno');

    img.addEventListener('mouseenter', () => {
      img.classList.add('rotate');
    });

    img.addEventListener('mouseleave', () => {
      img.classList.remove('rotate');
    });