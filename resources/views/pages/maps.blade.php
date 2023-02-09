@extends('layouts.main')
@section('head')
    @include('includes.head')
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->

        <div class="content-wrapper ">
            <div class="content-body d-flex justify-content-center">
                <div id="map" style="height: 400px; width:800px"></div>
            </div>

        </div>


<table id="example" class="display nowrap table table-condensed table-bordered table-striped">
    <thead>
      <tr>
					<th rowspan="2" style="text-align:center; vertical-align:middle; ">ObjectID</th>
					<th rowspan="2" style="text-align:center; vertical-align:middle; ">Desa</th>
					<!--  Sementara <th rowspan="2" style="text-align:center; vertical-align:middle; ">Kategori</th>-->
					<th rowspan="2" style="text-align:center; vertical-align:middle; ">Indeks Smart Community</th>
					<th rowspan="2" style="text-align:center; vertical-align:middle; ">Potensi Smart Community</th>
					<th colspan="10"  style="text-align:center; vertical-align:middle; ">Skor Variable</th>

				</tr>
				<tr>
					<th  style="text-align:center; vertical-align:middle; ">Pasar</th>
					<th  style="text-align:center; vertical-align:middle; ">Jalan</th>
                    <th  style="text-align:center; vertical-align:middle; ">Sekolah</th>
					<th  style="text-align:center; vertical-align:middle; ">Bank</th>
					<th  style="text-align:center; vertical-align:middle; ">Koperasi</th>
					<th  style="text-align:center; vertical-align:middle; ">Komunitas</th>
                    <th  style="text-align:center; vertical-align:middle; ">UMKM</th>
                    <th  style="text-align:center; vertical-align:middle; ">Medis</th>
                    <th  style="text-align:center; vertical-align:middle; ">Keamanan Publik</th>


				</tr>
    </thead>

</table>


    </div>
    <!-- End: Content-->

    <script type="module">
        var map = L.map('map').setView([-6.2777832, 106.8026676], 10);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)




        let kemangGeojson = await fetch("{{ asset('geojson/ADM.geojson') }}");
        console.log(kemangGeojson);
        const geojsonBody = await kemangGeojson.json();
        let geolayer = L.geoJson(geojsonBody, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map);
        map.fitBounds(geolayer.getBounds())

      function popUp(feature, layer) {
            let html = "";
            if (feature.properties) {
                html += '<b>'+'<p>' + feature.properties['NAMOBJ'] + '</b>'+ '</p>';
                html += '<p>' + '&nbsp;Nilai Indeks: '+ feature.properties['indeks_sc'] + '</p>';
                html += '<p>' + '&nbsp;Kategori Indeks: '+ feature.properties['smart_comm'] + '</p>';
                layer.bindPopup(html);
            }
        }

        // Set Warna Berdasarkan Value Kepadatan Penduduk Field INDEKS


        function style(feature) {
            return {
                weight: 3,
                opacity: 1,
                color: 'black',
                dashArray: '3',
                fillOpacity: 1,
                fillColor: feature.properties.Warna
            };
        }

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#fff',
                dashArray: '',
                fillOpacity: 0.7
            });

            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
            }

            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geolayer.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });


            popUp(feature, layer);

            var label = L.marker(layer.getBounds().getCenter(), {
                icon: L.divIcon({
                    className: 'label',
                    html: feature.properties.NAMOBJ,
                    iconSize: [20, 10]
                })
            }).addTo(map);
        }



      var controlLayers = L.control.layers().addTo(map);



//var url2 = ("{{ asset('geojson/Sungai_LN.json') }}");
///$.getJSON(url2, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'SUNGAI');
//});

//
//var url3 = ("{{ asset('geojson/Bank_Kecamatan_Kemang.json') }}");
//$.getJSON(url3, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'Bank');
//});

//var url4 = ("{{ asset('geojson/Jarak_Sumber_Irigasi.json') }}");
//$.getJSON(url4, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'Irigasi');
//});


//var url5 = ("{{ asset('geojson/Score_Jalan.json') }}");
//$.getJSON(url5, function (geojson) {
  //var geojsonLayer = L.geoJson(geojson, {
    //style: function (feature) {
      //return {
        //'weight': 1,
        //'fillOpacity': 0
      //}
    //}
  //}).addTo(map);
  //controlLayers.addOverlay(geojsonLayer, 'Jalan');
//});

var legend_div = new L.Control({position: 'bottomright'});
				legend_div.onAdd = function (map) {
				  this._div = L.DomUtil.create('div', 'info legend');
				  this._div.innerHTML = '<div id="legend-title">Potensi Smart Community</div>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#b7fbb8;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Cukup Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#ffeabd;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#feff73;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Sangat Potensial<br>';
				  return this._div;
				};
				legend_div.addTo(map);
                var editor; // use a global for the submit and return data rendering in the examples


 $(document).ready(function() {
     editor = new $.fn.dataTable.Editor( {
         ajax: {
            url: "{{ asset('geojson/UMKM.geojson') }}",
            data: function ( d ) {

         d.format="geojson";
       },

       dataSrc: 'features'
       },
         table: '#example',
         idSrc:  'id'
     } );


     $('#example').DataTable( {

        ajax: {
            url: "{{ asset('geojson/ADM.geojson') }}",
            type: 'GET',
        data: function ( d ) {

         d.format="geojson";

       },

       dataSrc: 'features'
        },
       dom: 'Bfrtip',

         columns: [
       {data: "properties.FID_1" },
       { data: "properties.NAMOBJ" },
       { data: "properties.indeks_sc" },
       { data: "properties.smart_comm" },
       { data: "properties.pasar" },
       { data: "properties.jalan" },
       { data: "properties.Sekolah" },
       { data: "properties.bank" },
       { data: "properties.koperasi" },
       { data: "properties.komunitas" },
       { data: "properties.UMKM" },
       { data: "properties.medis" },
       { data: "properties.keamanan" }



         ],
        select: {
             style:    'os',
             selector: 'td:first-child'
         },

         buttons: [

             { extend: "edit",   editor: editor },
             { extend: "remove", editor: editor }
         ]
     } );
 } );





    </script>
@endsection
