/*----- MOBILE_MENU_START -----*/
$(".header-menu-icon-NIPLp").click(function() {
	$(".header-menu-icon-NIPLp .menu-toggle-btn-hp").toggleClass("open");
	$(".LP-navigation-NIPhp").toggleClass("LP-navigation-open-NIPhp");
	
});

$(".mobile-menu-icon-hp").click(function() {
	$(".menu-toggle-btn-hp").toggleClass("open");
	//$(".navigation-CChp").toggleClass("navigation-open");
	$(".navigation-NIPhp").slideToggle();
	$("body").toggleClass("hide-scroll");
});
/*----- MOBILE_MENU_END -----*/


// $(".optiscroll").optiscroll({ forceScrollbars: true })


/*----- FIX_HEADER_START -----*/
$(function(){
	// Check the initial Poistion of the Sticky Header
	//var stickyHeaderTop = $('#fixedHeader').offset().top-1;
	var stickyHeaderTop = 0;
	$(window).scroll(function(){
		var width=$(window).width();
		if( $(window).scrollTop() > stickyHeaderTop ) {
			if($('body').hasClass("fix-header") == false)
			{
				$("#header").css("margin-top","0px");
				$('body').addClass('fix-header');
				$("#header").animate({marginTop: "0px"},800);
				
			}
			if($('body').hasClass("fix-header") == true)
			{
				$("#header").css("display","block");
			}
		} else {
			$("#header").css("display","block");
			$('body').removeClass('fix-header');
			$("#header").css("margin-top","");
		}
	});
});
/*----- FIX_HEADER_END -----*/

$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
});




// Move working scripts
const allNavLink = document.querySelectorAll('.nav-link');
let targetDiv = document.querySelector('.optional-menu');
let acitiveMenu = document.querySelector('.active-menu');
let timeline = gsap.timeline({ paused: true });
const targetRect = targetDiv.getBoundingClientRect();
let acitiveMenuRect = acitiveMenu.getBoundingClientRect();
let position = 0;
let animationAllowed = true;

// Helper to get text width
function getTextWidth(element) {
    return element.offsetWidth || element.getBoundingClientRect().width;
}

// Helper to save getBoundingClientRect data to localStorage with a unique identifier
function saveRectDataToLocalStorage() {
    const rectData = {};
    allNavLink.forEach((element) => {
        const elementId = element.innerText.toLowerCase(); // Use the innerText as a unique identifier
        const rect = element.getBoundingClientRect();
        rectData[elementId] = {
            top: rect.top,
            left: rect.left,
            width: rect.width,
            height: rect.height,
            bottom: rect.bottom,
        };
    });
    // Save the rect data to localStorage using a specific key
    localStorage.setItem('navLinkRects', JSON.stringify(rectData));
}

// Function to animate non-clicked .nav-link items
function animateOtherNavLinks(clickedElement) {
    allNavLink.forEach((otherElement) => {
        if (otherElement === clickedElement) return; // Skip clicked element
        const yOffset = targetRect.top - otherElement.getBoundingClientRect().top;
        const xOffset = targetRect.left - otherElement.getBoundingClientRect().left + position;
        const otherWidth = getTextWidth(otherElement);
        timeline.to(otherElement, {
            duration: 1,
            x: xOffset, // Horizontal offset
            y: yOffset, // Stack vertically
            ease: "power1.out",
            onComplete: () => {
                otherElement.classList.add('moved');
            },
        });

        // Store Y offset in localStorage with key based on text
        const key = otherElement.innerText.toLowerCase();
        const offsets = { x: xOffset, y: yOffset };
        localStorage.setItem(key, JSON.stringify(offsets)); // Save as JSON
        position += otherWidth + 20; // Update position for stacking
    });
}

// Function to animate the clicked element
function animateClickedElement() {
    gsap.to(item, {
        x: 80, // Move right by 80px
        duration: 0.5,
        delay: delay,
    });
}

