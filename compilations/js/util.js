const DEFAULT_FOOD_TYPE = "nonveg";

var category;
var type;

function typeChanged() {
    type = document.querySelector('input[name="type"]:checked').value;
    category = $("#categorySelector").val();
    drawChart(category, type);
}

function loadCategories() {
    $.get("../submit_review/php/populateCategory.php",
        {
            category: ''
        }).done(function (data) {
            var results = jQuery.parseJSON(data);
            $(results).each(function (key, value) {
                $('#categorySelector').append('<option class="item">' + value + '</option>');
            })

            $("#categorySelector").on('change', function () {
                drawChart(this.value, type);
            });
        });
}
