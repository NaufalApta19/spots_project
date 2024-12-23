document.addEventListener('DOMContentLoaded', () => { 
    const map = L.map('map').setView([-7.7956, 110.3695], 13); 
 
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
        attribution: '©️ OpenStreetMap contributors' 
    }).addTo(map); 

    const spots = [
        { name: "Gudeg Yu Djum", description: "Famous traditional Javanese food.", lat: -7.7953, lng: 110.3691, link: "https://g.co/kgs/vJcxTye", image: "../assets/images/gudeg.jpg" },
        { name: "Bakmi Jawa Mbah Gito", description: "Legendary Javanese noodle.", lat: -7.8091, lng: 110.3796, link: "https://g.co/kgs/kgjxuEh", image: "../assets/images/bakmi.jpg" },
        { name: "Angkringan Lek Man", description: "Popular street food spot.", lat: -7.7985, lng: 110.3708, link: "https://g.co/kgs/DwYEET9", image: "../assets/images/angkringan.jpg" },
        { name: "Sate Klatak Pak Bari", description: "Unique grilled mutton skewers.", lat: -7.9266, lng: 110.4568, link: "https://g.co/kgs/eQV9i5K", image: "../assets/images/sateklatak.jpg" },
        { name: "Mangut Lele Mbah Marto", description: "Spicy smoked catfish dish.", lat: -7.8372, lng: 110.3465, link: "https://g.co/kgs/kiGtq7i", image: "../assets/images/mangut.jpg" },
        { name: "Malioboro Street", description: "Popular shopping destination.", lat: -7.8001, lng: 110.3642, link: "https://g.co/kgs/VqgPgH5", image: "../assets/images/malioborojalan.jpg" },
        { name: "Keraton Yogyakarta", description: "Royal palace of Yogyakarta.", lat: -7.8057, lng: 110.3640, link: "https://g.co/kgs/G8n4m1z", image: "../assets/images/keraton.jpg" },
        { name: "Taman Sari", description: "Historical water palace.", lat: -7.8081, lng: 110.3645, link: "https://g.co/kgs/tx86ZvW", image: "../assets/images/tamansari.jpg" },
        { name: "Prambanan Temple", description: "Largest Hindu temple in Indonesia.", lat: -7.7519, lng: 110.4911, link: "https://g.co/kgs/6vGs7N4", image: "../assets/images/prambanan.jpg" },
        { name: "Ratu Boko", description: "Ancient archaeological site.", lat: -7.7700, lng: 110.4899, link: "https://g.co/kgs/6vGs7N4", image: "../assets/images/ratuboko.jpg" },
        { name: "Pule Payung", description: "Hidden spot with stunning views.", lat: -7.7801, lng: 110.3429, link: "https://g.co/kgs/1hmzhTR", image: "../assets/images/pulepayung.jpg" },
        { name: "Jomblang Cave", description: "Unique cave experience.", lat: -8.0305, lng: 110.6126, link: "https://g.co/kgs/R6Spu5K", image: "../assets/images/jomblang.jpg" },
        { name: "Kalibiru", description: "Great for outdoor activities.", lat: -7.7311, lng: 110.1418, link: "https://maps.app.goo.gl/rRceSKEoEcjz5QZF8", image: "../assets/images/kalibiru.jpg" },
        { name: "Wediombo Beach", description: "Secluded beach area.", lat: -8.1862, lng: 110.6631, link: "https://g.co/kgs/Sij9dxp", image: "../assets/images/wediombo.jpg" },
        { name: "Nglinggo Tea Plantation", description: "Scenic tea gardens.", lat: -7.6262, lng: 110.1779, link: "https://g.co/kgs/tFXVsZb", image: "../assets/images/nglinggo.jpg" }
    ];

    const orangeIcon = new L.Icon({
        iconUrl: 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 32 48"%3E%3Ccircle cx="16" cy="42" r="6" fill="%23FF8C00" stroke="%23000000" stroke-width="2" /%3E%3Cpath d="M16 2C9.37 2 4 6.48 4 11.67c0 5.62 4 13.35 7.85 19.34 1.42 2.1 2.85 4.04 4.15 5.72 1.28-1.66 2.69-3.59 4.15-5.72 3.85-5.99 7.85-13.72 7.85-19.34C28 6.48 22.63 2 16 2z" fill="%23FF8C00" stroke="%23000000" stroke-width="2" /%3E%3C/svg%3E',
        iconSize: [50, 48],
        iconAnchor: [16, 42],
        popupAnchor: [0, -42],
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/images/marker-shadow.png',
        shadowSize: [41, 41],
        shadowAnchor: [12, 41]
    });
    
 
    spots.forEach(spot => { 
        const marker = L.marker([spot.lat, spot.lng], { icon: orangeIcon }).addTo(map);  
 
        marker.bindPopup(` 
            <div class="popup-content"> 
                <img src="${spot.image}" alt="${spot.name}" style="width: 100%; height: auto; border-radius: 10px;"> 
                <h3>${spot.name}</h3> 
                <p>${spot.description}</p> 
            </div> 
        `).openPopup(); 
    }); 
     
    window.addEventListener('resize', () => { 
        map.invalidateSize(); 
    }); 
 
});