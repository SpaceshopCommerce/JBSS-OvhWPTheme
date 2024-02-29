document.addEventListener("DOMContentLoaded", () => {
  const handleizeTabTitle = (tabTitle) => {
    return tabTitle.toLowerCase().replace(/\s/g, "-");
  };

  const unhandleizeTabTitle = (tabTitle) => {
    return tabTitle.replace(/-/g, " ");
  };

  const addHashToLocation = (tabTitle) => {
    let tabHash = handleizeTabTitle(tabTitle);
    window.location.hash = tabHash;
  };

  const handleTabClick = (event) => {
    let tabItem = event.currentTarget;
    let tabId = tabItem.getAttribute("aria-controls");
    let tabTitle = tabItem.querySelector(".w-tabs-item-title").innerText;
    let tabHash = handleizeTabTitle(tabTitle);

    addHashToLocation(tabTitle);

    tabId = tabId.replace("content-", "");

    let tabContent = document.getElementById(tabId);

    if (tabContent) {
      let slickSlider = tabContent.querySelector(".slick-slider");

      if (slickSlider) {
        jQuery(slickSlider).slick("refresh");
      } 
    }
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
    let tabItem = document.querySelector(
      `.w-tabs-item[data-tab-hash="${pageHash.replace("#", "")}"]`
    );
    if (tabItem) {
      tabItem.click();
    }
  }
});
