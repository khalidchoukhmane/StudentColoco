<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>

    <style>
        #mapid { 
            height: 722px; 
            width: 60%;
            position: fixed;
            right: 0;
            margin-right:10px;
            }
        iframe{
            width :39%;
            height : 719px;
            margin-top: 0px;
            margin-bottom: 0px;
            -moz-box-shadow: 4px 4px 14px #000;
            -webkit-box-shadow: 4px 4px 14px #000;
            box-shadow: 4px 4px 14px #000;
            filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.2);

        }

    </style>
</head>
<body>

    <div id="mapid"></div>
    <iframe  src = "listCards.html" >
         Sorry your browser does not support inline frames.
     </iframe>

    





     
    <script>
        const mymap = L.map('mapid').setView([32.3424, -6.3758], 15);
        var locations = [
        ["LOCATION_1", 11.8166, 122.0942],
        ["LOCATION_2", 11.9804, 121.9189],
        ["LOCATION_3", 10.7202, 122.5621],
        ["LOCATION_4", 11.3889, 122.6277],
        ["LOCATION_5", 10.5929, 122.6325]
        ];
        //show the map
        const attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        const tiles = L.tileLayer(tileUrl, { attribution });
        tiles.addTo(mymap);

        for (var i = 0; i < locations.length; i++) {
            //here we have latitude and lantitude
        marker = new L.marker([locations[i][1], locations[i][2]])
            //here we have the description of the popup
            .bindPopup(locations[i][0])
            .addTo(mymap);
        }
        
    </script>

</body>
</html>