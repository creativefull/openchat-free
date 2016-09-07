$("a[rel='tab']").click(function(e) {
	pageUrl = $(this).attr("href");

	$.ajax({
		url : pageUrl,
		success : function(data) {
			$("#content").html(data);
		}
	});

	if (pageUrl != window.location) {
		window.history.pushState({path : pageUrl}, '', '#/' + pageUrl);
	}
	return false;
})

// $(window).bind("popstate", function() {
// 	var prefix = location.pathname.match("#");
// 	if (prefix) {
// 		$.ajax({
// 			url : location.pathname,
// 			success : function(data) {
// 				$("#content").html(data);
// 			}
// 		})		
// 	}
// 	else {
// 		$.ajax({
// 			url : "View/dashboard/index.php",
// 			success : function(data) {
// 				$("#content").html(data);
// 			}
// 		})
// 	}
// })

$(window).bind("load", function() {
    if (sessionStorage.loadDash == 'true') {
        $('nav > ul > li:first-child > a[href!="#"]').trigger("click");
        sessionStorage.loadDash = false;
    } else {
    	// console.log("URL");
        checkURL();
    }
    var url = location.hash.replace(/^#/, '');
    $('nav li:has(a[href="' + url + '"])').addClass("active");	
})

function checkURL() {
	if (location.hash) {
		var hash = location.hash.replace(new RegExp("#", "gi"), "");
		$.ajax({
			url : hash,
			success : function(msg) {
				$("#content").html(msg);
			}
		})		
	}
}