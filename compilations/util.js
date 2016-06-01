var category = window.location.hash.substring(1);

function typeChanged() {
    var type = document.querySelector('input[name="type"]:checked').value;
    drawChart(category, type);
}

function loadCategories() {
    $.ajax({
        url: "../submit_review/php/populateCategories.php",
        success: function (response) {
            document.getElementById("categories").innerHTML = response;
            $("#categorySelector").val(category);
        }
    });
}