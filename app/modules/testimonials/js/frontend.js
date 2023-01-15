const testimonials = document.querySelectorAll('.sm-testimonial-name-wrap');
const contentsHeading = document.querySelector('.sm-testimonial-contents h3');
const contentsParagraph = document.querySelector('.sm-testimonial-contents p');

const getActiveTestimonial = () => {
    let result = false;

    testimonials.forEach((testimonial) => {
        if(testimonial.classList.contains('sm-testimonial-active')){
            result = testimonial;
        }
    })

    return result;
}

const populateContents = (testimonial) => {
    contentsHeading.textContent = testimonial.getAttribute('testimonial-heading');
    contentsParagraph.textContent = testimonial.getAttribute('testimonial-paragraph');
}

const initTestimonial = () => {
    let activeTestimonial = getActiveTestimonial();

    if(activeTestimonial){
        populateContents(activeTestimonial);
    }
}

initTestimonial();

const clearTestimonials = () => {
    testimonials.forEach((testimonial) => {
        if(testimonial.classList.contains('sm-testimonial-active')){
            testimonial.classList.remove('sm-testimonial-active');
        }
    });
}
testimonials.forEach((testimonial) => {
    testimonial.addEventListener('click', (e) => {
        e.preventDefault();

        clearTestimonials();
        testimonial.classList.add('sm-testimonial-active');
        populateContents(testimonial);
    });
});