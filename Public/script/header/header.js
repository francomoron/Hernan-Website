const user = document.getElementById("user");
const logOut = document.getElementById("log-out");
const dropDown = document.getElementsByClassName("dropdown");
const principalNavChilds = document.querySelector(".principal-nav").childNodes;
const arrowIcon = document.getElementsByClassName("arrow-icon");
const bar = document.getElementById("bar");

// Log Out Dropdown
user.addEventListener("click", () => {
  if (logOut.style.display == "") {
    logOut.style.display = "flex";
  } else {
    logOut.style.display = "";
  }
});

document.addEventListener("mouseup", (e) => {
  if (!user.contains(e.target)) {
    if ((logOut.style.display = "flex")) {
      logOut.style.display = "";
    }
  }
});

// Draw Arrow Icon
let i = 0;
while (i < dropDown.length) {
  const arrowIcon = document.createElement("i");
  arrowIcon.classList.add(
    "fa-sharp",
    "fa-solid",
    "fa-caret-down",
    "arrow-icon"
  );
  if (dropDown[i].id !== "log-out" && dropDown[i].childElementCount > 0) {
    dropDown[i].appendChild(arrowIcon);
  }
  i++;
}

// Dropdown Effect

for (let i = 0; i < arrowIcon.length; i++) {
  arrowIcon[i].addEventListener("click", (e) => {
    arrowIcon[i].classList.toggle("rotate");
    const childs = e.target.parentNode.childNodes;
    for (let j = 0; j < childs.length; j++) {
      if (childs[j].nodeName == "LI") {
        if (childs[j].style.display == "") {
          childs[j].style.display = "block";
        } else {
          childs[j].style.display = "";
        }
      }
    }
  });
}

bar.addEventListener("click", (e) => {
  for (let i = 0; i < principalNavChilds.length; i++) {
    if (
      principalNavChilds[i].nodeName == "LI" &&
      principalNavChilds[i].className !== "page-name"
    ) {
      if (principalNavChilds[i].style.display == "") {
        principalNavChilds[i].style.display = "block";
      } else {
        principalNavChilds[i].style.display = "";
      }
    }
  }
});
