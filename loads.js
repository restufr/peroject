jQuery(document).ready(function () {

    var loading = '<h3>Loading...</h3>';
    var state = "beranda";
	
	$("#beranda").click(function () {
        if (state != "beranda") {
            state = "beranda";
            $("#fitur").html(loading);
            $("#fitur").load("beranda.php");
        }
        return false;
    });

    $("#tools").click(function () {
        if (state != "tools") {
            state = "tools";
            $("#fitur").html(loading);
            $("#fitur").load("form/tools.php");
        }
        return false;
    });
    
    $("#daftar").click(function () {
        if (state != "daftar") {
            state = "daftar";
            $("#fitur").html(loading);
            $("#fitur").load("form/daftar.php");
        }
        return false;
    });
    
    $("#daftar1").click(function () {
        if (state != "daftar1") {
            state = "daftar1";
            $("#fitur").html(loading);
            $("#fitur").load("form/daftar1.php");
        }
        return false;
    });
    
    $("#perpanjang").click(function () {
        if (state != "perpanjang") {
            state = "perpanjang";
            $("#fitur").html(loading);
            $("#fitur").load("form/perpanjang.php");
        }
        return false;
    });
    
    $("#perpanjang1").click(function () {
        if (state != "perpanjang1") {
            state = "perpanjang1";
            $("#fitur").html(loading);
            $("#fitur").load("form/perpanjang1.php");
        }
        return false;
    });
    
     $("#tools1").click(function () {
        if (state != "tools1") {
            state = "tools1";
            $("#fitur").html(loading);
            $("#fitur").load("form/tools1.php");
        }
        return false;
    });
    
    $("#user").click(function () {
        if (state != "user") {
            state = "user";
            $("#fitur").html(loading);
            $("#fitur").load("form/tambahuser.php");
        }
        return false;
    });

	$("#generate").click(function () {
        if (state != "generate") {
            state = "generate";
            $("#fitur").html(loading);
            $("#fitur").load("form/buat.php");
        }
        return false;
    });	

	$("#delete").click(function () {
        if (state != "delete") {
            state = "delete";
            $("#fitur").html(loading);
            $("#fitur").load("form/delete.php");
        }
        return false;
    });

	$("#ganti").click(function () {
        if (state != "ganti") {
            state = "ganti";
            $("#fitur").html(loading);
            $("#fitur").load("form/ganti.php");
        }
        return false;
    });

	$("#ress").click(function () {
        if (state != "ress") {
            state = "ress";
            $("#fitur").html(loading);
            $("#fitur").load("form/ress.php");
        }
        return false;
    });

	$("#topup").click(function () {
        if (state != "topup") {
            state = "topup";
            $("#fitur").html(loading);
            $("#fitur").load("form/topup.php");
        }
        return false;
    });

	$("#history").click(function () {
        if (state != "history") {
            state = "history";
            $("#fitur").html(loading);
            $("#fitur").load("form/history.php");
        }
        return false;
    });

	$("#update").click(function () {
        if (state != "update") {
            state = "update";
            $("#fitur").html(loading);
            $("#fitur").load("form/update.php");
        }
        return false;
    });

	$("#upgrade").click(function () {
        if (state != "upgrade") {
            state = "upgrade";
            $("#fitur").html(loading);
            $("#fitur").load("form/upgrade.php");
        }
        return false;
    });

    var flash = [
        [0, 11],
        [1, 9],
        [2, 12],
        [3, 8],
        [4, 7],
        [5, 3],
        [6, 1]
    ];
    var html5 = [
        [0, 5],
        [1, 4],
        [2, 4],
        [3, 1],
        [4, 9],
        [5, 10],
        [6, 13]
    ];
    var css3 = [
        [0, 6],
        [1, 1],
        [2, 9],
        [3, 12],
        [4, 10],
        [5, 12],
        [6, 11]
    ];

    function showTooltip(x, y, contents) {
        jQuery('<div id="tooltip" class="tooltipflot">' + contents + "</div>").css({
            position: "absolute",
            display: "none",
            top: y + 5,
            left: x + 5
        }).appendTo("body").fadeIn(200)
    }
    var plot = jQuery.plot(jQuery("#chartplace"), [{
        data: flash,
        label: "Flash(x)",
        color: "#6fad04"
    }, {
        data: html5,
        label: "HTML5(x)",
        color: "#06c"
    }, {
        data: css3,
        label: "CSS3",
        color: "#666"
    }], {
        series: {
            lines: {
                show: true,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.05
                    }, {
                        opacity: 0.15
                    }]
                }
            },
            points: {
                show: true
            }
        },
        legend: {
            position: "nw"
        },
        grid: {
            hoverable: true,
            clickable: true,
            borderColor: "#666",
            borderWidth: 2,
            labelMargin: 10
        },
        yaxis: {
            min: 0,
            max: 15
        }
    });
    var previousPoint = null;
    jQuery("#chartplace").bind("plothover", function (event, pos, item) {
        jQuery("#x").text(pos.x.toFixed(2));
        jQuery("#y").text(pos.y.toFixed(2));
        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;
                jQuery("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);
                showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y)
            }
        } else {
            jQuery("#tooltip").remove();
            previousPoint = null
        }
    });
    jQuery("#chartplace").bind("plotclick", function (event, pos, item) {
        if (item) {
            jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint)
        }
    });
    jQuery("#datepicker").datepicker();
    jQuery(".tabbedwidget").tabs()
});
