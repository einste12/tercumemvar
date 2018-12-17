//ADMİN İLAN ONAYLAMA
$('#myModal').on('show.bs.modal', function(e) {

    var $modal = $(this),
        ilanonayid = e.relatedTarget.id;

    $(".modal-body #ilanonaylaid").val( ilanonayid );


});



//ADMİN İLAN REDDETME

$('#myModal2').on('show.bs.modal', function(e) {

    var $modal = $(this),
        ilanreddetid = e.relatedTarget.id;

    $(".modal-body #ilanreddetid").val( ilanreddetid );


});


//TERCUMAN İLANA TEKLİF VERME

$('#myModal3').on('show.bs.modal', function(e) {

    var $modal = $(this),
        tercumanteklifid = e.relatedTarget.id;

    $(".modal-body #tercumanteklifid").val( tercumanteklifid );


});

//TERCUMAN TEKLİF İPTAL ET

$('#myModal4').on('show.bs.modal', function(e) {

    var $modal = $(this),
        tercumanteklifiptalid = e.relatedTarget.id;

    $(".modal-body #tercumanteklifiptalid").val( tercumanteklifiptalid );


});


//ÜYE TEKLİF KABUL ETME PENCERESİ
$('#myModal5').on('show.bs.modal', function(e) {

    var $modal = $(this),
        uyeteklifkabulid = e.relatedTarget.id;

    $(".modal-body #uyeteklifkabulid").val( uyeteklifkabulid );


});



//ADMİN İŞ TAMAMLAMA
$('#myModal6').on('show.bs.modal', function(e) {

    var $modal = $(this),
        administamamlaid = e.relatedTarget.id;

    $(".modal-body #administamamlaid").val( administamamlaid );


});


//KULLANICI OKUNMUŞ UYARILAR

function marknotificationread($notificationcount1 = $notificationcount) {

    if($notificationcount1!=='0')
    {
        $.get('markasread');
    }


}