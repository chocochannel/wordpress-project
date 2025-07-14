document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.ai-card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.classList.add('active');
    });
    card.addEventListener('mouseleave', () => {
      card.classList.remove('active');
    });
  });
}); 