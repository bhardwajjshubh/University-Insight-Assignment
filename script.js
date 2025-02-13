document.getElementById('leadForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const country = document.getElementById('country').value;

  if (!name || !email || !phone || !country) {
      alert('Please fill in all fields.');
      return;
  }

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
      alert('Please enter a valid email address.');
      return;
  }

  alert('Form submitted successfully!');
  // Here you can add code to send the form data to a server
});
