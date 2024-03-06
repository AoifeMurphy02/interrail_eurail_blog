<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: 75%;
            height: 400px;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
  <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm: text-orange-300 text-5xl uppercase font-bold text-shadow-md pb-14">
                  Plan Your Adventure
                </h1>
                
            </div>
        </div>
    </div>
    
        
       
    
  
      
    <div id="map" class="mx-auto" style="width: 80%; height: 500px;"></div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YKKfdxa3JYHZJfNfB3jaDHJRRXSapCY&callback=initMap" async></script>
        <script>
            let map, activeInfoWindow, markers = {};
            let markerId = 0;
    
            /* ----------------------------- Initialize Map ----------------------------- */
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {
                        lat: 48.864716,
                        lng: 2.349014,
                    },
                    zoom: 5
                });
    
                map.addListener("click", function(event) {
                    addMarker(event.latLng, markerId++);
                });
    
                initMarkers();
            }
    
            /* --------------------------- Initialize Markers --------------------------- */
            function initMarkers() {
                const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
    
                initialMarkers.forEach(markerData => {
                    addMarker(markerData.position, markerId++);
                });
            }
    
            /* ---------------------------- Add Marker ---------------------------------- */
            function addMarker(location, id) {
                console.log("Adding marker with ID:", id);
    
                const marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: true
                });
                markers[id] = marker;
    
                const infowindow = new google.maps.InfoWindow({
                    content: `<b>${location.lat()}, ${location.lng()}</b><br><button class="remove-btn" onclick="removeMarker(${id})">Remove</button>`,
                });
                marker.addListener("click", () => {
                    if(activeInfoWindow) {
                        activeInfoWindow.close();
                    }
                    infowindow.open({
                        anchor: marker,
                        shouldFocus: false,
                        map
                    });
                    activeInfoWindow = infowindow;
                });
    
                marker.addListener("dragend", () => {
                    infowindow.setContent(`<b>${marker.position.lat()}, ${marker.position.lng()}</b><br><button class="remove-btn" onclick="removeMarker(${id})">Remove</button>`);
                });
            }
    
            /* --------------------------- Remove Marker --------------------------------- */
            function removeMarker(id) {
                console.log("Removing marker with ID:", id);
                const marker = markers[id];
                if (marker) {
                    marker.setMap(null);
                    delete markers[id];
                    if (activeInfoWindow) {
                        activeInfoWindow.close();
                    }
                }
            }
                
           /*https://www.ultimateakash.com/blog-details/Ii0jOGAKYAo=/How-To-Integrate-Google-Maps-in-Laravel-2022*/
        </script>
   
          
       
        @endsection



   