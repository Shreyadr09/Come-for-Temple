const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});
signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

//visibility of login form and main background
function openlogin() {
  document.getElementById("loginform").style.visibility = "visible";
  document.getElementById("content").style.visibility = "hidden";
  document.getElementById("myModal").style.visibility = "hidden";
}

var modal = document.getElementById("loginform");

// When the user clicks anywhere outside of the loginform, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.visibility = "hidden";
    document.getElementById("content").style.visibility = "visible";
  }
};

// contact form js
function addClass() {
  document.body.classList.add("sent");
}

sendLetter.addEventListener("click", addClass);

//login popup js
function signupcall() {
  let email = document.getElementById("mailsignup").value;
  let name = document.getElementById("usernamesignup").value;
  let password = document.getElementById("passwordsignup").value;
  localStorage.setItem(email, password);
}

function call() {
  var user = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  const a = localStorage.getItem(`${user}`);
  // window.location.href = "main.html";
  if (a === "") {
    alert("Wrong Details");
    return false;
    //yaha pe kuch daal dena agar no input to
  } else {
    if (a === pass) {
      alert("Log In Succesfull!");
      closepopup();
      // document.getElementById("submitonlogin").reset();
      edit_details();
      // window.location.href = "index.html";
    } else {
      alert("Wrong Details");
    }
  }
}

//visibility of logout modal and main background
function openlogout() {
  document.getElementById("outconfirmation").style.visibility = "visible";
}
function closelogout() {
  document.getElementById("outconfirmation").style.visibility = "hidden";
}

function yeslogout() {
  document.getElementById("outconfirmation").style.visibility = "hidden";
  if (document.getElementById("outdone") !== null) {
    document.getElementById("outdone").style.visibility = "visible";
    setTimeout(function () {
      document.getElementById("outdone").style.visibility = "hidden";
    }, 4000);
  }
}
