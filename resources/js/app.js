require('./bootstrap');

$('#table').bootstrapTable({
    onCheck: function (row, $element) {
        // ...
    }
})

$('#table').on('check.bs.table', function (e, row, $element) {
    // ...
})
