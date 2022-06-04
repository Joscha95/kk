var map = new ol.Map({
  target: 'map',
  controls: [],
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    })
  ],
  view: new ol.View({
    center: ol.proj.fromLonLat([8.873840, 51.935398]),
    zoom: 14
  })
});

const overlays = document.querySelectorAll('#overlays .place')
  overlays.forEach((item, i) => {
    const marker = new ol.Overlay({
    position: ol.proj.fromLonLat([item.dataset.lon,item.dataset.lat]),
    positioning: 'center-center',
    element: item,
    stopEvent: false,
  });
  map.addOverlay(marker);
});
