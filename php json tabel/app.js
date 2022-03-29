var option = document.querySelector("#option");


fetch('./data.json')
.then((response) => response.json())
.then((data) => {
    
   let op = data.map(function(e){
        return`<option value="${e.number}">${e.name}</option>`;
    })

    op = op.join("");
    option.innerHTML = op;
})

var item = document.querySelectorAll("#item");

item.forEach(function(e){
    e.addEventListener("change",function(){
        switch (e.value) {
            case"name":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case"age":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case"address":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case "dateofbirth":
            document.querySelector(".edit").setAttribute("type","date");
            break;
            case"id":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case"subject":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case"number":
            document.querySelector(".edit").setAttribute("type","text");
            break;
            case"link":
            document.querySelector(".edit").setAttribute("type","text");
            break;
        
            default:
                break;
        }
    })
})
