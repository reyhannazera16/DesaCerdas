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
                <div id="map" style="height: 500px; width:500px"></div>
            </div>
        </div>

    </div>
    <!-- End: Content-->

    <script type="module">
        var map = L.map('map').setView([-6.2777832, 106.8026676], 10);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)



        let kemangGeojson = await fetch('http://kemang.test/geojson/Adm_Kemang_FeaturesToJSON.json');
        console.log(kemangGeojson);
        const geojsonBody = await kemangGeojson.json();
      L.geoJson(geojsonBody).addTo(map);
        // console.log(geoJson);
        // geoLayer = L.geoJSON(geoJson, {
        //     style: function(params) {
        //         return {
        //             color: params.properties.Warna,
        //             opacity: 1.0,
        //             weight: 2
        //         }
        //     }
        // }).bindPopup(function(layer) {
        //     return layer.feature.properties.NAMOBJ;
        // }).addTo(map);
        // map.fitBounds(geoLayer.getBounds());

        // $.getJSON("http://kemang.test/geojson/Adm_Kemang_FeaturesToJSON.json", function(feature) {
        //     console.log(feature);
        //     geoLayer = L.geoJSON(feature, {
        //         style: function(feature) {
        //             return {
        //                 color: feature.properties.Warna,
        //                 opacity: 1.0,
        //                 weight: 2
        //             }
        //         }
        //     }).addTo(map);
        //     map.fitBounds(geoLayer.getBounds());

        // })
    </script>
@endsection
