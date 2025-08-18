//Tab
const tabsBtn = document.querySelectorAll(".tabs_platform__nav-btn");
const tabsItems = document.querySelectorAll(".tabs_platform__item");

tabsBtn.forEach(onTabClick);

function onTabClick(item) {
  item.addEventListener("click", function () {
    let currentBtn = item;
    let tabId = currentBtn.getAttribute("data-tab");
    let currentTab = document.querySelector(tabId);

    if (!currentBtn.classList.contains("active")) {
      tabsBtn.forEach(function (item) {
        item.classList.remove("active");
      });

      tabsItems.forEach(function (item) {
        item.classList.remove("active");
      });

      currentBtn.classList.add("active");
      currentTab.classList.add("active");
    }
  });
}

//UnderTab
const underTabsBtn = document.querySelectorAll(".underTabs_platform__nav-btn");
const underTabsItems = document.querySelectorAll(".underTabs_platform__item");

underTabsBtn.forEach(onUnderTabClick);

function onUnderTabClick(item) {
  item.addEventListener("click", function () {
    let currentBtns = item;
    let underTabId = currentBtns.getAttribute("data-tab");
    let currentUnderTab = document.querySelector(underTabId);

    if (!currentBtns.classList.contains("active")) {
      underTabsBtn.forEach(function (item) {
        item.classList.remove("active");
      });

      underTabsItems.forEach(function (item) {
        item.classList.remove("active");
      });

      currentBtns.classList.add("active");
      currentUnderTab.classList.add("active");
    }
  });
}

//Accordion
const accordionBtns = document.querySelectorAll(".accordion-item__btn");

accordionBtns.forEach((accordionBtn) => {
  accordionBtn.addEventListener("click", (event) => {
    const currentAccordionBtn = document.querySelector(
      ".accordion-item__btn.active"
    );
    if (currentAccordionBtn && currentAccordionBtn !== accordionBtn) {
      currentAccordionBtn.classList.toggle("active");
      currentAccordionBtn.nextElementSibling.style.maxHeight = 0;
    }

    accordionBtn.classList.toggle("active");

    const accordionItemBody = accordionBtn.nextElementSibling;
    if (accordionBtn.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});
const nav_btn = document.querySelector(".underTabs_platform__nav-btn")
if (nav_btn) {
  nav_btn.click();
}
const tab = document.querySelector(".tabs_platform__nav-btn");
if  (tab) {
  tab.click();
}


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}