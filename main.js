document.addEventListener('DOMContentLoaded', function() {
    let selectForm = document.getElementById('selectForm');
    let fileInput = document.getElementById('fileInput');
    let form = document.getElementById('csvForm');
    let uploadButton = document.getElementById('uploadButton');
    let printButton = document.getElementById("print-button");


    // Print button functionality
    if (printButton) {
        // alert("print button clicked");
        printButton.addEventListener("click", function() {
            window.print();
        });
    }

    // Initialize Sortable.js
    function initializeSortable() {
        let gridContainer = document.querySelector('.grid-container');
        if (gridContainer) {
            new Sortable(gridContainer, {
                animation: 150, // Smoothness of the drag animation
                ghostClass: 'sortable-ghost', // Class name for the placeholder element
                chosenClass: 'sortable-chosen', // Class name for the selected item
                dragClass: 'sortable-drag', // Class name for the dragging item
            });
        }
    }

    // Initialize Sortable when the DOM is loaded
    initializeSortable();

    // Handle file input click
    selectForm.addEventListener('click', function() {
        fileInput.click();
    });

    // Auto upload and hide button
    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            form.submit(); // Submit the form
            uploadButton.style.display = 'none'; // Hide the upload button
        }
    });


    // Hide form box after submission
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        form.querySelector('.selectForm').style.visibility = 'hidden'; // Hide the form container

        // Delay form submission to allow visibility change
        setTimeout(function() {
            form.submit(); // Submit the form
        }, 300);
    });

    // Reinitialize Sortable if needed
    function reinitializeSortable() {
        // Destroy existing sortable instance if any
        if (Sortable.get(document.querySelector('.grid-container'))) {
            Sortable.get(document.querySelector('.grid-container')).destroy();
        }
        // Initialize sortable again
        initializeSortable();
    }

    // Reinitialize sortable after form is hidden
    form.addEventListener('submit', function() {
        setTimeout(function() {
            reinitializeSortable(); // Reinitialize sortable after form is hidden
        }, 500); // Delay to ensure visibility changes are applied
    });
});


