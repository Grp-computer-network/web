
  // Get the modal and close button
  var admissionModal = document.getElementById("admissionModal");
  var admissionBtn = document.querySelector(".admission-btn"); // Admission link in the header
  var closeBtn = document.querySelector(".form .close-Btn");

  // Function to open the modal
  function openModal() {
    admissionModal.style.display = "flex"; // Use flex to center the modal
  }

  // Function to close the modal
  function closeModal() {
    admissionModal.style.display = "none"; // Hide the modal
  }

  // When the user clicks the "Admission" link, open the modal
  admissionBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link action
    openModal(); // Open the modal
  });

  // When the user clicks on the close button, close the modal
  closeBtn.addEventListener('click', function() {
    closeModal(); // Close the modal
  });

  // When the user clicks anywhere outside the modal content, close it
  window.addEventListener('click', function(event) {
    if (event.target == admissionModal) {
      closeModal(); // Close the modal if user clicks outside
    }
  });

  // Handle form submission
  document.getElementById("admissionForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent page reload on form submission
    alert("Form submitted successfully!"); // Show success message
    closeModal(); // Close the modal after submission
    this.reset(); // Optionally, reset the form fields
  };

