$(function () {
    "use strict";
    var rpmTimer = setInterval(function () {
        $.ajax({url: "stats/rpm.txt", dataType: "text", success: function (result) {
            $("#car-stat1").html(result);
        }});
    }, 1000);
});
