// // Add click handlers to tier selection buttons
// document.querySelectorAll('.btn-select').forEach((button) => {
//   button.addEventListener('click', function () {
//     const tierCard = this.closest('.tier-card');
//     const amount = tierCard.querySelector('.tier-amount').textContent;
//     const tierName = tierCard.querySelector('h3').textContent;
//     alert(
//       `You selected: ${tierName} (${amount})\n\nIn a production environment, this would direct you to a secure payment page with Mollie, iDEAL, PayPal, or your preferred payment processor.`
//     );
//   });
// });

// // Primary CTA button functionality
// document
//   .querySelector('.btn-primary-cta')
//   .addEventListener('click', function () {
//     alert(
//       'This would open a payment modal or redirect to a secure checkout page.\n\nSuggested payment integrations for Dutch market:\n• Mollie (supports iDEAL, cards, etc.)\n• Stripe\n• PayPal\n• Adyen'
//     );
// });

const galleryItems = document.querySelectorAll('.gallery-item');
const modal = document.getElementById('contactModal');
const closeBtn = document.querySelector('.close');
const noBtn = document.getElementById('noBtn');
const yesBtn = document.getElementById('yesBtn');

galleryItems.forEach((item) => {
  item.addEventListener('click', () => {
    modal.style.display = 'block';
  });
});

closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

noBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

yesBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});
