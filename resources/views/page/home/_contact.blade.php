<section id="contact" class="p-80px-tb bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="section-title text-center m-60px-b">
                    <h2>Get in touch</h2>
                    <div class="divider-circle mx-auto"></div>
                    <p>Folly was these three and songs arose whose. Of in vicinity contempt together in possible
                        branched.
                        Assured company hastily looking garrets in oh.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 m-25px-b">
                <div class="contact-form-box bg-light w-100 rounded" id="map" style="height: 450px;">
                </div>
            </div>
            <!-- End contact form area-->
            <div class="col-lg-4 col-md-6 col-sm-12 m-25px-b">
                <div class="address-wrap bg-white p-30px rounded">
                    <ul>
                        <li><span>Address:</span>Jl. Gn. Talang VI No.B-1, Padangsambian<br> Denpasar Barat</li>
                        <li><span>Phone:</span><a href="#">+62</a></li>
                        <li><span>Email:</span><a href="#">-</a></li>
                    </ul>
                    <h4>Connect our socials</h4>
                    <ul class="nav light-icon social-icons">
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</section>

@push('scripts')
    <script>
        var map;

        function initMap() {
            // Coordinates for ASM Bali
            var location = {
                lat: -8.6723405,
                lng: 115.1873575
            };

            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 19 // Adjust the zoom level as needed
            });

            // Add a marker at the location
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'ASM Bali'
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.8/mapsJavaScriptAPI.js" async defer>
    </script>
@endpush
