function loadCategories() {
    $.get("../submit_review/php/populateCategory.php",
        {
            category: ''
        }).done(function (data) {
            var results = jQuery.parseJSON(data);
            $(results).each(function (key, value) {
                $('#categorySelector').append('<option class="item">' + value + '</option>');
            })

            addChangeListenerForParentCategories();

            var firstOption = $('#categorySelector option:first').val();

            getSubCategories(firstOption);
        });
}

function addChangeListenerForParentCategories() {
    $("#categorySelector").on('change', function () {
        getSubCategories(this.value);
    });
}

function getSubCategories(parentCategory) {
    $.get("../submit_review/php/populateFoodOptions.php",
        {
            category: parentCategory
        }).done(function (data) {
            var results = jQuery.parseJSON(data);
            $('#filterDiv').empty();

            $(results).each(function (key, value) {
                var input = '<input type="checkbox" style="margin-left:15px;" checked value=' + value + ' id="cb' + key + '">' + ' ' + value + '</input>';
                $('#filterDiv').append(input);
            })

        });
}

function getInputFromUI() {
    var selected = [];
    $('#filterDiv input:checked').each(function () {
        selected.push($(this).attr('value'));
    });
    
    if (selected.length > 0) {
        drawChart(this.value, selected);
    }
    else {
        alert('Please select at least one option');
    }
}
