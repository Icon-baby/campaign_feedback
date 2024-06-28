function validateForm() {
    // Get form elements
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const feedback = document.getElementById('feedback');
    const rating = document.getElementById('rating');
  
    // Check if name is empty
    if (name.value === '') {
      alert('Please enter your name.');
      return false;
    }
  
    // Check if email is valid format
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      alert('Please enter a valid email address.');
      return false;
    }
  
    // Check if feedback is empty
    if (feedback.value === '') {
      alert('Please provide your feedback.');
      return false;
    }

    //Check if rating is empty
    if(rating.value === ''){
        alert('Please provide your rating');
        return false;
    }
  
    // If all validations pass, submit the form
    return true;
  }
  