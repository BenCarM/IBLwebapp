// Function to handle checkbox color change
document.querySelectorAll('.checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        // Find the closest .checkbox-cont parent and toggle the pink-background class
        const checkboxCont = this.closest('.checkbox-cont');
        if (this.checked) {
            checkboxCont.classList.add('pink-background');
        } else {
            checkboxCont.classList.remove('pink-background');
        }
    });
});

// Function to handle checkbox selection
document.querySelectorAll('.checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        // Get all checkboxes
        const allCheckboxes = document.querySelectorAll('.checkbox');
        
        // If the checkbox is checked
        if (this.checked) {
            // Disable all other checkboxes
            allCheckboxes.forEach(box => {
                if (box !== this) {
                    box.disabled = true;
                }
            });
        } else {
            // Enable all checkboxes if this one is unchecked
            allCheckboxes.forEach(box => {
                box.disabled = false;
            });
        }
    });
});

// Function to calculate skin type and handle redirection
function calculateSkinType() {
    // Get all selected checkboxes
    const selectedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');

    // Initialize counters for each skin type
    let dryCount = 0;
    let oilyCount = 0;
    let combinationCount = 0;

    // Count each type based on the value of selected checkboxes
    selectedCheckboxes.forEach(checkbox => {
        if (checkbox.value === 'dry') {
            dryCount++;
        } else if (checkbox.value === 'oily') {
            oilyCount++;
        } else if (checkbox.value === 'combination') {
            combinationCount++;
        }
    });

    // Determine the skin type with the highest count
    let result = '';
    if (dryCount > oilyCount && dryCount > combinationCount) {
        result = 'Dry Skin';
    } else if (oilyCount > dryCount && oilyCount > combinationCount) {
        result = 'Oily Skin';
    } else {
        result = 'Combination Skin'; // Default for ties or if other conditions are met
    }

    // Redirect to the appropriate page based on the result
    let redirectUrl = '';
    if (result === 'Dry Skin') {
        redirectUrl = '/dryskin';
    } else if (result === 'Oily Skin') {
        redirectUrl = '/oilyskin';
    } else {
        redirectUrl = '/combinationskin';
    }

    // Redirect to the appropriate page
    window.location.href = redirectUrl;
}

// Ensure the function is bound to the form submit event on page load
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('skinQuiz');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            calculateSkinType(); // Calculate and display the skin type
        });
    }
});
