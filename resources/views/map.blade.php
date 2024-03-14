@extends('layouts.app')

@section('content')
<div class="my-8"></div>

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
        let map, markers = {};
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
    calculateDistances(); // Calculate distances after initializing the map
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

    const markerIcon = {
        url: 'data:image/svg+xml;base64,' + btoa('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="black" d="M15 12.423L16.577 14v1H12.5v5l-.5.5l-.5-.5v-5H7.423v-1L9 12.423V5H8V4h8v1h-1z"/></svg>'),
        scaledSize: new google.maps.Size(24, 24), // Adjust the size if needed
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(12, 24) // Adjust the anchor point if needed
    };

    const marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true,
        icon: markerIcon // Set the marker icon
    });
    markers[id] = marker;

    // Initialize infowindow if it doesn't exist
    if (!marker.infowindow) {
        marker.infowindow = new google.maps.InfoWindow();
    }

    // Content for the infowindow including the Remove button
// Content for the infowindow including the Remove button
const content = `<div class="infowindow"><b>${location.lat()}, ${location.lng()}</b><br><button class="remove-btn" onclick="removeMarker(${id})">Remove</button></div>`;
marker.infowindow.setContent(content);

    marker.addListener("click", () => {
        if (marker.infowindow.getMap()) {
            marker.infowindow.close();
        } else {
            marker.infowindow.open(map, marker);
        }
    });

    marker.addListener("dragend", () => {
        calculateDistances();
    });

    calculateDistances(); // Recalculate distances after adding the marker
}

/* --------------------------- Remove Marker --------------------------------- */
function removeMarker(id) {
    console.log("Removing marker with ID:", id);
    const marker = markers[id];
    if (marker) {
        marker.setMap(null); // Remove marker from the map
        delete markers[id]; // Remove marker from the markers object
        if (marker.infowindow) {
            marker.infowindow.close(); // Close the info window associated with the marker
        }
        
        // Update marker indexes after removing a marker
        const updatedMarkers = {};
        let index = 0;
        for (const key in markers) {
            if (key != id) {
                updatedMarkers[index] = markers[key];
                index++;
            }
        }
        markers = updatedMarkers;

        calculateDistances(); // Recalculate distances after removing the marker
    }
}

/* ------------------------- Calculate Distances ---------------------------- */
function calculateDistances() {
    const origins = [];
    const destinations = [];

    // Collect positions of remaining markers
    for (const id in markers) {
        const marker = markers[id];
        const position = marker.getPosition();
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
                let markerIndex = 0; // Index for markers
                for (const id in markers) {
                    const elements = rows[markerIndex].elements;
                    let content = `<b>${markers[id].getPosition().lat()}, ${markers[id].getPosition().lng()}</b><br>`;
                    for (let j = 0; j < elements.length; j++) {
                        const distanceText = elements[j].distance.text;
                        content += `Distance to Marker ${j}: ${distanceText}<br>`;
                    }
                    // Add the remove button to the existing content
                    content += `<button class="remove-btn" onclick="removeMarker(${id})">Remove</button>`;
                    markers[id].infowindow.setContent(content);
                    markerIndex++;
                }
            } else {
                console.log('Error calculating distances:', status);
            }
        });
    } else {
        // No markers remaining, clear the map
        map.setCenter({ lat: 48.864716, lng: 2.349014 }); // Reset map center
        map.setZoom(5); // Reset map zoom level
    }
}

       
    </script>
@endsection
</body>
</html>


