// Select all menu items
const allNavLink = document.querySelectorAll('.navbar-nav .nav-link');
let targetDiv = document.querySelector('.optional-menu');
let acitiveMenu = document.querySelector('.active-menu');
let timeline = gsap.timeline({ paused: true });
const targetRect = targetDiv.getBoundingClientRect();
let acitiveMenuRect = acitiveMenu.getBoundingClientRect();
let position = 0;
let animationAllowed = true;


function afterOnComplete(__this, element) {
  // __this.classList.add('active');
  element.classList.add('moved');
}
// Function to animate non-clicked .nav-link items from the bottom
function animateOtherNavLinks(clickedElement) {
  // Reverse the array to start animation from the bottom-most element
  const reversedNavLinks = [...allNavLink].reverse();
  let position = 0; // Variable to handle position offset for stacking


  allNavLink.forEach((otherElement, index) => {
    if (otherElement === clickedElement) return // Skip clicked element
    const clickedElementRect = clickedElement.getBoundingClientRect();
    const otherRect = otherElement.getBoundingClientRect();

    // const yOffset    = clickedElementRect.top - otherRect.top;
    const xOffset = clickedElementRect.left - otherRect.left + position;
    const otherWidth = getTextWidth(otherElement);
    clickedElement.classList.add('active');
    if (index == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        x: xOffset,
        duration: 2,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
    }
    const yOffset = allNavLink[allNavLink.length - 1].getBoundingClientRect().top - otherRect.top;
    if ((index + 1) == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        y: yOffset,
        duration: 0.2,
        delay: 0.4,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
      gsap.to(otherElement, {
        x: xOffset,
        duration: 1.7,
        delay: .7,
        ease: "power1.out",
      });
    }
    if ((index + 2) == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        y: yOffset,
        duration: .3,
        delay: .6,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
      gsap.to(otherElement, {
        x: xOffset,
        duration: 1.4,
        delay: 1,
        ease: "power1.out",
      });
    }

    if ((index + 3) == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        y: yOffset,
        duration: .5,
        delay: .8,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
      gsap.to(otherElement, {
        x: xOffset,
        duration: 1.1,
        delay: 1.3,
        ease: "power1.out",
      });
    }
    if ((index + 4) == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        y: yOffset,
        duration: 0.9,
        delay: 1,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
      gsap.to(otherElement, {
        x: xOffset,
        duration: .8,
        delay: 1.5,
        ease: "power1.out",
      });
    }
    if ((index + 5) == (allNavLink.length - 1)) {
      gsap.to(otherElement, {
        y: yOffset,
        duration: 1.1,
        delay: 1.2,
        ease: "power1.out",
        onComplete: () => {
          afterOnComplete(clickedElement, otherElement);
        }
      });
    }
    // Update the position for stacking subsequent elements
    position += otherWidth + 20; // Adding some space between elements
  });

}


// Event listener for each nav-link
allNavLink.forEach((element) => {
  element.addEventListener('click', () => {
    if (!animationAllowed) return;

    animationAllowed = false;
    timeline.kill();
    timeline = gsap.timeline({ paused: true });
    position = 0;

    const clickedItemRect = element.getBoundingClientRect();
    const __ySpace = clickedItemRect.top - acitiveMenuRect.top;
    animateOtherNavLinks(element);
    timeline.play();
    setTimeout(() => {
      animateClickedElement(element, __ySpace);
    }, (allNavLink.length - 1) * 500);
  });
});

// Function to animate the clicked element
function animateClickedElement(element, ySpace) {
  gsap.to(element, {
    y: -ySpace, // Move right by 80px
    duration: 0.3,
    delay: 1,
    onComplete: () => {
      const elementClass = element.innerText.toLowerCase();
      const activeDesc = document.querySelector(`.description.${elementClass}`);
      if (activeDesc) {
        activeDesc.classList.add('d-block');
        gsap.fromTo(activeDesc, { opacity: 0 }, { opacity: 1, duration: 2 });
      }
    }
  });
}

