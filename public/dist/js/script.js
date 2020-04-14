window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);

$(document).ready(function () {
    $('#pilih_dokumen').change(function () {
        location.href = $(this).val();
    });
});

$(document).ready(function () {
    $('#pilih_prodi').change(function () {
        location.href = $(this).val();
    });
});


$('#confirm-delete').on('show.bs.modal', function (e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});