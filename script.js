 // Open modal
 document.getElementById("openModalBtn").onclick = function() {
    document.getElementById("myModal").style.display = "block";
};

// Close modal on 'x'
document.getElementsByClassName("close")[0].onclick = function() {
    document.getElementById("myModal").style.display = "none";
};

// Close modal when clicking outside modal
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// Handle form submission using AJAX and show toast
document.getElementById("contactForm").onsubmit = function(event) {
    event.preventDefault();  // Prevent form from reloading the page

    var formData = new FormData(this);  // Get the form data

    fetch('FoolowUS.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Close modal
        document.getElementById("myModal").style.display = "none";
        
        // Show toast message
        var toast = document.getElementById("toast");
        toast.className = "toast show";

        // Hide the toast after 5 seconds
        setTimeout(function() {
            toast.className = toast.className.replace("show", "");
        }, 1500);
    })
    .catch(error => console.error('Error:', error));
};

document.getElementById("scrollButton").addEventListener("click", function() {
    window.scrollBy({
      top: 1440, // Scroll down 1440px
      behavior: 'smooth' // Smooth scrolling
    });
  });