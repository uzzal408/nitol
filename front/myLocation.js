

// This example creates a simple polygon representing the Bermuda Triangle.
var infoWindow, geocoder;
var sklLatLng = {};
var addressName = null;


var gulshanDelivery,
    gulshan2Delivery,
    dhanmondiDelivery,
    dhanmondi2Delivery,
    bailyDelivery,
    uttaraDelivery,
    uttara2Delivery,
    mirpurDelivery,
    mirpur2Delivery,
    bhataraDelivery,
    bananiDelivery,
    wariDelivery,
    gulshanDistance,
    gulshan2Distance,
    dhanmondiDistance,
    dhanmondi2Distance,
    bailyDistance,
    uttaraDistance,
    uttara2Distance,
    mirpurDistance,
    mirpur2Distance,
    bhataraDistance,
    bananiDistance,
    wariDistance;




function initMap({sklLatLng,setLocation,setStore}) {
    var gulshanCoords = [
        {lat: 23.780951, lng: 90.398927},
        {lat: 23.771330, lng: 90.401249},
        {lat: 23.769966, lng: 90.412536},
        {lat: 23.770269, lng: 90.424489},
        {lat: 23.775583, lng: 90.425878},
        {lat: 23.780677, lng: 90.425461},
        {lat:23.780114, lng:90.416710}
    ];

    var gulshanOutlet = new google.maps.LatLng(23.7839386, 90.4034702);


    var gulshan2Coords = [
        {lat: 23.797492, lng:90.423112},
        {lat: 23.796120, lng:90.418264},
        {lat: 23.804195, lng:90.416148},
        {lat: 23.801980, lng:90.408055},
        {lat: 23.798249, lng:90.407931},
        {lat:23.780821,  lng:90.425328}
    ];

    var gulshan2Outlet = new google.maps.LatLng(23.7627004, 90.390694);


    var dhanmondiCoords = [
        {lat: 23.756348, lng:90.375077},
        {lat: 23.760020, lng:90.372799},
        {lat: 23.756945, lng:90.361509},
        {lat: 23.755946, lng:90.356826},
        {lat: 23.741401, lng:90.360467},
        {lat: 23.741205, lng:90.366535},
        {lat:23.737105, lng:90.369024}
    ];

    var dhanmondiOutlet = new google.maps.LatLng(23.7473545, 90.3615641);

    var dhanmondi2Coords = [
        {lat: 23.747685, lng: 90.380187},
        {lat: 23.756080, lng: 90.375260},
        {lat: 23.751070, lng: 90.387016},
        {lat: 23.749722, lng: 90.392967},
        {lat: 23.749722, lng: 90.392967},
        {lat: 23.732286, lng: 90.385036},
        {lat: 23.739090, lng: 90.375491}
    ];

    var dhanmondi2Outlet = new google.maps.LatLng(23.7402737, 90.3741712);

    var bailyCoords = [
        {lat: 23.744397, lng:90.426193},
        {lat: 23.749700, lng:90.412928},
        {lat: 23.745802, lng:90.395046},
        {lat: 23.738478, lng:90.396111},
        {lat: 23.730142, lng:90.405330},
        {lat: 23.730400, lng:90.414982},
        {lat:23.737222, lng:90.418415}
    ];

    var bailyOutlet = new google.maps.LatLng(23.7418837, 90.401506);

    var uttaraCoords = [
        {lat: 23.880448, lng:90.400571},
        {lat: 23.874692, lng:90.405607},
        {lat: 23.867859, lng:90.400149},
        {lat: 23.869077, lng:90.383338},
        {lat: 23.870302, lng:90.379571},
        {lat: 23.874010, lng:90.379692},
        {lat:23.883057, lng:90.390944}
    ];

    var uttaraOutlet = new google.maps.LatLng(23.8682043, 90.3909394);

    var uttara2Coords = [
        {lat: 23.861242, lng:90.392272},
        {lat: 23.869241, lng:90.383925},
        {lat: 23.869560, lng:90.393688},
        {lat: 23.874160, lng:90.393666},
        {lat: 23.874724, lng:90.405644},
        {lat: 23.864073, lng:90.410382},
        {lat: 23.854774, lng:90.404981}
    ];

    var uttara2Outlet = new google.maps.LatLng(23.8682043, 90.3909394);


    var mirpurCoords = [
        {lat: 23.837307, lng:90.375612},
        {lat: 23.837136, lng:90.363581},
        {lat: 23.827950, lng:90.351374},
        {lat: 23.816684, lng:90.356004},
        {lat: 23.810196, lng:90.361085},
        {lat:23.810887, lng:90.374113},
        {lat:23.822218, lng:90.377572}
    ];

    var mirpurOutlet = new google.maps.LatLng(23.8248757, 90.355866);

    var mirpur2Coords = [
        {lat: 23.806233, lng:90.342577},
        {lat: 23.806050, lng:90.351517},
        {lat: 23.809469, lng:90.361133},
        {lat: 23.810398, lng:90.367542},
        {lat: 23.797155, lng:90.372847},
        {lat: 23.790992, lng:90.353767},
        {lat: 23.792295, lng:90.344971}
    ];

    var mirpur2Outlet = new google.maps.LatLng(23.8004096, 90.3469136);

    var bhataraCoords = [
        {lat: 23.826346, lng: 90.429140},
        {lat: 23.811602, lng: 90.416773},
        {lat: 23.806664, lng: 90.415853},
        {lat: 23.796814, lng: 90.419669},
        {lat: 23.798208, lng: 90.425616},
        {lat: 23.813911, lng: 90.434511},
        {lat: 23.818486, lng: 90.437991}
    ];

    var bhataraOutlet = new google.maps.LatLng(23.8129419, 90.4190477);

    var bananiCoords = [
        {lat: 23.800534, lng:90.402170},
        {lat: 23.800846, lng:90.411641},
        {lat: 23.794514, lng:90.413963},
        {lat: 23.789815, lng:90.415996},
        {lat: 23.788349, lng:90.410536},
        {lat: 23.782479, lng:90.401936},
        {lat: 23.793300, lng:90.397485}
    ];

    var bananiOutlet = new google.maps.LatLng(23.7839013, 90.4034702);

    var wariCoords = [
        {lat: 23.722890, lng: 90.410786},
        {lat: 23.721700, lng: 90.427182},
        {lat: 23.710958, lng: 90.423484},
        {lat: 23.709930, lng: 90.418755},
        {lat: 23.713028, lng: 90.413871},
        {lat: 23.714496, lng: 90.408638},
        {lat: 23.719460, lng: 90.409665}
    ];

    var wariOutlet = new google.maps.LatLng(23.7538262, 90.358544);


    // Construct the polygon.
    var gulshanTriangle = new google.maps.Polygon({
        paths: gulshanCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var gulshan2Triangle = new google.maps.Polygon({
        paths: gulshan2Coords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var dhanmondiTriangle = new google.maps.Polygon({
        paths: dhanmondiCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var dhanmondi2Triangle = new google.maps.Polygon({
        paths: dhanmondi2Coords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var bailyTriangle = new google.maps.Polygon({
        paths: bailyCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var uttaraTriangle = new google.maps.Polygon({
        paths: uttaraCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var uttara2Triangle = new google.maps.Polygon({
        paths: uttara2Coords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });


    // Construct the polygon.
    var mirpurTriangle = new google.maps.Polygon({
        paths: mirpurCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });
    //
    //
    // Construct the polygon.
    var mirpur2Triangle = new google.maps.Polygon({
        paths: mirpur2Coords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var bhataraTriangle = new google.maps.Polygon({
        paths: bhataraCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var bananiTriangle = new google.maps.Polygon({
        paths: bananiCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    // Construct the polygon.
    var wariTriangle = new google.maps.Polygon({
        paths: wariCoords,
        strokeColor: 'green',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: 'green',
        fillOpacity: 0.35
    });

    var branches = [

        { tag:'gulshanTriangle', name: 'Pizza Hut Gulshan', location: 'Road # 140, SE(F)- 1, Bir Uttam Mir Shawkat Ali Sarak, (South Avenue), Gulshan - 1, Dhaka- 1212.' },
        { tag:'gulshan2Triangle', name: 'Pizza Hut RM Center' , location: 'House- 101( 2nd Floor), Gulshan Avenue, Gulshan - 2, Dhaka-1212'  },
        { tag:'dhanmondiTriangle', name: 'Pizza Hut Dhanmondi' , location: 'Plot # 754, Satmasjid Road, Dhanmondi, Dhaka- 1205' },
        { tag:'dhanmondi2Triangle', name: 'Pizza Hut Delivery Dhanmondi' , location: 'Dr. Refat Ullahs Happy Arcade, House-03, Road-03, Dhanmondi, Dhaka' },
        { tag:'bailyTriangle', name: 'Pizza Hut Baily Road', location: '3, New Baily Road, 10, Natok Sarani, Gold Hunt Shopping Complex, Dhaka.'  },
        { tag:'uttaraTriangle', name: 'Pizza Hut Uttara' , location: 'Plot # 13, Sec # 13, Sonargaon, Janapath, Uttara, Dhaka-1230' },
        { tag:'uttara2Triangle', name: 'Pizza Hut Delivery Uttara', location: 'H#06, Road#02, Ahmed Plaza (Gr. Flr), Sector-03, Uttara, Dhaka-1230' },
        { tag:'bhataraTriangle', name: 'Pizza Hut Delivery Bhatara', location: 'Adept N. R. Complex, Plot- Ka 5/2, Bashundhara Link Road, Jagannathpur, Badda, Dhaka-1229' },
        { tag:'bananiTriangle', name: 'Pizza Hut Delivery Banani' , location: 'Plot- 50, Road- 11, Block- C, Banani Police Station, Banani, Dhaka-1213.' },
        { tag:'mirpurTriangle', name: 'Pizza Hut Delivery Mirpur' , location: 'Spring Rahmat E Tuba, Plot-132, Road-2, Block- A, Section- 12,  Mirpur, Dhaka' },
        { tag:'mirpur2Triangle', name: 'Pizza Hut Delivery Sony' , location: 'Sony Cinema Bhaban, Ist Floor, Plot-1, Block-D,Sector-02, Mirpur, Dhaka-1216' },
        { tag:'wariTriangle', name: 'Pizza Hut Delivery Wari' , location: 'A.K. Famous Tower, 41 Rankin Street, Wari, Dhaka' }

    ];

    let distanceArray = [];
    let today = new Date();
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: {lat: 23.780951, lng: 90.398927},
        mapTypeId: 'terrain'
    });

    infoWindow = new google.maps.InfoWindow;
    geocoder = new google.maps.Geocoder;


    var setLatlng = function setLatlng(){


        let day = today.getDay();

        gulshanDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), gulshanTriangle);
        gulshanDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), gulshanOutlet);
        distanceArray.push(gulshanDistance);

        gulshan2Delivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), gulshan2Triangle);
        gulshan2Distance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), gulshan2Outlet);
        distanceArray.push(gulshan2Distance);

        dhanmondiDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), dhanmondiTriangle);
        dhanmondiDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), dhanmondiOutlet);
        distanceArray.push(dhanmondiDistance);

        dhanmondi2Delivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), dhanmondi2Triangle);
        dhanmondi2Distance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), dhanmondi2Outlet);
        distanceArray.push(dhanmondi2Distance);

        bailyDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bailyTriangle);
        bailyDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bailyOutlet);
        distanceArray.push(bailyDistance);

        uttaraDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), uttaraTriangle);
        uttaraDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), uttaraOutlet);
        distanceArray.push(uttaraDistance);

        uttara2Delivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), uttara2Triangle);
        uttara2Distance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), uttara2Outlet);
        distanceArray.push(uttara2Distance);

        bhataraDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bhataraTriangle);
        bhataraDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bhataraOutlet);
        if(day != 3){
            distanceArray.push(bhataraDistance);
        }

        bananiDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bananiTriangle);
        bananiDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), bananiOutlet);
        distanceArray.push(bananiDistance);

        mirpurDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), mirpurTriangle);
        mirpurDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), mirpurOutlet);
        distanceArray.push(mirpurDistance);

        mirpur2Delivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), mirpur2Triangle);
        mirpur2Distance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), mirpur2Outlet);
        distanceArray.push(mirpur2Distance);

        wariDelivery = google.maps.geometry.poly.containsLocation(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), wariTriangle);
        wariDistance = calculateDistance(new google.maps.LatLng(sklLatLng.lat, sklLatLng.lng), wariOutlet);
        distanceArray.push(wariDistance);

        // var outlet = document.getElementById('outlet');
        // var takeawayOutlet = document.getElementById('takeawayOutlet');

        // if (gulshanDelivery)
        // {
        //     console.log(branches[0].tag);
        //     setStore(branches[0].tag);
        // }else if (gulshan2Delivery)
        // {
        //     console.log(branches[1].tag);
        //     setStore(branches[1].tag);
        // }else
        if (dhanmondiDelivery)
        {

            console.log(branches[2].tag);
            setStore(branches[2].tag);
        }else if (dhanmondi2Delivery)
        {
            console.log(branches[3].tag);
            setStore(branches[3].tag);
        }
        // else if (bailyDelivery)
        // {
        //     console.log(branches[4].tag);
        //     setStore(branches[4].tag);
        // }else if (uttaraDelivery)
        // {
        //     console.log(branches[5].tag);
        //     setStore(branches[5].tag);
        // }
        else if (uttara2Delivery)
        {
            console.log(branches[6].tag);
            setStore(branches[6].tag);
        }
        // else if (bhataraDelivery)
        // {
        //     console.log(branches[7].tag);
        //     setStore(branches[7].tag);
        // }
        else if (bananiDelivery)
        {
            setStore(branches[8].tag);
            console.log(branches[8].tag);
        }else if (mirpurDelivery)
        {
            console.log(branches[9].tag);
            setStore(branches[9].tag);
        }
        else if (mirpur2Delivery)
        {
            console.log(branches[10].tag);
            setStore(branches[10].tag);
        }else if (wariDelivery)
        {
            console.log(branches[11].tag);
            setStore(branches[11].tag);
            // outlet.textContent = branches[11].name+', '+branches[11].location;
            // console.log('Nearest Outlet '+'Name:'+ branches[11].name+', Address:'+branches[11].location )
        }else
        {
            // outlet.textContent = 'No outlet found, click on use my location once again to recheck.';

            // console.log(distanceArray);
            let nearestOutlet = distanceArray.sort((a,b) => a - b).slice(0, 2);
            let nearestOutlet_1 = nearestOutlet[0];
            let nearestOutlet_2 = nearestOutlet[1];
            let takeAway = [];
            // console.log(nearestOutlet);

            if (nearestOutlet_1 == gulshanDistance || nearestOutlet_2 == gulshanDistance)
            {
                takeAway.push([branches[0].tag,gulshanDistance]);
            }

            if(nearestOutlet_1 == gulshan2Distance || nearestOutlet_2 == gulshan2Distance){
                takeAway.push([branches[1].tag,gulshan2Distance]);
            }

            if(nearestOutlet_1 == dhanmondiDistance || nearestOutlet_2 == dhanmondiDistance){
                takeAway.push([branches[2].tag,dhanmondiDistance]);
            }

            if(nearestOutlet_1 == dhanmondi2Distance || nearestOutlet_2 == dhanmondi2Distance){
                takeAway.push(branches[3].tag,dhanmondi2Distance);
            }

            if(nearestOutlet_1 == bailyDistance || nearestOutlet_2 == bailyDistance){
                takeAway.push([branches[4].tag,bailyDistance]);
            }

            if(nearestOutlet_1 == uttaraDistance || nearestOutlet_2 == uttaraDistance){
                takeAway.push([branches[5].tag,uttaraDistance]);
            }

            if(nearestOutlet_1 == uttara2Distance || nearestOutlet_2 == uttara2Distance){
                takeAway.push([branches[6].tag,uttara2Distance]);
            }

            if(nearestOutlet_1 == bhataraDistance || nearestOutlet_2 == bhataraDistance){
                takeAway.push([branches[7].tag,bhataraDistance]);
            }

            if(nearestOutlet_1 == bananiDistance || nearestOutlet_2 == bananiDistance){
                takeAway.push([branches[8].tag,bananiDistance]);
            }

            if(nearestOutlet_1 == mirpurDistance || nearestOutlet_2 == mirpurDistance){
                takeAway.push([branches[9].tag,mirpurDistance]);
            }

            if(nearestOutlet_1 == mirpur2Distance || nearestOutlet_2 == mirpur2Distance) {
                takeAway.push([branches[10].tag,mirpur2Distance]);
            }

            if(nearestOutlet_1 == wariDistance || nearestOutlet_2 == wariDistance){
                takeAway.push([branches[11].tag,wariDistance]);
            }
            setStore(takeAway);
        }


        //calculates distance between two points in km's
        function calculateDistance(pointer_1, pointer_2) {
            var dist = (google.maps.geometry.spherical.computeDistanceBetween(pointer_1, pointer_2) / 1000).toFixed(2);
            return parseFloat(dist);

        }
    };

    if(Object.keys(sklLatLng).length === 0) {



        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };


                sklLatLng.lat = pos.lat;
                sklLatLng.lng = pos.lng;


                // sklLatLng.lat = 23.813629;
                // sklLatLng.lng = 90.422628;


                // infoWindow.setPosition(pos);
                // infoWindow.setContent('Your Location');
                // infoWindow.open(map);
                // map.setCenter(pos);

                console.log(pos.lat+'----'+pos.lng);

                geocoder.geocode({'location': pos}, function(results, status) {

                    if (status === 'OK') {
                        if (results[0]) {
                            // document.getElementById('print').textContent = results[0].formatted_address;
                            console.log(results[0].formatted_address);
                            setLocation(results[0].formatted_address);
                            setLatlng();
                            addressName = results[0].formatted_address;
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }

                });

                setTimeout(function() {

                    infoWindow.setPosition(pos);
                    // infoWindow.setContent('Your Location');
                    infoWindow.setContent(addressName);
                    infoWindow.open(map);
                    map.setCenter(pos);
                    // console.log(sklLatLng.lat);
                }, 1000);

            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    } else {
        setLocation('ssss');
        setLatlng();
    }


    gulshanTriangle.setMap(map);
    gulshan2Triangle.setMap(map);
    dhanmondiTriangle.setMap(map);
    dhanmondi2Triangle.setMap(map);
    bailyTriangle.setMap(map);
    uttaraTriangle.setMap(map);
    uttara2Triangle.setMap(map);
    mirpurTriangle.setMap(map);
    mirpur2Triangle.setMap(map);
    bhataraTriangle.setMap(map);
    bananiTriangle.setMap(map);
    wariTriangle.setMap(map);

}