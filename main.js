Input = document.getElementById("comp-input")
button = document.getElementById("comp-button")

function addText() {
    
    newContent = document.createTextNode(Input.value);
    parentDiv = document.getElementById("comp");
    newDiv = document.createElement("p");
    newDiv.classList.add("comp-list")
    newDiv.appendChild(newContent);
    parentDiv.appendChild(newDiv)
}