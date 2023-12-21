// Initialize slideIndex variable for the first set of slides
let slideIndex = 1;

// Show the slides when the page loads
showSlides(slideIndex);

// Initialize separate slideIndex variables for two sets of slides
let slideIndex1 = 1;
let slideIndex2 = 1;

// Show initial slides
showSlides(slideIndex1, 1);
showSlides(slideIndex2, 2);

// Function to navigate to the next or previous slide
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Function to navigate to a specific slide
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Function to display the slides
function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("mySlides");

// Checks if the provided index n is greater than the total number of slides (slides.length). 
// If true, sets slideIndex to 1 (restart from the first slide).
// Checks if n is less than 1. If true, sets slideIndex to the last slide.
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Loops through all slides and sets their display property to "none" (hides them).
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Displays the slide at the current slideIndex by setting its display property to "block" (shows it).
  // Array indices are 0-based, so slideIndex - 1 is used to access the correct slide in the NodeList
  slides[slideIndex - 1].style.display = "block";
}