var geocoder;

$(document).ready(function() {
    getLocation();
});


function initialize() {
    geocoder = new google.maps.Geocoder();
}

function getLocation() {
    initialize();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng);
}

function codeLatLng(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
    if(status == google.maps.GeocoderStatus.OK) {
        console.log(results)
        if(results[1]) {
        //formatted address
            var address = results[0].formatted_address;
            $.ajax({
                url: base_url + 'api/addLog',
                type: 'post',
                data: {
                    Lat: lat,
                    Lng: lng,
                    Page: page_name,
                    Address: address
                },
                success: function() {
        
                }
            });            
        } else {
            alert("No results found");
        }
    } else {
        alert("Geocoder failed due to: " + status);
    }
    });
}