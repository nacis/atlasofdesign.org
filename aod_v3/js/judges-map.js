var map = L.mapbox.map('judge-map', 'omnitarian.hg4448jo', {minZoom:2, maxZoom:5}).setView([40, -74.50], 2);
		
map.featureLayer.on('mouseover', function(e) {e.layer.openPopup();});

map.featureLayer.on('mouseout', function(e) {e.layer.closePopup();});