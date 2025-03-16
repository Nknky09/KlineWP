let map;
let markers = [];
let infoWindow;
const initialCenter = { lat: 39.3350665171602, lng: -97.40382004355706 };
const initialZoom = 4;

const mapStyle = [
  {
    featureType: "administrative",
    elementType: "all",
    stylers: [{ visibility: "on" }, { lightness: 33 }],
  },
];

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: initialZoom,
    center: initialCenter,
    styles: mapStyle,
    mapTypeId: "terrain",
  });

  infoWindow = new google.maps.InfoWindow();

  //  "Reset View" next to Fullscreen button in TOP_RIGHT
  const resetControlDiv = document.createElement("div");
  const resetControlUI = document.createElement("button");
  resetControlUI.innerText = "Reset View";
  resetControlUI.className = "reset-map-button";
  resetControlUI.style.marginRight = "8px";
  resetControlUI.onclick = () => {
    map.setCenter(initialCenter);
    map.setZoom(initialZoom);
  };
  resetControlDiv.appendChild(resetControlUI);
  map.controls[google.maps.ControlPosition.TOP].push(resetControlDiv);

  // 👉 Close InfoWindow when clicking outside
  map.addListener("click", () => {
    infoWindow.close();
  });

  fetch(`${window.location.origin}/wp-content/themes/KlineWP/stores.json`)
    .then(response => response.json())
    .then(data => {
      if (data && data.features) {
        data.features.forEach((feature, index) => {
          const coords = {
            lat: feature.geometry.coordinates[1],
            lng: feature.geometry.coordinates[0],
          };
          const props = feature.properties;

          const marker = new google.maps.Marker({
            position: coords,
            map,
            title: props.name,
            animation: google.maps.Animation.DROP,
            icon: {
              url: `${window.location.origin}/wp-content/themes/KlineWP/logo/logo-icon.png`,
              scaledSize: new google.maps.Size(32, 32),
            },
          });

          const contentString = `
            <div class="map-infowindow">
              <h4 class="map-location-title">${props.name}</h4>
              <p class="map-location-desc">${props.description}</p>
              <p class="map-location-info"><strong>Hours:</strong> ${props.hours}</p>
              <p class="map-location-info"><strong>Phone:</strong> ${props.phone}</p>
              <a href="${props.url}" class="map-direction-link" target="_blank">
                <img src="https://maps.gstatic.com/favicon3.ico" alt="Google Maps" style="height: 14px; vertical-align: middle; margin-right: 5px;">
                Get Directions
              </a>
            </div>
          `;

          marker.addListener("click", () => {
            infoWindow.setContent(contentString);
            infoWindow.open(map, marker);
            map.setCenter(marker.getPosition());
            map.setZoom(12);
          });

          markers.push(marker);
        });

        // Global myClick() to simulate zoom-on-sidebar-click
        window.myClick = function (index) {
          if (markers[index]) {
            google.maps.event.trigger(markers[index], "click");
          }
        };
      }
    })
    .catch(error => {
      console.error("Failed to load store data:", error);
    });
}