// Function to retrieve rect data from localStorage using unique identifier
function getRectDataFromLocalStorage(element) {
    const savedRectData = localStorage.getItem('navLinkRects');
    if (!savedRectData) return null;
    
    const rectData = JSON.parse(savedRectData);
    const elementId = element.innerText.toLowerCase(); // Unique identifier
    return rectData[elementId] || null; // Return the stored rect data for this element
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
        const ySpace = acitiveMenuRect.top - clickedItemRect.bottom;

        animateOtherNavLinks(element);

        // Play the timeline and animate the clicked element after others
        timeline.play();
        setTimeout(() => {
            animateClickedElement();
        }, (allNavLink.length - 1) * 1000);
    });
});

function saveRectDataForTargetMenu() {
    // Save the rect data to localStorage using a specific key
    localStorage.setItem('rectForOptionalMenu', JSON.stringify(targetRect));
}

// Save the bounding rect data to localStorage when the page loads
window.addEventListener('load', saveRectDataToLocalStorage);
window.addEventListener('load', saveRectDataForTargetMenu);

const someElement = document.querySelector('.nav-link');
const rectDataForElement = getRectDataFromLocalStorage(someElement);


// Register GSAP plugins
gsap.registerPlugin(Flip);
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


$(document).on('click', '.nav-link.moved', function () {
    // Add the moving class to clicked and other elements
    const activeItem = document.querySelector('.nav-link.active')
    const getActiveItemWidth = getTextWidth(activeItem);
    const targetRectFromStorage = localStorage.getItem('rectForOptionalMenu');
    const name = this.innerText.toLowerCase();
    const activeItemName = activeItem.innerText.toLowerCase();
    const clickedItemRect = getRectDataFromLocalStorage(name);
    const ySpace = acitiveMenuRect.top - clickedItemRect.bottom;
    const clickedItem = this.getBoundingClientRect();
    const activeItemRect = activeItem.getBoundingClientRect();
    const parseTargetRect = JSON.parse( targetRectFromStorage );

    const allDescriptions = document.querySelectorAll('.description');
    allDescriptions.forEach((desc) => {
        desc.classList.remove('d-block'); // Hide description for all items
    });
    const previousActiveMenu = document.querySelector('.active-menu');
    if (previousActiveMenu) {
        previousActiveMenu.classList.remove('active-menu');
    }
    if (activeItem) {
        activeItem.classList.remove('active');
    }
    const previousActiveRect = activeItem.getBoundingClientRect();    
    const getOffsetValue = localStorage.getItem(activeItemName);
    const parseGetOffsetValue = JSON.parse(getOffsetValue);

    const activeGetOffsetValue = localStorage.getItem(name);
    const activeActiveGetOffsetValue = JSON.parse(activeGetOffsetValue);

    gsap.to(this, {
        duration: 1,
        y: ySpace,
        x: clickedItemRect.left - previousActiveRect.left,
        ease: "power1.out",
    });
    

    gsap.to(activeItem, {
        duration: 1,
        x:  activeActiveGetOffsetValue.x,
        y:  parseGetOffsetValue.y,
        ease: "power1.out",
        onComplete: () => {
            this.classList.add('active');
            activeItem.classList.add('moved');
            const activeItemClass = this.innerText.toLowerCase();
            const activeDesc = document.querySelector(`.description.${activeItemClass}`);
            if (activeDesc) {
                activeDesc.classList.add('d-block');
                gsap.fromTo(activeDesc, { opacity: 0 }, { opacity: 1, duration: 2 });
            }
            this.parentElement.classList.add('active-menu');
        }
    });
    // const nextElement = this.parentElement.nextElementSibling
    // if (nextElement) {
    //     const nextElementLink = nextElement.querySelector('a');
    //     const nextElementName = nextElement.innerText.toLowerCase()
    //     const nextElementXOffset = localStorage.getItem(nextElementName);
    //     const nextElementXOffsetParse = JSON.parse(nextElementXOffset);
    //     console.log('nextElementXOffsetParse',nextElementXOffsetParse);
    //     console.log('getActiveItemWidth',getActiveItemWidth);
        
    //     gsap.to(nextElementLink, {
    //         duration: 1,
    //         x: nextElementXOffsetParse.x + getActiveItemWidth,
    //         ease: "power1.out",
    //     });
    // }
    
});

