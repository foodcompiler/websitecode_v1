var isLoaded = false;

function showGrid(category, type) {

    if (!category) {
        category = $("#categorySelector").val();
    }

    var jsonData = $.ajax({
        url: "php/chart-query.php",
        data: {
            category: category,
            type: type
        },
        dataType: "json",
        async: false
    }).responseText;

    var parsedData = JSON.parse(jsonData);

    var parentDiv = document.createElement("div");
    
    for (var i = 0; i < parsedData.length; i++) {
        var btn = document.createElement("BUTTON");
        btn.setAttribute("class", "accordion");
        var t = document.createTextNode(parsedData[i]["dish_name"] + ', ' + parsedData[i]["restaurant"] + ' (Price: ' + parsedData[i]["price"] + ')' + ' (' + parsedData[i]["rating"] + ')');
        btn.appendChild(t);
        parentDiv.appendChild(btn);

        var div = document.createElement("div");
        div.setAttribute("class", "panel");
        var newlabel = document.createElement("Label");
        newlabel.innerText = parsedData[i]["dish_name"];
        div.appendChild(newlabel);
        parentDiv.appendChild(div);
        
    }

    $('#grid-div').empty();
    $('#grid-div').append(parentDiv);

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}
