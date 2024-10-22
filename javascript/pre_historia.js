
const dropdownButtons = document.querySelectorAll('.dropdown-btn');

dropdownButtons.forEach(button => {
    button.addEventListener('click', function() {
       
        const dropdownContent = this.nextElementSibling;
        
       
        this.parentElement.classList.toggle('active');
        
  
        dropdownButtons.forEach(btn => {
            if (btn !== this) {
                btn.parentElement.classList.remove('active');
            }
        });
    });
});
