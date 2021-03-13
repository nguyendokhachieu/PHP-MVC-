$(document).ready(function() {
    $("input#delete").on("click", function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: 'index.php?controller=group&action=delete',
            type: 'POST',
            data: {'id': id},
            success: function(data) {
                if (data == 1) {
                    $('.overlay').fadeOut(500);
                    $("#item_" + id).hide(900);
                }
            }
        });
    });

    $("input#cancel").on("click", function() {
        $(".overlay").addClass("display-none");
    })
});

function deleteItem(id) {
    $(".overlay").removeClass('display-none').find('input#delete').attr("data-id", id);
}
