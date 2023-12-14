// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

    console.log("DOM loaded");

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e){

	if(window.innerWidth >= 768) {
        gsap.registerPlugin(ScrollTrigger)

        let container = document.getElementById("home-container-v2");

        // gsap.to(container, {
        //     x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
        //     ease: "none",
        //     scrollTrigger: {
        //         trigger: container,
        //         invalidateOnRefresh: true,
        //         pin: true,
        //         scrub: 1,
        //         end: () => "+=" + container.offsetWidth
        //     }
        // })

        let sections = gsap.utils.toArray(".home-section");

        gsap.to(sections, {
            xPercent: -100 * (sections.length - 1),
            ease: "none",
            scrollTrigger: {
                trigger: container,
                pin: true,
                scrub: 1,
                snap: 1 / (sections.length - 1),
                // base vertical scrolling on how wide the container is so it feels more natural.
                end: "+=3500",
            }
        });
		}

    }, false);

});