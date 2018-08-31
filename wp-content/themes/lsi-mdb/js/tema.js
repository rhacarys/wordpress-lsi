function init_map() {
    var var_location = new google.maps.LatLng(-7.213317, -35.907092);
    var var_mapoptions = {
        center: var_location,
        zoom: 14
    };
    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "LSI"
    });
    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var_marker.setMap(var_map);
}
google.maps.event.addDomListener(window, 'load', init_map);

$(document).ready (function() {
	if ($('#wpadminbar').css('display') == 'block') {
		if ($(window).width() < 544) {
			$('main').css('padding-top', '5px');
		} else if ($(window).width() < 583) {
			$('main').css('padding-top', '4rem');
		} else {
			$('main').css('padding-top', '5rem');
		}
	}
});

new WOW().init();
$("#mdb-navigation > ul > li").addClass("page-item");
$("#mdb-navigation > ul > li > a").addClass("page-link");

/*
 * Alinhar os cartões do Portifólio
 */
$(document).ready (function() {
	var maximum = 0;
	$('.card.alinhado').each(function() {
		var value = $(this).children('.card-block').height();
		maximum = (value > maximum) ? value : maximum;
	});

	$('.card.alinhado>.card-block').each(function() {
		var height = $(this).height();
		//var margem = $(this).children('.alinhamento').css("margin-top").replace("px", "");
		//$(this).children('.alinhamento').css("margin-top", (maximum - height + margem) + "px");
	});
});

/*
 * Enviar mensagem a partir do formulário da página inicial
 */
function enviaEmail() {
	$.ajax(
		{
			type 	: "POST",
			url 	: $('#btnSendMail').attr('url'),
			data 	: {
				from : $('#email').val(),
				name : $('#nome').val(),
				message : $('#text').val()
			}
		}).done(function(msg) {
			alert('Mensagem enviada com sucesso!');
		}
		);
}

equalheight = function(container) {
	var currentTallest = 0, currentRowStart = 0, rowDivs = new Array(), $el, topPosition = 0;
	$(container).each(function() {
		$el = $(this);
		$($el).height('auto')
		topPostion = $el.position().top;

		if (currentRowStart != topPostion) {
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
			rowDivs.length = 0; // empty the array
			currentRowStart = topPostion;
			currentTallest = $el.height();
			rowDivs.push($el);
		} else {
			rowDivs.push($el);
			currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		}
		for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
			rowDivs[currentDiv].height(currentTallest);
		}
	});
}

$(window).load(function() {
	equalheight('.alinhado');
});

$(window).resize(function() {
	equalheight('.alinhado');
});