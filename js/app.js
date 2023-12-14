// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){
  
  console.log("DOM loaded");
  
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function(e){
  
gsap.registerPlugin(ScrollTrigger)

let container = document.getElementById("section-container");

gsap.to(container, {
  x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
  ease: "none",
  scrollTrigger: {
    trigger: container,
    invalidateOnRefresh: true,
    pin: true,
    scrub: 1,
    end: () => "+=" + container.offsetWidth
  }
})

  }, false);
  
});