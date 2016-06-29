var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}


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
        var t = document.createTextNode("CLICK ME");
        btn.appendChild(t);  
        parentDiv.appendChild(btn);
        
        var div = document.createElement("div");
        var newlabel = document.createElement("Label");
        div.appendChild(newlabel);  
        parentDiv.appendChild(div);
    }

    var gridDiv = document.getElementById("grid-div");
    $('#grid-div').append(parentDiv);
}
