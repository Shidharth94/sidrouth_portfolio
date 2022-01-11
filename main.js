const typedTextSpan = document.querySelector(".typed-text");

const textArray = ["Welcome fellow web surfers !!","I'm Shidharth  Routh.", "I'm a Research Enthusiast.", "I've a keen interest in GIS and..", "..it's Deep Learning applications.", "I like writing scripts.", "I love learning new concepts..", "..and applying them to projects."];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 2500;
let textArrayIndex = 0;
let charIndex = 0;

function type() {
    if(charIndex<textArray[textArrayIndex].length) {
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    }
    else {
        setTimeout(erase, newTextDelay);
    }
}

function erase() {
    if(charIndex>0) {
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
        charIndex--;
        setTimeout(erase, erasingDelay);
    }
    else {
        textArrayIndex++;
        if(textArrayIndex>=textArray.length) textArrayIndex=0;
        type();
    }
}

window.onload = type;

