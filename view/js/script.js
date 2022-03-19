

// TABLES

$('#titleImages').hide();
$('#titleUsers').hide();

$('#btnsImages').hide();
$('#btnsUsers').hide();

$('#tableImages').hide();
$('#tableUsers').hide();

$(document).ready(function () {
    $("#btnTableCards").click(function () {

        $('#titleCards').show();
        $('#titleImages').hide();
        $('#titleUsers').hide();

        $('#btnsCards').show();
        $('#btnsImages').hide();
        $('#btnsUsers').hide();

        $('#tableCards').show();
        $('#tableImages').hide();
        $('#tableUsers').hide();
    });
});

$(document).ready(function () {
    $("#btnTableImages").click(function () {

        $('#titleImages').show();
        $('#titleCards').hide();
        $('#titleUsers').hide();

        $('#btnsImages').show();
        $('#btnsCards').hide();
        $('#btnsUsers').hide();

        $('#tableImages').show();
        $('#tableCards').hide();
        $('#tableUsers').hide();
    });
});

$(document).ready(function () {
    $("#btnTableUsers").click(function () {

        $('#titleUsers').show();
        $('#titleCards').hide();
        $('#titleImages').hide();

        $('#btnsUsers').show();
        $('#btnsImages').hide();
        $('#btnsCards').hide();

        $('#tableUsers').show();
        $('#tableCards').hide();
        $('#tableImages').hide();
    });
});

