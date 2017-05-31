"use strict";
var cs1 = null,
    csURL1 = "stats/rpm.txt";
$(function () {
    "use strict";
    var rpmTimer = setInterval(function () {
        $.ajax({url: csURL1, cache: "false", dataType: "text", success: function (result) {
            cs1.html(result);
        }});
    }, 1000);
    cs1 = $("#car-stat1");
});
