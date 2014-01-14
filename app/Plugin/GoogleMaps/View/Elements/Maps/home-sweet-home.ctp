<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script><script type="text/javascript" src="/adaptcms/google_maps/js/gmaps.js"></script><link rel="stylesheet" type="text/css" href="/adaptcms/google_maps/css/admin.google_maps.css" />
    <script>
        var map;
        $(document).ready(function() {
            $('#map').css('width', 750).css('height', 300);
            map = new GMaps({
                div: '#map',
                'lat': 38.897096,
                'lng': -77.036545,
                zoom: 18,
                width: 750,
                height: 300,
                disableDefaultUI: true
            });
            
                                            var from_route = [, ];
                var to_route = [, ];
                var travel_type = '';
            
                            map.drawRoute({
                    origin: from_route,
                    destination: to_route,
                    travelMode: travel_type,
                    strokeColor: '#131540',
                    strokeOpacity: 0.6,
                    strokeWeight: 6
                });
                                        map.setCenter(, );
                    });
    </script>
    <div id="map"></div>
    