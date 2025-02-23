// slide show
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".single-slider");
    const radios = document.querySelectorAll(".slider-navigation input[type='radio']");
    let currentIndex = 0; // Start with the first slide

    // Function to show the slide 
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? "block" : "none"; // Show/Hide slides
        });
        radios[index].checked = true; 
    }

    // Function to move to the next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length; 
        showSlide(currentIndex);
    }

    // Add event listeners to radio buttons 
    radios.forEach((radio, index) => {
        radio.addEventListener("change", () => {
            currentIndex = index; 
            showSlide(currentIndex);
        });
    });

    
    showSlide(currentIndex);

    setInterval(nextSlide, 5000);
});


// Validation for Login Form
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent form submission for validation

            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            let valid = true;

            if (!emailPattern.test(email)) {
                window.alert("Please enter a valid email address.");
                valid = false;
            }

            if (password.length < 6) {
                window.alert("Password must be at least 6 characters long.");
                valid = false;
            }

            if (!valid) {
                 window.alert("Login unsuccessful!");
                
            }
        });
    }

   // Validation for Register Form
   document.getElementById("register-form").addEventListener("submit", function (event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm-password").value.trim();

    const namePattern = /^[a-zA-Z\s]+$/;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    let valid = true;

    if (!namePattern.test(name) || name.length < 3) {
        alert("Full name must contain only letters and spaces, with at least 3 characters.");
        valid = false;
    }

    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        valid = false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        valid = false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        valid = false;
    }

    if (!valid) {
        event.preventDefault(); // Prevent form submission if invalid
    }
});

});

    //Review section
    const reviewContainer = document.querySelector('.review-container');
    const reviewSlides = document.querySelectorAll('.review-slide');
    const reviewPrevBtn = document.getElementById('review-prev');
    const reviewNextBtn = document.getElementById('review-next');
    let currentReviewIndex = 0;
    
    function updateReviewSlide() {
        reviewContainer.style.transform = `translateX(-${currentReviewIndex * 100}%)`;
    }
    
    reviewNextBtn.addEventListener('click', () => {
        currentReviewIndex = (currentReviewIndex + 1) % reviewSlides.length;
        updateReviewSlide();
    });
    
    reviewPrevBtn.addEventListener('click', () => {
        currentReviewIndex = (currentReviewIndex - 1 + reviewSlides.length) % reviewSlides.length;
        updateReviewSlide();
    });