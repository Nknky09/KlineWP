// Create the map.
let map;
let markers = [];
let infoWindow;
let infoWindowOpenByClick = false;
let hoverOutTimer;

const mapStyle = [
  {
    featureType: "administrative",
    elementType: "all",
    stylers: [
      {
        visibility: "on",
      },
      {
        lightness: 33,
      },
    ],
  },
];

// Initialize and add the map
function initMap() {
  const initialCenter = { lat: 39.3350665171602, lng: -97.40382004355706 };
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: initialCenter,
    styles: mapStyle,
    mapTypeId: "terrain",
  });

  infoWindow = new google.maps.InfoWindow();

  // Load the stores GeoJSON onto the map.

  const features = [
    {
      geometry: {
        type: "Point",
        coordinates: [-73.753493, 40.660532],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "145-68 228th St Unit 2, Springfield Gardens, NY 11413",
        name: "K Line Logistics - New York",
        phone: "+1 (718) 520-1658",
        url: "https://maps.app.goo.gl/NvkZE1ehpAbdaRYe6",
        storeid: "01",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-118.29101476082197, 33.85222911250445],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "19701 Vermont Ave, Torrance, CA 90502",
        name: "K Line Logistics - Los Angeles",
        phone: "+1 (310) 615-0555",
        url: "https://maps.app.goo.gl/id9YhQajWYUmnhru9",
        storeid: "02",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-87.99731848880427, 41.97950164342631],
      },
      properties: {
        category: "Branch",
        hours: "8am - 5pm",
        description: "265 S Prospect Ave, Itasca, IL 60143",
        name: "K Line Logistics - Chicago",
        phone: "+1 (630) 250-0337",
        url: "https://maps.app.goo.gl/K3shyp6yFey81u9f8",
        storeid: "03",
      },
    },

    {
      geometry: {
        type: "Point",
        coordinates: [-84.40634564103671, 33.85401600951692],
      },
      properties: {
        category: "Branch",
        hours: "8am - 5pm",
        description: "4345 International Pkwy Suite 101, Atlanta, GA 30354",
        name: "K Line Logistics - Atlanta",
        phone: "+1 (404) 363-9000",
        url: "https://maps.app.goo.gl/GHWCfH8FesNiC3eo9",
        storeid: "05",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-97.01919152142311, 32.96054509977207],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "9160 Sterling Street Suite 120, Irving, TX 75063",
        name: "K Line Logistics - Dallas",
        phone: "+1 (817) 481-7841",
        url: "https://maps.app.goo.gl/LKj584dx2ddekrDj7",
        storeid: "06",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-122.38187548679089, 37.59734467037432],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "40 A Broderick Road, Burlingame, CA 94010",
        name: "K Line Logistics - San Fransisco",
        phone: "+1 (650) 993-7370",
        url: "https://maps.app.goo.gl/3syekWSjkEQnY5dW6",
        storeid: "07",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-122.32368389933409, 47.4308718623965],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "855 South 192nd Street Seatac, WA 96148",
        name: "K Line Logistics - Seattle",
        phone: "+1 (206) 824-1785",
        url: "https://maps.app.goo.gl/b8UhiwemM1VU3RkF7",
        storeid: "08",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-98.22871063985212, 26.139153654992324],
      },
      properties: {
        category: "Branch",
        hours: "9am - 6pm",
        description: "7801 S Jackson Road Pharr, TX 78577",
        name: "K Line Logistics - McAllen",
        phone: "+1 (956) 843-7665",
        url: "https://maps.app.goo.gl/4LGAPoBLTZYXXZJTA",
        storeid: "09",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-117.1669394744985, 32.88955497637457],
      },
      properties: {
        category: "Office",
        hours: "9am - 5pm",
        description: "7220 Trade St, Suite 216 San Diego, CA 92121",
        name: "K Line Logistics - San Diego",
        phone: "+1 (858) 695-8270",
        url: "https://maps.app.goo.gl/G74Jx6xmPbaj7HVy5",
        storeid: "10",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-111.93947895361012, 33.43127311322803],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "60 E Rio Salado Parkway, Suite 900 Tempe, AZ 85281",
        name: "K Line Logistics - Phoenix",
        phone: "+1 (480) 366-1472",
        url: "https://maps.app.goo.gl/JT7tV6mHEa9yi2MN9",
        storeid: "11",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-83.11252360746748, 40.00073660545017],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "2315 Westbrooke Drive Columbus, Ohio 43228",
        name: "K Line Logistics - Columbus",
        phone: "+1 (614) 987-1165",
        url: "https://maps.app.goo.gl/WX1ZHkVh7BjLUfzi9",
        storeid: "12",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-84.491037528719, 38.02959276690669],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "824 Euclid Ave, Suite A-202B Lexington, KY 40502",
        name: "K Line Logistics - Lexington",
        phone: "+1 (859) 523-0305",
        url: "https://maps.app.goo.gl/vYBkATqok3sQAeA87",
        storeid: "13",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-96.70302446840006, 40.81173983081313],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "233 South 13th Street, Suite 1126 Lincoln, NE 68508",
        name: "K Line Logistics - Lincoln",
        phone: "+1 (402) 835-5664",
        url: "https://maps.app.goo.gl/a5rNVatFVBnaFaUp9",
        storeid: "14",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-80.84095550363283, 35.15062951656816],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "5960 Fairview Rd Suite 400, Charlotte NC 28210",
        name: "K Line Logistics - Charlotte",
        phone: "+1 (704) 414-6550",
        url: "https://maps.app.goo.gl/mDRBMBzs1DkLyRks5",
        storeid: "15",
      },
    },
    {
      geometry: {
        type: "Point",
        coordinates: [-86.67429350251356, 34.697403226840734],
      },
      properties: {
        category: "Office",
        hours: "8am - 5pm",
        description: "4100 Market Stree Suite 100, Huntsville, AL 35808",
        name: "K Line Logistics - Huntsville",
        phone: "+1 (256) 289-7075",
        url: "https://maps.app.goo.gl/q33zZEYHpQJ8BFrv9",
        storeid: "16",
      },
    },
  ];

  features.forEach((feature, index) => {
    const position = new google.maps.LatLng(
      feature.geometry.coordinates[1],
      feature.geometry.coordinates[0]
    );
    const marker = new google.maps.Marker({
      position,
      map,
      title: feature.properties.name,
      icon: {
        url: "https://koseisa281310751.wpcomstaging.com/wp-content/uploads/2024/03/logo-icon-1.png",
        scaledSize: new google.maps.Size(25, 25),
      },
    });

    marker.addListener("click", () => {
      showInfoWindow(feature, position);
      map.setZoom(13);
      map.setCenter(marker.getPosition());
    });

    marker.addListener("mouseover", () => {
      clearTimeout(hoverOutTimer);
      if (!infoWindowOpenByClick) {
        showInfoWindow(feature, position);
      }
    });

    marker.addListener("mouseout", () => {
      if (!infoWindowOpenByClick) {
        hoverOutTimer = setTimeout(() => {
          infoWindow.close();
        }, 300);
      }
    });

    markers.push(marker);
  });

  map.addListener("click", () => {
    infoWindowOpenByClick = false;
    infoWindow.close();
  });

  const centerControlDiv = document.createElement("div");
  createCenterControl(centerControlDiv, map, initialCenter);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerControlDiv);

  google.maps.event.addListenerOnce(map, "idle", function () {
    map.setCenter(initialCenter);
    map.setZoom(4);
  });
}

