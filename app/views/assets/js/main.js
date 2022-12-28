/*
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} */


// about us page
let form = document.getElementById("contact");
form.addEventListener(
    "submit",
    function (event) {
        event.preventDefault();
        let elements = form.elements;
        let payload = {};
        for (let i = 0; i < elements.length; i++) {
            let item = elements.item(i);
            switch (item.type) {
                case "checkbox":
                    payload[item.name] = item.checked;
                    break;
                case "submit":
                    break;
                default:
                    payload[item.name] = item.value;
                    break;
            }
        }
        // Place your API call here to submit your payload.
        // console.log("payload", payload);
    },
    true
);


// about us end