$(document).ready(function () {
    feather.replace()
});

function p(sText) {
    console.log(sText);
}

$('.bpsMenuItem').click(function () {
    $('#content div').hide();
    var oTarget = '#' + $(this).data('target');
    $(oTarget).show();
});