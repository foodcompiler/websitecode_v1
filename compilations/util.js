const DEFAULT_FOOD_TYPE = "nonveg";

var category = window.location.hash.substring(1);
var type;
var priceLowToHigh;

function typeChanged() {
    type = document.querySelector('input[name="type"]:checked').value;
    drawChart(category, type, priceLowToHigh);
}

function loadCategories() {
    $.ajax({
        url: "../common/populateCategories.php",
        success: function (response) {
            document.getElementById("categories").innerHTML = response;
            $("#categorySelector").val(category);

            $('#categorySelector').on('change', function () {
                var type = document.querySelector('input[name="type"]:checked').value;
                category = this.value;
                drawChart(this.value, type, priceLowToHigh);
            });
        }
    });
}
