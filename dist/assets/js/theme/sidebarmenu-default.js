document.addEventListener("DOMContentLoaded", function () {
  var layoutType = document.documentElement.getAttribute("data-layout");

  if (layoutType === "vertical") {
    // ----------------------------------------
    // Handle active files and URL adjustments
    // ----------------------------------------
    var currentURL = window.location !== window.parent.location
      ? document.referrer
      : document.location.href;

    var link = document.getElementById("get-url");
    if (link) {
      if (currentURL.includes("/main/index.php")) {
        link.setAttribute("href", "../main/index.php");
      } else if (currentURL.includes("/index.php")) {
        link.setAttribute("href", "./index.php");
      } else {
        link.setAttribute("href", "./");
      }
    } else {
      console.warn("Element with ID 'get-url' not found.");
    }

    // ----------------------------------------
    // Find matching sidebar element
    // ----------------------------------------
    function findMatchingElement() {
      var currentUrl = window.location.href;
      var anchors = document.querySelectorAll("#sidebarnav a");
      for (var i = 0; i < anchors.length; i++) {
        if (anchors[i].href === currentUrl) {
          return anchors[i];
        }
      }
      return null; // No matching element
    }

    var activeElement = findMatchingElement();
    if (activeElement) {
      activeElement.classList.add("active");
    } else {
      console.warn("No matching sidebar element found.");
    }

    // ----------------------------------------
    // Add active and selected states
    // ----------------------------------------
    document
      .querySelectorAll("#sidebarnav a.active")
      .forEach(function (link) {
        var closestUl = link.closest("ul");
        if (closestUl) {
          closestUl.classList.add("in");
          var parentLi = closestUl.closest("li");
          if (parentLi) {
            parentLi.classList.add("selected");
          }
        } else {
          console.warn("No parent <ul> found for", link);
        }
      });

    document.querySelectorAll("#sidebarnav li").forEach(function (li) {
      if (li.classList.contains("selected")) {
        var anchor = li.querySelector("a");
        if (anchor) {
          anchor.classList.add("active");
        }
      }
    });

    // ----------------------------------------
    // Handle sidebar menu clicks
    // ----------------------------------------
    document.querySelectorAll("#sidebarnav a").forEach(function (link) {
      link.addEventListener("click", function (e) {
        var isActive = this.classList.contains("active");
        var parentUl = this.closest("ul");

        if (parentUl) {
          if (!isActive) {
            // Hide open menus and remove classes
            parentUl.querySelectorAll("ul").forEach(function (submenu) {
              submenu.classList.remove("in");
            });
            parentUl.querySelectorAll("a").forEach(function (navLink) {
              navLink.classList.remove("active");
            });

            // Open new menu and add class
            var submenu = this.nextElementSibling;
            if (submenu && submenu.tagName === "UL") {
              submenu.classList.add("in");
            }
            this.classList.add("active");
          } else {
            this.classList.remove("active");
            parentUl.classList.remove("active");
            var submenu = this.nextElementSibling;
            if (submenu && submenu.tagName === "UL") {
              submenu.classList.remove("in");
            }
          }
        }
      });
    });
  }

  if (layoutType === "horizontal") {
    // ----------------------------------------
    // Handle horizontal layout
    // ----------------------------------------
    function findMatchingElementHorizontal() {
      var currentUrl = window.location.href;
      var anchors = document.querySelectorAll("#sidebarnavh a");
      for (var i = 0; i < anchors.length; i++) {
        if (anchors[i].href === currentUrl) {
          return anchors[i];
        }
      }
      return null; // No matching element
    }

    var activeElementHorizontal = findMatchingElementHorizontal();
    if (activeElementHorizontal) {
      activeElementHorizontal.classList.add("active");
    } else {
      console.warn("No matching horizontal sidebar element found.");
    }

    document
      .querySelectorAll("#sidebarnavh a.active")
      .forEach(function (link) {
        var parentLi = link.closest("li");
        if (parentLi) {
          parentLi.classList.add("selected");
          var grandParentUl = parentLi.closest("ul");
          if (grandParentUl) {
            var grandParentLi = grandParentUl.closest("li");
            if (grandParentLi) {
              grandParentLi.classList.add("selected");
            }
          }
        }
      });
  }
});
