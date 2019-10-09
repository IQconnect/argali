const loadGoogleMapsApi = require('load-google-maps-api')

const CONFIG = {
    ELEM: '[google-map]',
};

const Gmap = {
    init() {
        const { ELEM } = CONFIG;

        this.elem = document.querySelector(ELEM);
        console.log('init');
        if (this.elem) {
            this.initMap();
        }
    },

    initMap() {
        const elem = this.elem;

        loadGoogleMapsApi().then(function (googleMaps) {
            const map = new googleMaps.Map(elem, {
                center: {
                    lat: Number(elem.dataset.lat),
                    lng: Number(elem.dataset.lng),
                },
                zoom: 12,
            });

            new googleMaps.Marker({
                position: {
                    lat: Number(elem.dataset.lat),
                    lng: Number(elem.dataset.lng),
                },
                map: map,
                title: elem.dataset.title,
            });
        }).catch(function (error) {
                console.error(error)
            });
    },
}

export default Gmap;