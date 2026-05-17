<!DOCTYPE html>
<html>
<head>
    <title>Select Location</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }

        .top-bar {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
            background: white;
            padding: 8px 12px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            font-family: Arial;
        }
    </style>
</head>

<body>

<div class="top-bar">
    Click on map to select location
</div>

<div id="map"></div>

<script>
    const map = L.map('map').setView([10.6765, 122.9509], 13); // Bacolod

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let marker;

map.on('click', async function (e) {
    const lat = e.latlng.lat;
    const lng = e.latlng.lng;

    if (marker) map.removeLayer(marker);

    marker = L.marker([lat, lng]).addTo(map);

    // Send to parent (signup page)
    if (window.opener) {
        window.opener.postMessage({ lat, lng }, "*");
    }

    // Reverse geocoding (get address)
    const url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`;

    const res = await fetch(url);
    const data = await res.json();

    const address = data.address || {};

    if (window.opener) {
        window.opener.postMessage({
            lat,
            lng,
            province: address.state || "",
            city: address.city || address.town || address.municipality || "",
            barangay: address.suburb || address.village || "",
            street: address.road || ""
        }, "*");
    }
});
</script>

</body>
</html>