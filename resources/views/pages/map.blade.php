@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
    <div class="content">

                        <div id="map"></div>


            </div>
@endsection
<style>
    #map {
        height: 100%;
    }

    /*
     * Optional: Makes the sample page fill the window.
     */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

</style>
@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>

                <script>


                    function iniciarMap() {
                        var latitud = 20.67861;
                        var longitud = -103.34190;

                        coordenas = {
                            lng: longitud,
                            lat: latitud
                        }
                        generarMapa(coordenas);
                    }
                    function generarMapa(coordenadas){
                        var Mapa = new google.maps.Map(document.getElementById('map'),{
                            zoom: 12,
                            center: new google.maps.Latlng(coordenadas.lat, coordenadas.lng)
                        });
                        marcador = new google.maps.Marker({
                            map: map,
                            draggable: true,
                            position: new google.maps.Latlng(coordenadas.lat, coordenadas.lng)
                        });
                        marcador.addListener('dragend',function (event){
                            document.getElementById('latitud').value = this._getPosition().lat();
                            document.getElementById('longitud').value = this._getPosition().lng();

                        })
                    }

                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>

    @endpush
