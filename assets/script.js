/* Features Animation */
  const boxes = document.querySelectorAll('.feature-box');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      } else {
        entry.target.classList.remove('show'); 
      }
    });
  }, { threshold: 0.2 });

  boxes.forEach(box => observer.observe(box));


/*ENDING */