var bookArray = [];
const storedList = new Set();
function loadJson() {
    fetch("json/bookList.json")
    .then(response => {
        return response.json();
    })
    .then(jsonData => {
        let bookList = [];
        bookList = jsonData.books;
        let it = 0;
        bookList.forEach(element => {
            let temp = document.getElementsByClassName("bookList");
            let newCard = document.createElement('div');
            let newImg = document.createElement('img');
            let newBody = document.createElement('div');
            let newTitle = document.createElement('h4');
            let newDes = document.createElement('tooltip');
            let newButton = document.createElement('button');
            newCard.className = 'card';
            newTitle.className = 'card-title';
            newBody.className = 'card-body';
            newDes.className = 'tooltip';
            newImg.src = element.img;
            newImg.style.height = "350px"
            newBody.style = ""
            newButton.style = "  background-color: #4CAF50;border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"
            newTitle.textContent = element.subtitle;
            newDes.textContent = element.description;
            newButton.textContent = "Buy " + element.price + "$";
            
            newBody.appendChild(newTitle);
            newCard.appendChild(newImg);
            newCard.appendChild(newBody);
            newCard.appendChild(newButton);
            temp[it%3].appendChild(newCard);
            ++it;

        });
    })
}

loadJson();




