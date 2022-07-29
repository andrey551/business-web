function addBookOnAction() {
    let jsonFile = JSON.parse(window.createObjectURL(document.getElementById("jsonFile").files[0]));

    var xhttp = new XMLHttpRequest();
    const url = "../../../../Backend/Collection/addBook.php";


    xhttp.open("POST", url, true);
    xhttp.send(jsonFile);

    xhttp.onreadystatechange = function() {
        if (this.status==200 && this.readyState == 4) {
            document.getElementById("jsonFile").textContent=this.responseText;        
        }
    }
    alert(jsonFile);
}