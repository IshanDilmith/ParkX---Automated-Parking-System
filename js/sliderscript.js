//java script for image slider

const track = document.querySelector('.slider_tracker'); //getting slider tracker 
const slides = Array.from(track.children);// extracting slides from slider tracker
console.log(slides);
const nextButton = document.querySelector('.slider_btn--right');
const prevButton = document.querySelector('.slider_btn--left');
const indicators = document.querySelectorAll('.indicator');


const slidesSize = slides[0].getBoundingClientRect();// getting size of slides
const slideWidth = slidesSize.width;
console.log(slidesSize);

//fuction to move slides
function moveSlides(track, currentSlide, targetSlide){
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');

    //to indicate current slide in slide indicator
    const currentIndex = slides.indexOf(currentSlide);
    const targetIndex = slides.indexOf(targetSlide);
    indicators[currentIndex].classList.remove('indicator-current');
    indicators[targetIndex].classList.add('indicator-current');

}



//arrange slides netx to other
const set_sliderPos = (slide, index) =>{
    slide.style.left = slideWidth*index+'px';
};
slides.forEach(set_sliderPos);


//move slides to left
prevButton.addEventListener('click',e =>{

    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    moveSlides(track,currentSlide,prevSlide);

})


//move slides to right
nextButton.addEventListener('click',e =>{

    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    moveSlides(track,currentSlide,nextSlide);

})