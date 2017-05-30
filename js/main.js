$(function () {
    "use strict";
    var rpmTimer = setInterval(function () {
        $.ajax({url: "stats/rpm.txt", success: function (result) {
            $("car-stat1").html = result;
        }});
    }, 1000);
});