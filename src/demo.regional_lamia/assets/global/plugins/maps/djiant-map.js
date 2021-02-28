        /**
         * Create new map
         */
        var infowindow;
        var map;
        var gray_icon =  'markers/Marker-gris.png' ;
        var blue_icon =  'markers/Marker-blue.png' ;
        var locations = [["1","47.591740","-2.213030","DDDZADZA","1"],["2","47.808014","-1.314897","AZDZADAZD","1"],["3","48.222664","-2.538084","JFJFLFLJHFLJHH","1"],["4","49.053207","0.789913","3T34T34","1"],["5","48.152382","7.030147","43T34T34","1"],["6","36.074814","2.395272","ZFSD","1"],["7","35.986851","6.264401","SSCSDVSDV","1"],["8","35.917667","3.933600","SSCSDVSDV","1"],["9","35.917667","3.933600","SSCSDVSDV","1"],["10","35.917667","3.933600","SSCSDVSDV","1"],["11","35.831326","4.528562","IHJ%KJJK","1"],["12","36.425854","5.226193","SDCSDSDC","1"],["13","35.631557","3.291024","CDCSDC","1"],["14","36.209503","1.411965","CQSCQSCSQ","1"],["15","36.269238","1.618338","SFSFSDFSDF","1"],["16","47.877491","-2.142577","SFSDFSDFSDF","0"],["17","47.433479","-1.098875","SDFSDFSD","0"],["18","36.187763","0.934636","HJVSLHSQVDQHSGDLQS","1"],["19","47.651257","0.757119","cmlqk","0"]];
        var myOptions = {
          mapTypeControl: false,
          streetViewControl: false,
          zoomControl:false,
          fullscreenControl: false,
          zoom: 3,
          center: new google.maps.LatLng(33.8445935,2.325165),
          mapTypeId: 'roadmap',
          styles: [
  {
    "stylers": [
      {
        "color": "#e8e8e8"
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b5b5b5"
      },
      {
        "saturation": -5
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#969696"
      },
      {
        "saturation": -5
      },
      {
        "weight": 6
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#969696"
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "stylers": [
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "landscape.natural.landcover",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.landcover",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.landcover",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.landcover",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.terrain",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.terrain",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.terrain",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural.terrain",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "color": "#ffffff"
      },
      {
        "visibility": "on"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]

        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);




        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  gray_icon  : blue_icon,
                html: 
              '  <div class="container-full-width"><div class="header"><div class=""><div class="container d-flex line1"><img src="assets/new-icons/Server.svg" class="icon mr-2"><p class="title">Pays de la Loire </p></div><hr><div class="container titles row line2"><div class="border-left-1 padding-left-0 col-4"><p class="title">A propos</p></div><div class="border-left-1 padding-left-0 col-8"><p class="title">Ressources</p></div></div><hr></div></div> <div class="content"> <div class="container row"> <div class="padding-left-0 col-4"><div class="tab-titles"><img src="assets/gris-window.png" width="100%" class="thumbnail"><h5 class="title5">Pays de la Loire</h5><p>, France </p></div> </div> <div class="padding-left-0 col-8"><div class="tab-titles modules"><div class="module text-center pt-2 active"> <a href="info.djiant.com/djiant-cluster" target="_blanc"> <img src="assets/new-icons/Fenetre-Server-Website.svg" class="icon-module"> <p class="title">Website</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-Directory.svg" class="icon-module mr-2"> <p class="title">Business Directory</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-Dliles.svg" class="icon-module mr-2"> <p class="title">File explorer</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-DPages.svg" class="icon-module mr-2"> <p class="title">Page Editor</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-Djournal.svg" class="icon-module mr-2"> <p class="title">Journal</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-DMarket.svg" class="icon-module mr-2"> <p class="title">Analytic</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-DContacts.svg" class="icon-module mr-2"> <p class="title">Contact</p> </a> </div><div class="module text-center pt-2"> <a target="_blanc"> <img src="assets/new-icons/Fenetre-Server-Dcalendar.svg" class="icon-module mr-2"> <p class="title">Calendar</p> </a> </div> </div> </div> </div> </div></div>'
            });
            infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
          



  $(document).on("click",".body",function(){
    $('.popupInfo').addClass('small');

}); 

