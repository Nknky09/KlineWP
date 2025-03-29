let map;
let markers = [];
let infoWindow;
let featuresData = [];

const initialCenter = { lat: 39.3350665171602, lng: -97.40382004355706 };
const initialZoom = 4;

const mapStyle = [
  {
    featureType: "administrative",
    elementType: "all",
    stylers: [{ visibility: "on" }, { lightness: 33 }],
  },
];

function tryInitMap(retry = 0) {
  if (typeof google === "undefined" || typeof google.maps === "undefined") {
    if (retry < 5) {
      console.warn(`Google Maps not ready, retrying... (${retry + 1})`);
      setTimeout(() => tryInitMap(retry + 1), 600);
    } else {
      console.error("Google Maps API failed to load.");
    }
    return;
  }
  initMap();
}

document.addEventListener("DOMContentLoaded", function () {
  tryInitMap();
});

function initMap() {
  const mapElement = document.getElementById("map");
  if (!mapElement) return;
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: initialZoom,
    center: initialCenter,
    styles: mapStyle,
    mapTypeId: "terrain",
  });

  infoWindow = new google.maps.InfoWindow();

  // Reset View Button
  const resetControlDiv = document.createElement("div");
  const resetControlUI = document.createElement("button");
  resetControlUI.innerText = "Reset View";
  resetControlUI.className = "reset-map-button";
  resetControlUI.style.marginRight = "8px";
  resetControlUI.onclick = () => {
    map.setCenter(initialCenter);
    map.setZoom(initialZoom);
    infoWindow.close();
  };
  resetControlDiv.appendChild(resetControlUI);
  map.controls[google.maps.ControlPosition.TOP].push(resetControlDiv);

  map.addListener("click", () => {
    infoWindow.close();
  });

  fetch(`${window.location.origin}/wp-content/themes/KlineWP/stores.json`)
    .then(response => response.json())
    .then(data => {
      if (!data || !data.features) return;
      featuresData = data.features;

      const sidebarWrapper = document.getElementById("sidebar-map-wrapper");
      if (!sidebarWrapper) {
        console.warn("Sidebar container not found: #sidebar-map-wrapper");
        return;
      }

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
          
              <span class="map-location-info"><strong>Address:</strong> ${props.description}</span><br>
              <span class="map-location-info"><strong>Hours:</strong> ${props.hours}</span><br>
              <span class="map-location-info"><strong>Phone:</strong> ${props.phone}</span>
              <a href="${props.url}" class="map-direction-link" target="_blank">
                <img src="https://maps.gstatic.com/favicon3.ico" alt="Google Maps" class="map-direction-icon">
                Open in GoogleMaps
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

        const locationItem = document.createElement("div");
        locationItem.className = "location-item";
        locationItem.setAttribute("data-state", props.state);
        locationItem.style.display = "flex";
        locationItem.style.alignItems = "center";
        locationItem.style.marginBottom = "10px";
        locationItem.style.cursor = "pointer";

        locationItem.addEventListener("click", () => {
          infoWindow.setContent(contentString);
          infoWindow.open(map, marker);
          map.setCenter(marker.getPosition());
          map.setZoom(12);
        });

        const link = document.createElement("a");
        link.textContent = props.name.replace("K Line Logistics - ", "");
        link.href = "javascript:void(0)";
        locationItem.appendChild(link);
        sidebarWrapper.appendChild(locationItem);
      });

      const searchInput = document.getElementById("map-location-search");
      if (searchInput) {
        searchInput.addEventListener("input", function () {
          const keyword = this.value.toLowerCase();
          const items = document.querySelectorAll(
            ".sidebar-map-wrapper .location-item"
          );
          items.forEach(item => {
            const locationText =
              item.querySelector("a")?.textContent.toLowerCase() || "";
            const stateText =
              item.getAttribute("data-state")?.toLowerCase() || "";
            if (locationText.includes(keyword) || stateText.includes(keyword)) {
              item.style.display = "flex";
            } else {
              item.style.display = "none";
            }
          });
        });
      }
    })
    .catch(error => {
      console.error("Error loading stores.json:", error);
    });
}

window.initMap = initMap;
