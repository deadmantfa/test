jQuery(document).ready(function(){
	"use strict";
	jQuery.noConflict();


	window.localStorage.clear();;

	localStorage.setItem('start', parseInt(0));
	localStorage.setItem('cnt', parseInt(0));
	localStorage.setItem('end',parseInt(9));
	localStorage.setItem('initialRows',parseInt(9));
	localStorage.setItem('filePath',"http://localhost/test/bank.json");
	var dataHandler = function(fp) {
		jQuery.getJSON(fp, {format:"json"}).done(function( data ) {
			jQuery.each( data, function( i, item ) {
				localStorage.setItem('maxRec', item.length - 1);
				jQuery.each(item, function(j, item2){
					if (localStorage.getItem('maxRec') !== localStorage.getItem('start')){
						if(j >= parseInt(localStorage.getItem('start')) && j <  parseInt(localStorage.getItem('end'))) {

							jQuery("#data").find('tbody').append("<tr><td>" + item2.bankId  +"</td><td>" + item2.bankName  +"</td><td>" + item2.bankAddress  +"</td><td>" + item2.bankLogo  +"</td><td>" + item2.bankProcessor  +"</td></tr>");
							localStorage.setItem('cnt', parseInt(localStorage.getItem('cnt')) + 1);
						}

						if (parseInt(localStorage.getItem('cnt')) === parseInt(localStorage.getItem('initialRows'))) {
							console.log(j);
							localStorage.setItem('cnt', parseInt(0));
							localStorage.setItem('start', parseInt(j)+1);
							localStorage.setItem('end', parseInt(localStorage.getItem('end')) + parseInt(localStorage.getItem('initialRows')));
							return false;
						}
					} else {
						jQuery("#loadMore").val("No More Data").disable();
					}
				});

			});
		});
	};

	dataHandler(localStorage.getItem('filePath'));

	jQuery("#loadMore").click(function() { dataHandler(localStorage['filePath']); });

});