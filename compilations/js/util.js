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

            addChangeListener();

            var firstOption = $('#categorySelector option:first').val();

            getSubCategories(firstOption);
        });
}

function addChangeListener() {
    $("#categorySelector").on('change', function () {
        getSubCategories(this.value);
        drawChart(this.value, type);
    });
}

function getSubCategories(parentCategory) {
    $.get("../submit_review/php/populateFoodOptions.php",
        {
            category: parentCategory
        }).done(function (data) {
            var results = jQuery.parseJSON(data);
            $('#filterDiv').empty();
            
            var inputs = [];
            for(var i = 0; i < results.length; i++) {
                inputs.push('<input type="checkbox" id="ck'+ i +'">'+results[i]+'</input>');
            }
            $('#filterDiv').append(inputs.join(''));

            
        });

}