function getTextWidth(element) {
  const computedStyle = window.getComputedStyle(element);
  let text = element.textContent.trim();
  if (computedStyle.textTransform === 'uppercase') {
    text = text.toUpperCase();
  } else if (computedStyle.textTransform === 'lowercase') {
    text = text.toLowerCase();
  }

  const canvas = document.createElement('canvas');
  const context = canvas.getContext('2d');
  const fontStyle = computedStyle.fontStyle;
  const fontWeight = computedStyle.fontWeight;
  const fontSize = computedStyle.fontSize;
  const fontFamily = computedStyle.fontFamily;
  context.font = `${fontStyle} ${fontWeight} ${fontSize} ${fontFamily}`;
  const textWidth = context.measureText(text).width;
  return textWidth;
}


// Moved menu related animation
$(document).on('click', '.nav-link.moved', function () {
  const clickedElement = this; // Store the clicked element
  const activeMenu = document.querySelector('.nav-link.active'); // Current active menu

  // Store the text and link of the clicked element
  const clickedText = clickedElement.innerText;
  const clickedLink = clickedElement.getAttribute('href');

  // Store the text and link of the active menu
  const activeText = activeMenu.innerText;
  const activeLink = activeMenu.getAttribute('href');

  // Create GSAP timelines for the clicked element and active menu
  const tlClicked = gsap.timeline();
  const tlActive = gsap.timeline();

  // Fade out the clicked element, update text & link, then fade in
  tlClicked.to(clickedElement, {
    opacity: 0,
    duration: 1, // Fade-out duration
    ease: "power2.inOut",
    onComplete: () => {
      // Update the clicked element with the active menu's values
      clickedElement.innerText = activeText;
      clickedElement.setAttribute('href', activeLink);
    }
  })
    .to(clickedElement, {
      opacity: 1,
      duration: 1, // Fade-in duration
      ease: "power2.inOut"
    });

  // Fade out the active menu, update text & link, then fade in
  tlActive.to(activeMenu, {
    opacity: 0,
    duration: 1, // Fade-out duration
    ease: "power2.inOut",
    onComplete: () => {
      // Update the active menu with the clicked element's values
      activeMenu.innerText = clickedText;
      activeMenu.setAttribute('href', clickedLink);
    }
  })
    .to(activeMenu, {
      opacity: 1,
      duration: 1, // Fade-in duration
      ease: "power2.inOut",
    });
});


$(document).on('click', '.nav-link.moved', function () {
  const allDescriptions = document.querySelectorAll('.description');
  allDescriptions.forEach((desc) => {
    desc.classList.remove('d-block');
  });
  const activeItemClass = this.innerText.toLowerCase();
  const activeDesc = document.querySelector(`.description.${activeItemClass}`);
  if (activeDesc) {
    activeDesc.classList.add('d-block');
    gsap.fromTo(activeDesc, { opacity: 0 }, { opacity: 1, duration: 1 });
  }
  setTimeout(() => {
    const activeItem = this;
    const activeMenu = document.querySelector('.nav-link.active');
    const getClickedItemWidth = getTextWidth(activeItem);
    const getActiveMenuWidth = getTextWidth(activeMenu);
    const needToAdjustWidth = getClickedItemWidth - getActiveMenuWidth;
    const navItems = document.querySelectorAll('.navbar-nav .nav-item');
    if (!activeItem) return;
    const activeLi = activeItem.closest('.nav-item');
    const itemsAfterActive = Array.from(navItems).slice(
      Array.from(navItems).indexOf(activeLi) + 1
    );

    const tl = gsap.timeline();
    itemsAfterActive.forEach((item, index) => {
      const singleEle = item.querySelector('.nav-link');
      if (!singleEle.classList.contains('active')) {
        const currentTransform = window.getComputedStyle(singleEle).transform;
        if (currentTransform !== 'none') {
          const matrixValues = currentTransform.match(/matrix.*\((.+)\)/)[1].split(', ');
          const currentTranslateX = parseFloat(matrixValues[4]);
          let finalXValue;
          console.log('getClickedItemWidth', getClickedItemWidth);
          console.log('getActiveMenuWidth', getActiveMenuWidth);

          if (getClickedItemWidth < getActiveMenuWidth) {
            finalXValue = currentTranslateX + Math.abs(needToAdjustWidth);
            console.log('one', finalXValue);
          } else {
            finalXValue = currentTranslateX - needToAdjustWidth;
            console.log('two', finalXValue);
          }
          tl.to(singleEle, {
            duration: 1,
            x: finalXValue,
            ease: "power1.out",
            onComplete: () => {

            }
          });
        }
      }

    });
  }, 200);

});
