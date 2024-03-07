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
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Plan Your Adventure
            </h1>
        </div>
    </div> 
       
    
  
      
    <div id="map" class="mx-auto" style="width: 80%; height: 500px;"></div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YKKfdxa3JYHZJfNfB3jaDHJRRXSapCY&callback=initMap" async defer></script>
        <script>
            let map, activeInfoWindow, markers = {};
            let markerId = 0;
            let distanceService;
     /* ----------------------------- Initialize Map ----------------------------- */
     function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 48.864716,
                    lng: 2.349014,
                },
                zoom: 5
            });

            distanceService = new google.maps.DistanceMatrixService();

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

    // Initialize infowindow if it doesn't exist
    if (!marker.infowindow) {
        marker.infowindow = new google.maps.InfoWindow();
    }

    marker.infowindow.setContent(`<b>${location.lat()}, ${location.lng()}</b><br><button class="remove-btn" onclick="removeMarker(${id})">Remove</button>`);

    marker.addListener("click", () => {
        if(activeInfoWindow) {
            activeInfoWindow.close();
        }
        marker.infowindow.open({
            anchor: marker,
            shouldFocus: false,
            map
        });
        activeInfoWindow = marker.infowindow;
    });

    marker.addListener("dragend", () => {
        marker.infowindow.setContent(`<b>${marker.position.lat()}, ${marker.position.lng()}</b><br><button class="remove-btn" onclick="removeMarker(${id})">Remove</button>`);
        calculateDistances();
    });

    calculateDistances();
}

    /* ------------------------- Calculate Distances ---------------------------- */
function calculateDistances() {
    const origins = [];
    const destinations = [];

    for (const id in markers) {
        const position = markers[id].getPosition();
        if (position) {
            origins.push(position);
            destinations.push(position);
        }
    }

    if (origins.length > 0 && destinations.length > 0) {
        distanceService.getDistanceMatrix({
            origins: origins,
            destinations: destinations,
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
        }, (response, status) => {
            if (status === 'OK') {
                const rows = response.rows;
                for (let i = 0; i < rows.length; i++) {
                    const elements = rows[i].elements;
                    for (let j = 0; j < elements.length; j++) {
                        const distanceText = elements[j].distance.text;
                        const infowindow = new google.maps.InfoWindow({
                            content: markers[i].infowindow.getContent() + `<br>Distance to Marker ${j}: ${distanceText}`
                        });
                        infowindow.open(map, markers[i]);
                    }
                }
            } else {
                console.log('Error calculating distances:', status);
            }
        });
    }
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

        // Remove distance information from infowindows
        for (const otherId in markers) {
            if (id !== otherId) {
                const otherMarker = markers[otherId];
                if (otherMarker && otherMarker.infowindow) { // Check if infowindow property exists
                    const content = otherMarker.infowindow.getContent();
                    const updatedContent = content.replace(new RegExp(`Distance to Marker ${id}: \\d+.*?<br>`, 'g'), '');
                    otherMarker.infowindow.setContent(updatedContent);
                }
            }
        }
    }
}

    </script>
@endsection
</body>
</html>