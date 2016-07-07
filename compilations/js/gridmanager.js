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

        if(parsedData[i]["rating"] == 5) {
            btn.setAttribute("class", "accordion_delicious");
        }
        else if(parsedData[i]["rating"] == 3) {
            btn.setAttribute("class", "accordion_average");
        }
        else {
            btn.setAttribute("class", "accordion_bad");
        }
        
        var t = document.createTextNode(parsedData[i]["restaurant"]);
        btn.appendChild(t);
        parentDiv.appendChild(btn);

        var div = document.createElement("div");
        div.setAttribute("class", "panel");
        var detailLabel = document.createElement("Label");
        detailLabel.innerText = 'Dish name: ' + parsedData[i]["dish_name"] + '\nRestaurant: ' + parsedData[i]["restaurant"] + '\nLocation: ' + parsedData[i]["location"];

        var readMoreLabel = document.createElement("div");
        readMoreLabel.innerHTML = 'Read more';


        div.appendChild(detailLabel);
        div.appendChild(readMoreLabel);

        parentDiv.appendChild(div);
    }

    $('#grid-div').empty();
    $('#grid-div').append(parentDiv);

// to be fixed later
    var acc_delicious = document.getElementsByClassName("accordion_delicious");
    toggleActive(acc_delicious);

    var acc_average = document.getElementsByClassName("accordion_average");
    toggleActive(acc_average);

    var acc_bad = document.getElementsByClassName("accordion_bad");
    toggleActive(acc_bad);
}

function toggleActive(acc) {
    for (var i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}