function showInfoWindow(feature, position) {
  const name = feature.properties.name;
  const description = feature.properties.description;
  const phone = feature.properties.phone;
  const url = feature.properties.url;
  const content = `
    <div style="width: 280px; height: 130px;">
      <p style="font-size: 18px;"><b>${name}</b></p>
      <p style="font-size: 14px;">${description}</p>
      <p style="font-size: 14px;"><b>Phone:</b> ${phone}<br />
      <a href="${url}" target="_blank">Open on Google Maps</a></p>
    </div>
  `;
  infoWindow.setContent(content);
  infoWindow.setPosition(position);
  infoWindow.setOptions({ pixelOffset: new google.maps.Size(0, -20) });
  infoWindow.open(map);
}

function createCenterControl(controlDiv, map, center) {
  const controlUI = document.createElement("button");
  controlUI.style.backgroundColor = "#fff";
  controlUI.style.border = "2px solid #fff";
  controlUI.style.borderRadius = "3px";
  controlUI.style.boxShadow = "0 2px 3px rgba(0,0,0,.3)";
  controlUI.style.cursor = "pointer";
  controlUI.style.marginTop = "10px";
  controlUI.style.marginBottom = "10px";
  controlUI.style.textAlign = "center";
  controlUI.title = "Click to reset the map";
  controlDiv.appendChild(controlUI);

  const controlText = document.createElement("div");
  controlText.style.color = "rgb(25,25,25)";
  controlText.style.fontFamily = "Roboto,Arial,sans-serif";
  controlText.style.fontSize = "16px";
  controlText.style.lineHeight = "34px";
  controlText.style.paddingLeft = "5px";
  controlText.style.paddingRight = "5px";
  controlText.style.fontWeight = "bold";
  controlText.innerHTML = "Reset";
  controlUI.appendChild(controlText);

  controlUI.addEventListener("click", () => {
    map.panTo(center);
    let zoom = map.getZoom();
    setTimeout(() => smoothZoom(map, 4, zoom), 120);
  });
}

function smoothZoom(map, targetZoom, currentZoom) {
  if (currentZoom < targetZoom) {
    let zoom = currentZoom + 1;
    map.setZoom(zoom);
    setTimeout(() => smoothZoom(map, targetZoom, zoom), 120);
  } else if (currentZoom > targetZoom) {
    let zoom = currentZoom - 1;
    map.setZoom(zoom);
    setTimeout(() => smoothZoom(map, targetZoom, zoom), 120);
  }
}

function myClick(id) {
  map.setCenter(markers[id].getPosition());
  map.setZoom(13);
  google.maps.event.trigger(markers[id], "click");
}

document.addEventListener("DOMContentLoaded", initMap);
