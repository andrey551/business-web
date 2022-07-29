function loginOnClick () {
    let loginEmail = document.getElementById("usernameInput").value;
    let loginPassword = document.getElementById("passwordInput").value;
    var xhttp = new XMLHttpRequest();
    const url = "../../../../Backend/Authentication/loginAuth.php";
    let data = {
      username : loginEmail,
      password : loginPassword
    }
    xhttp.open("POST", url, true);
    xhttp.send(JSON.stringify(data));

    xhttp.onreadystatechange = function() {
      if (this.status==200 && this.readyState == 4) {
          document.getElementById("text").textContent=this.responseText;        
        }
  }
}