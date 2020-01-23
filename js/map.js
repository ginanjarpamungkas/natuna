var svg = d3.select("#geo-map-container").append("svg").attr('x', 0).attr('y', 0).attr('viewBox', '0 0 960 500').attr('id', 'geo-map')
var g_maritim = svg.append("g").attr("class", "laut")
var g_indonesia = svg.append("g").attr("class", "indonesia")
var tooltip = d3.select('body').append('div').attr('class', 'hidden tooltip');

var projection = d3.geoMercator().scale(1780).translate([-2900, 380]);
var zoom = d3.zoom().scaleExtent([1, 8]).on('zoom', zoomed);

function zoomed() {
  t = d3.event.transform;
  g_indonesia.attr("transform","translate(" + [t.x, t.y] + ")scale(" + t.k + ")");
  g_maritim.attr("transform","translate(" + [t.x, t.y] + ")scale(" + t.k + ")");
}

svg.call(zoom)
var path = d3.geoPath().projection(projection);
var pathmaritim = d3.geoPath(d3.geoIdentity().reflectY(true).scale(31).translate([-2894, 382]));

d3.json("natuna.json",function(json) {indonesia = g_indonesia.selectAll("path").data(json.features).enter().append("path").attr("d", path).style("fill", '#a5a5a5').attr("stroke", "#ffffff").attr("stroke-width", 0.5)})
d3.json("maritim.json",
  function(json) {
    maritim = g_maritim
    .selectAll("path")
    .data(json.features)
    .enter().append("path")
    .attr("id", function(d) {return d.properties.country})
    .attr("class", "Natuna")
    .attr("d", pathmaritim)
    .style("fill", function(d) {return d.properties.color})
    .style("opacity", '0.5')
    .attr("stroke", "#fff")
    .attr("stroke-width", 0.2)
  }
)

function change(e) {
  var value = $(e).val()

  if (value == 'Semua') {
    $('.Natuna').show()
  } else if (value == 'Malaysia') {
    $('.Natuna').hide()
    $('path[id="Malaysia"]').show()
  } else if (value == 'Taiwan') {
    $('.Natuna').hide()
    $('#China').css('fill','#FFA500')
    $('#China').show()
  } else if (value == 'China') {
    $('.Natuna').hide()
    $('#China').css('fill','#F7E017')
    $('#China').show()
  } else {
    $('.Natuna').hide()
    $('#'+value+'').show()
  }
}