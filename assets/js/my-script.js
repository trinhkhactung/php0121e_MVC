$(document).ready(function(){
    $("#list-students").DataTable({
        responsive: true,
        processing: true,
        paging: true,
        order: [[ 2, "desc" ]],
        lengthMenu: [[2, 25, 50, -1], [2, 25, 50, "All"]]
    });
})