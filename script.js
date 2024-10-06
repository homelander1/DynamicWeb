// Open modal
document.getElementById("openModalBtn").onclick = function () {
    document.getElementById("myModal").style.display = "block";
};

// Close modal on 'x'
document.getElementsByClassName("close")[0].onclick = function () {
    document.getElementById("myModal").style.display = "none";
};

// Close modal when clicking outside modal
window.onclick = function (event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }

};


// top section - scroll down button
document.getElementById("scrollButton").addEventListener("click", function () {
    window.scrollBy({
        top: 1300, // Scroll down 1300px
        behavior: 'smooth' 
    });
});



// Open modal Log in
document.getElementById("openLoginModal").onclick = function () {
    document.getElementById("myModalLogin").style.display = "block";
};

// Close modal on 'X'
document.getElementsByClassName("close")[1].onclick = function () {
    document.getElementById("myModalLogin").style.display = "none";
};

// Close modal when clicking outside of it
window.onclick = function (event) {
    var modal = document.getElementById("myModalLogin");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

