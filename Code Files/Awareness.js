// Next Button Variable
let nextBtn = document.querySelector('.next')
// Previous Button Variable
let prevBtn = document.querySelector('.prev')

// Slide, Sliderlist, thumbnail(images),thumbnail items (content) variables
let slider = document.querySelector('.slider')
let sliderList = slider.querySelector('.slider .list')
let thumbnail = document.querySelector('.slider .thumbnail')
let thumbnailItems = thumbnail.querySelectorAll('.item')

thumbnail.appendChild(thumbnailItems[0])

// Next Button Function 
nextBtn.onclick = function() {
    moveSlider('next')
}


// Previous Button Function
prevBtn.onclick = function() {
    moveSlider('prev')
}

// Logic of Slider Moving

function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item')
    let thumbnailItems = document.querySelectorAll('.thumbnail .item')

    // If direction arrow is nextthen forward
    if(direction === 'next'){
        sliderList.appendChild(sliderItems[0])
        thumbnail.appendChild(thumbnailItems[0])
        slider.classList.add('next')
        // Else move backward
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1])
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
        slider.classList.add('prev')
    }
// Animation of movement and content loading

    slider.addEventListener('animationend', function() {
        if(direction === 'next'){
            slider.classList.remove('next')
        } else {
            slider.classList.remove('prev')
        }
    }, {once: true}) // Remove the event listener after it's triggered once
}
