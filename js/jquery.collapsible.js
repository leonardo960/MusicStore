function makeCollapsible(container)  {
	
			var colcontainer = $(container);
			//la classe enabled (non usata un questo esempio) è utile per "marcare" un elemento
			//su cui lo script sta operando, ad esempio per attivare stili specifici
			colcontainer.addClass("enabled");			
			var colheader = $("header",colcontainer);
			//sfruttiamo l'attributo aria-controls per individuare il contenuto da collassare
			var colbodyid = colheader.attr("aria-controls");							
			var colbody = $("#"+colbodyid,colcontainer);
			//l'indicatore di espansione viene creato al volo dallo script, e non deve
			//essere inserito nella struttura			
			var colindicator = $("<div class='indicator'/>");
			colheader.append(colindicator);
			
			//usiamo degli eventi custom per dotare i collapsible di "metodi"
			//facilmente richiamabili dall'esterno
			colcontainer.on("awdcoll:expand",function(e,init) {
				if (init) colbody.show(); //se stiamo inizializzando, mostra subito senza far vedere l'effetto
				colbody.slideDown(function() {
					//facciamo espandere l'elemento e poi ne manipoliamo gli attributi per riflettere il nuovo stato
					colheader.attr("aria-expanded","true")
					colcontainer.removeClass("collapsed"); 
					colbody.attr("aria-hidden","false");
					colindicator.text("Click to collapse");		
				});				
			});
			
			colcontainer.on("awdcoll:collapse",function(e,init) {
				if (init) colbody.hide(); //se stiamo inizializzando, nascondi subito senza far vedere l'effetto
				colbody.slideUp(function() {				
					colheader.attr("aria-expanded","false")
					colcontainer.addClass("collapsed"); 
					colbody.attr("aria-hidden","true");  
					colindicator.text("Click to open");	
				});
			});
			
			//al click dell'header questo, in base allo stato dell'elemento controllato
			//(collassato o espanso), deducibile dall'attributo aria-expanded, attiva
			//l'evento che genera il cambio di stato
			colheader.click(function(){ 			
				if (colheader.attr("aria-expanded")=="true") {					
					colcontainer.trigger("awdcoll:collapse");
				} else {					
					colcontainer.trigger("awdcoll:expand");				
				}						
				//RICEVENTE: $(document).on("awdcoll:expand",function(e){console.log(e.target)})
			});
			

			if (colheader.attr("aria-expanded")=="true") {					
				colcontainer.trigger("awdcoll:expand",true);				
			} else {	
				colcontainer.trigger("awdcoll:collapse",true);									
			}	
}

$(function() {
			$('.collapsible').each(function(){ 
				makeCollapsible(this);
			});	
			
			
			$(document).on("awdcoll:expand awdcoll:collapse",function(e){console.log(e.target)})			
			
});