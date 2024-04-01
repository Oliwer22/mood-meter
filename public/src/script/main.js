
window.onload = function() {
    document.getElementById('emojiButtons').style.display = 'none'; 
  }
  function closeEnqueteForm() {
    var enqueteForm = document.getElementById('enqueteForm');
    if (enqueteForm) {
      enqueteForm.classList.remove('open');
    } else {
      console.error('Element with ID ERROR'. error);
    }
  }
  
  function openEnqueteForm() {
    var enqueteForm = document.getElementById('enqueteForm');
    if (enqueteForm) {
      enqueteForm.classList.add('open');
      window.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
          closeEnqueteForm();
        }
      });
    } else {
      console.error('Element with ID ERROR'. error);
    }
  }