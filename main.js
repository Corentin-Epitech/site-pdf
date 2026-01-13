
button = document.getElementById("comp-button")

function addComp() {
    Input = document.getElementById("comp-input")
    newContent = document.createTextNode(Input.value);
    parentDiv = document.getElementById("comp");
    newDiv = document.createElement("p");
    newDiv.classList.add("comp-list")
    newDiv.appendChild(newContent);
    parentDiv.appendChild(newDiv)
}

function addExp() {
    parentDiv = document.getElementById("experiences")
    newDiv = document.createElement("div")
    newDiv.classList.add("exp-list")

    Input = document.getElementById("nom-poste")
    newItem = document.createElement("h2")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("nom-entreprise")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("exp-date")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("exp-date-fin")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("desc-exp")
    newItem = document.createElement("p")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    parentDiv.appendChild(newDiv)
}

function addForm() {
    parentDiv = document.getElementById("formations")
    newDiv = document.createElement("div")
    newDiv.classList.add("form-list")

    Input = document.getElementById("nom-formations")
    newItem = document.createElement("h2")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("etab")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("form-date")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("form-date-fin")
    newItem = document.createElement("h3")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("desc-form")
    newItem = document.createElement("p")
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    parentDiv.appendChild(newDiv)
}