// Function to get value from localStorage using the unique identifier (e.g., 'shop', 'news')
function getRectDataFromLocalStorage(identifier) {
    const savedRectData = localStorage.getItem('navLinkRects');
    if (!savedRectData) {
        console.log('No data found in localStorage');
        return null;
    }
    const rectData = JSON.parse(savedRectData);
    return rectData[identifier] || null;
}





$(document).on('click', '.nav-link.moved', function () {
    // Add the moving class to clicked and other elements
    const activeItem            = document.querySelector('.nav-link.active')
    const allDescriptions       = document.querySelectorAll('.description');
    const name                  = this.innerText.toLowerCase();
    // const activeItemName        = activeItem.innerText.toLowerCase();
    const clickedItemRect       = getRectDataFromLocalStorage(name);
    const ySpace                = acitiveMenuRect.top - clickedItemRect.bottom;
  
    allDescriptions.forEach((desc) => {
      desc.classList.remove('d-block'); // Hide description for all items
    });
    const previousActiveMenu = document.querySelector('.active-menu');
    if (previousActiveMenu) {
        previousActiveMenu.classList.remove('active-menu');
    }
    // if (activeItem) {
    //     activeItem.classList.remove('active');
    // }
    const previousActiveRect = activeItem.getBoundingClientRect();    
    // const getOffsetValue = localStorage.getItem(activeItemName);
    // const parseGetOffsetValue = JSON.parse(getOffsetValue);
  
    // const activeGetOffsetValue = localStorage.getItem(name);
    // const activeActiveGetOffsetValue = JSON.parse(activeGetOffsetValue);
  
  // Fade out the currently active item
  // gsap.to(activeItem, {
  //   duration: 0.5,
  //   opacity: 0, // Fade out
  //   ease: "power1.out",
  //   onComplete: () => {
  //       activeItem.classList.remove('active'); // Remove active class
  //       activeItem.classList.remove('moved'); // Reset moved state if needed
  //       activeItem.style.transform = ""; // Reset position if necessary
  //   }
  // });
  
  // Instantly place the clicked item at the target position
  var tl = new TimelineMax();
  tl.to(this, {x:clickedItemRect.left - previousActiveRect.left, opacity:1})
      .to(this, {y:ySpace, opacity:0, ease:Power2.easeIn})
  // Fade in the clicked item
  // gsap.fromTo(this, 
  //   { opacity: 0 }, // Start fully transparent
  //   {
  //       duration: 0.5,
  //       opacity: 1, // Fade in
  //       ease: "power1.inOut",
  //       onStart: () => {
  //           this.style.zIndex = 10; // Ensure it's on top during transition
  //       },
  //       onComplete: () => {
  //           this.classList.add('active'); // Add active class
  //           this.parentElement.classList.add('active-menu'); // Update parent menu
  
  //           // Show description
  //           const activeItemClass = this.innerText.toLowerCase();
  //           const activeDesc = document.querySelector(`.description.${activeItemClass}`);
  //           if (activeDesc) {
  //               activeDesc.classList.add('d-block');
  //               gsap.fromTo(activeDesc, { opacity: 0 }, { opacity: 1, duration: 2 });
  //           }
  //       }
  //   }
  // );
  
    // gsap.fromTo(this, {
    //     duration: 0,
    //     y: ySpace,
    //     x: clickedItemRect.left - previousActiveRect.left,
    //     ease: "power1.out",
    //     onStart: () => {
    //         // Fade out the moved item
    //         gsap.fromTo(this, { opacity: 1 }, { opacity: 0.5, duration: 0.5 });
    //     },
    //     onComplete: () => {
    //         // Fade back in after moving
    //         gsap.fromTo(this, { opacity: 0.5 }, { opacity: 1, duration: 0.5 });
    //     }
    // });
  
  });