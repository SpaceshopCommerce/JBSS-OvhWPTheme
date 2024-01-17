document.addEventListener("DOMContentLoaded", function () {
  console.log("snacks.js loaded");
  // Function to handle the click event
  function handleTabClick(event) {
    var tabItem = event.currentTarget;
    var tabId = tabItem.getAttribute("aria-controls");
    //strip out the string content- from the tabId
    tabId = tabId.replace("content-", "");

    // Find the element in the DOM with the ID equal to tabId
    var tabContent = document.getElementById(tabId);

    if (tabContent) {
      console.log("Tab content found:", tabContent);
      // Find the .slick-slider element within the tab content
      var slickSlider = tabContent.querySelector(".slick-slider");

      if (slickSlider) {
        // Refresh the slider
        jQuery(slickSlider).slick("refresh");

        console.log("Slick slider refreshed.");
      } else {
        console.log("No slick slider found in the tab content.");
      }
    } else {
      console.log("No content found for tabId:", tabId);
    }
  }

  // Attach the event listener to all elements with class 'w-tab-item'
  var tabItems = document.querySelectorAll(".w-tabs-item");
  tabItems.forEach(function (tabItem) {
    tabItem.addEventListener("click", handleTabClick);
  });
});
