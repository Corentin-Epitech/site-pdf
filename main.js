counter = 0

function addComp() {
    
    counter += 1
    parentDiv = document.getElementById("preview-comp");
    directory = document.getElementById("comp")
    test = directory.getElementsByTagName("div")
    if  (Array.from(test).length < 20) {
    Input = document.getElementById("comp-input")
    newContent = document.createTextNode(Input.value);
    newDiv = document.createElement("div");
    newDiv.setAttribute("class","comp-" + counter)
    newElement = document.createElement("p")
    newElement.setAttribute('id','comp-'+ counter)
    newElement.appendChild(newContent);
    newDiv.appendChild(newElement)

    Input = document.getElementById("level")
    newContent = document.createTextNode(Input.value);
    newElement = document.createElement("p")
    newElement.setAttribute('id','select-'+ counter)
    newElement.appendChild(newContent);
    newDiv.appendChild(newElement)
    parentDiv.appendChild(newDiv)

    parentDiv = document.getElementById("comp")
    newDiv = document.createElement("div")
    newDiv.setAttribute("class","comp-" + counter)
    element = document.getElementById("comp-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','comp-input-' + counter)
    clone.setAttribute('name','comp[]')
    clone.setAttribute('oninput',"document.getElementById('comp-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)
    element = document.getElementById("level")
    clone = element.cloneNode(true)
    clone.setAttribute('id','level-' + counter)
    clone.setAttribute('name','comp[]')
    clone.selectedIndex = element.selectedIndex
    clone.setAttribute('oninput',"document.getElementById('select-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    button = document.createElement("button")
    button.setAttribute("type","button")
    button.onclick = function() {box = document.getElementsByClassName(this.parentNode.className); Array.from(box).forEach(function (item) {item.remove()}) }
    newDiv.appendChild(button)
    parentDiv.appendChild(newDiv)
    }

    else {
       alert("Vous ne pouvez pas ajouter plus de compétences")
    }

    // Tentative d'opti du code , revenir plus tard : 
    // boite = document.getElementsByClassName("comp")
    // Array.from(boite).forEach(
    //     function (item) {
    //         parentDiv = document.getElementById("preview-comp");
    //         Input = document.getElementById(item.id)
    //         newContent = document.createTextNode(Input.value);
    //         newDiv = document.createElement("div");
    //         newDiv.setAttribute("class","preview-comp-" + counter)
    //         newElement = document.createElement("p")
    //         newElement.appendChild(newContent);
    //         newDiv.appendChild(newElement)
    //         parentDiv.appendChild(newDiv)
    //         parentDiv = document.getElementById("comp")
    //         newDiv = document.createElement("div")
    //         newDiv.setAttribute("class","clone-comp-" + counter)
    //         element = document.getElementById(item.id)
    //         clone = element.cloneNode(true)
    //         clone.setAttribute('id','comp-input-' + counter)
    //         clone.setAttribute('class','comp-' + counter)
    //         clone.selectedIndex = element.selectedIndex
    //         newDiv.appendChild(clone)
    //         parentDiv.appendChild(newDiv)
    //     }
    // )
    //     button = document.createElement("button")
    //     button.setAttribute("type","button")
    //     button.onclick = function() {box = document.getElementsByClassName(this.parentNode.className); Array.from(box).forEach(function (item) {item.remove()}) }
    //     newDiv.appendChild(button)
}



function addExp() {

    directory = document.getElementById("experiences")
    test = directory.getElementsByTagName("div")

    if (Array.from(test).length < 6) {
    parentDiv = document.getElementById("preview-experiences")
    newDiv = document.createElement("div")
    counter += 1;
    newDiv.setAttribute('class','exp-list-' + counter)

    Input = document.getElementById("nom-poste-input")
    newItem = document.createElement("h2")
    newItem.setAttribute("id","nom-poste-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("nom-entreprise-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","nom-entreprise-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("exp-date-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","exp-date-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("exp-date-fin-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","exp-date-fin-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("desc-exp-input")
    newItem = document.createElement("p")
    newItem.setAttribute("id","desc-exp-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)
    parentDiv.appendChild(newDiv)

    parentDiv = document.getElementById("experiences")
    newDiv = document.createElement("div")
    newDiv.setAttribute('class','exp-list-' + counter)

    element = document.getElementById("nom-poste-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','nom-poste-input-' + counter)
    clone.setAttribute('name','exp[]')
    clone.setAttribute('oninput',"document.getElementById('nom-poste-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("nom-entreprise-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','nom-entreprise-input-' + counter)
    clone.setAttribute('name','exp[]')
    clone.setAttribute('oninput',"document.getElementById('nom-entreprise-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("exp-date-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','exp-date-input-' + counter)
    clone.setAttribute('name','exp[]')
    clone.setAttribute('oninput',"document.getElementById('exp-date-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("exp-date-fin-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','exp-date-fin-input-' + counter)
    clone.setAttribute('name','exp[]')
    clone.setAttribute('oninput',"document.getElementById('exp-date-fin-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("desc-exp-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','desc-exp-input-' + counter)
    clone.setAttribute('name','exp[]')
    clone.setAttribute('oninput',"document.getElementById('desc-exp-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)


    button = document.createElement("button")
    button.onclick = function() {box = document.getElementsByClassName(this.parentNode.className); Array.from(box).forEach(function (item) {item.remove()}) }
    newDiv.appendChild(button)

    parentDiv.appendChild(newDiv)
    }
    else {
        alert("Vous ne pouvez pas ajouter plus d'expériences")
    }
}

function addForm() {
    directory = document.getElementById("formations")
    test = directory.getElementsByTagName("div")

    if (Array.from(test).length < 6) {
    parentDiv = document.getElementById("preview-formations")
    newDiv = document.createElement("div")
    counter += 1;
    newDiv.setAttribute('class','form-list-' + counter)

    Input = document.getElementById("nom-formations-input")
    newItem = document.createElement("h2")
    newItem.setAttribute("id","nom-formations-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("etab-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","etab-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("form-date-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","form-date-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("form-date-fin-input")
    newItem = document.createElement("h3")
    newItem.setAttribute("id","form-date-fin-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)

    Input = document.getElementById("desc-form-input")
    newItem = document.createElement("p")
    newItem.setAttribute("id","form-exp-" + counter)
    newContent = document.createTextNode(Input.value)
    newItem.appendChild(newContent)
    newDiv.appendChild(newItem)
    parentDiv.appendChild(newDiv)

    parentDiv = document.getElementById("formations")
    newDiv = document.createElement("div")
    newDiv.setAttribute('class','form-list-' + counter)

    element = document.getElementById("nom-formations-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','nom-formations-input-' + counter)
    clone.setAttribute('name','form[]')
    clone.setAttribute('oninput',"document.getElementById('nom-formations-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("etab-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','etab-input-' + counter)
    clone.setAttribute('name','form[]')
    clone.setAttribute('oninput',"document.getElementById('etab-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("form-date-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','form-date-input-' + counter)
    clone.setAttribute('name','form[]')
    clone.setAttribute('oninput',"document.getElementById('form-date-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("exp-date-fin-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','exp-date-fin-input-' + counter)
    clone.setAttribute('name','form[]')
    clone.setAttribute('oninput',"document.getElementById('form-date-fin-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)

    element = document.getElementById("desc-form-input")
    clone = element.cloneNode(true)
    clone.setAttribute('id','desc-form-input-' + counter)
    clone.setAttribute('name','form[]')
    clone.setAttribute('oninput',"document.getElementById('desc-form-"+ counter + "').innerHTML = this.value")
    newDiv.appendChild(clone)


    button = document.createElement("button")
    button.onclick = function() {box = document.getElementsByClassName(this.parentNode.className); Array.from(box).forEach(function (item) {item.remove()}) }
    newDiv.appendChild(button)

    parentDiv.appendChild(newDiv)
    }
    else {
        alert("Vous ne pouvez pas ajouter plus d'expériences")
    }
}


function addValue() {
    value = document.getElementById("preview")
    
    input = document.getElementById("hidden-input")
    input.value = value.innerHTML
    console.log(input)
}