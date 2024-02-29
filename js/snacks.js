document.addEventListener("DOMContentLoaded", () => {
  const handleizeTabTitle = (tabTitle) => {
    return tabTitle.toLowerCase().replace(/\s/g, "-");
  };

  const addHashToLocation = (tabTitle, slideIndex = 0) => {
    let tabHash = handleizeTabTitle(tabTitle);
    window.location.hash = `${tabHash}?slide=${slideIndex}`;
  };

  const handleTabClick = (event) => {
    let tabItem = event.currentTarget;
    let tabTitle = tabItem.querySelector(".w-tabs-item-title").innerText;
    let tabHash = handleizeTabTitle(tabTitle);

    let tabId = tabItem.getAttribute("aria-controls");
    tabId = tabId.replace("content-", "");
    let tabContent = document.getElementById(tabId);

    if (tabContent) {
      let slickSlider = tabContent.querySelector(".slick-slider");

      if (slickSlider) {
        jQuery(slickSlider).slick("refresh");
        jQuery(slickSlider).on(
          "afterChange",
          function (event, slick, currentSlide) {
            addHashToLocation(tabTitle, currentSlide);
          }
        );
      }
    }

    addHashToLocation(tabTitle);
  };

  const tabItems = document.querySelectorAll(".w-tabs-item");
  tabItems.forEach((tabItem) => {
    tabItem.addEventListener("click", handleTabClick);
    let tabTitle = tabItem.querySelector(".w-tabs-item-title").innerText;
    let tabHash = handleizeTabTitle(tabTitle);
    tabItem.setAttribute("data-tab-hash", tabHash);
  });

  let pageHash = window.location.hash;
  if (pageHash) {
    let [tabHash, queryParams] = pageHash.split("?");
    let params = new URLSearchParams(queryParams);
    let slideIndex = params.get("slide");

    let tabItem = document.querySelector(
      `.w-tabs-item[data-tab-hash="${tabHash.replace("#", "")}"]`
    );
    if (tabItem) {
      let tabId = tabItem.getAttribute("aria-controls");
      tabId = tabId.replace("content-", "");
      let tabContent = document.getElementById(tabId);

      if (tabContent) {
        let slickSlider = tabContent.querySelector(".slick-slider");
        if (slickSlider && slideIndex !== null) {
          jQuery(slickSlider).slick("slickGoTo", parseInt(slideIndex));
        }
      }

      tabItem.click();
    }
  }
});
