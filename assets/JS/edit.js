// Elements
const editButtons = document.getElementsByClassName('edit-btn'); // Corrected class name
const modal = document.getElementById('editModal');
const backdrop = document.getElementById('modalBackdrop');
const closeModalBtn = document.getElementById('closeModalBtn');
const titleInput = document.getElementById('titleInput');
const descriptionInput = document.getElementById('descriptionInput');
const featuredImage = document.getElementById('featuredImage');
const editForm = document.getElementById('editForm');

// Function to open modal and populate data
function openModal(data) {
    console.log(data)
    titleInput.value = data.title;
    descriptionInput.value = data.description;
    featuredImage.src = '../uploads/' + data.image;// Adjust the path as necessary
    featuredImage.alt = `Featured image for ${data.title}`;
    modal.classList.remove('hidden');
    backdrop.classList.remove('hidden');
}

// Function to close modal
function closeModal() {
    modal.classList.add('hidden');
    backdrop.classList.add('hidden');
}

// Add click event to each edit button
Array.from(editButtons).forEach(button => {
    button.addEventListener('click', () => {
        const data = {
            title: button.getAttribute('data-title'),
            description: button.getAttribute('data-description'),
            image: button.getAttribute('data-image')
        };
        openModal(data);
    });
});

// Close modal on close button click
closeModalBtn.addEventListener('click', closeModal);

// Close modal on backdrop click
backdrop.addEventListener('click', closeModal);

// Prevent form submission for demo
editForm.addEventListener('submit', e => {
    e.preventDefault();
    // You can add form submission logic here
    closeModal();
});

// Optional: Close modal on Escape key press
document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
    }
});
