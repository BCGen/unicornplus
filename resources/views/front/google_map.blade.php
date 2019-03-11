<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_4YNT3_N2BZPn7ykTFokZx8jZW3hvANw&callback=initMap" async defer></script>
<script>
    var tableMap

    function initMap() {
        tableMap = new google.maps.Map(document.getElementById('gooMapTable'), {
            center: {
                lat: 35.658276,
                lng: 139.728525
            },
            zoom: 18,
            styles: [{
                    stylers: [{
                            saturation: -100
                        },
                        {
                            gamma: 0.8
                        },
                        {
                            lightness: 4
                        },
                        {
                            visibility: 'on'
                        }
                    ]
                },
                {
                    featureType: 'landscape.natural',
                    stylers: [{
                            visibility: 'on'
                        },
                        {
                            color: '#5dff00'
                        },
                        {
                            gamma: 4.97
                        },
                        {
                            lightness: -5
                        },
                        {
                            saturation: 100
                        }
                    ]
                }
            ]
        })

        var marker = new google.maps.Marker({
            position: {
                lat: 35.658276,
                lng: 139.728525
            },
            map: tableMap,
            title: 'Unicorn Kids International School'
        })

        initMap2()
    }

    // **************************手機板maps*************************

    var phoneMap

    function initMap2() {
        phoneMap = new google.maps.Map(document.getElementById('gooMapPhone'), {
            center: {
                lat: 35.658276,
                lng: 139.728525
            },
            zoom: 18,
            styles: [{
                    stylers: [{
                            saturation: -100
                        },
                        {
                            gamma: 0.8
                        },
                        {
                            lightness: 4
                        },
                        {
                            visibility: 'on'
                        }
                    ]
                },
                {
                    featureType: 'landscape.natural',
                    stylers: [{
                            visibility: 'on'
                        },
                        {
                            color: '#5dff00'
                        },
                        {
                            gamma: 4.97
                        },
                        {
                            lightness: -5
                        },
                        {
                            saturation: 100
                        }
                    ]
                }
            ]
        })
        var marker = new google.maps.Marker({
            position: {
                lat: 35.658276,
                lng: 139.728525
            },
            map: phoneMap,
            title: 'Unicorn Kids International School'
        })
    }
</script>
