// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach(item=>{
        item.classList.remove("hovered");
    })
    this.classList.add("hovered");
}

list.forEach(item => item.addEventListener("mouseover", activeLink));

// menu toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
}



var locations = [
    ["LOCATION_1", -6.556287750727083, 107.76524161022911],
    ["LOCATION_2", -6.555179234560991, 107.76220534922848],
    ["LOCATION_3", -6.556271749573776, 107.76420627698627],
    ["LOCATION_4", -6.556721468146211, 107.76496744985361],
    ["LOCATION_5", -6.55579697554485, 107.76244285080963],
    ["LOCATION_5", -6.555341098308718, 107.76222605827249],
    ["LOCATION_5", -6.553478779446104, 107.76334002205155],
    ["LOCATION_5", -6.553137699935075, 107.76389792148456],
    ["LOCATION_5", -6.5528818901487265, 107.76417687120106],
    ["LOCATION_5", -6.564139111027646, 107.76774050439421],
    ["LOCATION_5", -6.577639467842253, 107.76521010968293],
    ["LOCATION_5", -6.567372906048888, 107.76224335878918]
  ];
  
  var map = L.map('map').setView([-6.559843361462408, 107.76283278557595], 13);
  mapLink =
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
  L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; ' + mapLink + ' Contributors',
      maxZoom: 18,
    }).addTo(map);
  
  for (var i = 0; i < locations.length; i++) {
    marker = new L.marker([locations[i][1], locations[i][2]])
      .bindPopup(locations[i][0])
      .addTo(map);
  }




// const DEFAULT_COORD = [-6.1752804, 106.8252699]

// // initial map
// const Map = L.map("render-map")

// // initial osm tile url
// const osmTileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"

// const attrib = 'Leaflet with <a href="https://academy.byidmore.com">Id More Academy<a>'

// const osmTile = new L.TileLayer(osmTileUrl, { minZoom: 2, maxZoom: 20, attribution: attrib })

// // add layer 
// // https://leafletjs.com/reference-1.6.0.html#layer
// Map.setView(new L.LatLng(DEFAULT_COORD[0], DEFAULT_COORD[1]), 15)
// Map.addLayer(osmTile)

// // add marker
// // https://leafletjs.com/reference-1.6.0.html#marker
// const Marker = L.marker(DEFAULT_COORD).addTo(Map)

// // click listener
// // https://leafletjs.com/reference-1.6.0.html#evented
// Map.on("click", function(e){
//   const {lat, lng} = e.latlng
//   // regenerate marker position
//   Marker.setLatLng([lat, lng])
// })












