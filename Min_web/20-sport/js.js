document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.remove('hidden');
  
    const menuLinks = document.querySelectorAll('.loft-menu a');
    menuLinks.forEach(link => {
      link.addEventListener('mouseover', () => {
        link.style.transform = 'scale(1.1)';
        link.style.transition = 'transform 0.3s ease';
      });
      link.addEventListener('mouseout', () => {
        link.style.transform = 'scale(1)';
      });
    });
  });
  