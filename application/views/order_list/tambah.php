<div class="img" >
    <img src="../img/eat.png">
</div>

<!-- <?php //echo validation_errors(); ?> -->
<div class="container">
    <div class="card w-100">
        <div class="card-header">
            <h3 class="card-title text-center">Order</h3>
        </div>

            <form action="" method="post">
                <div id="map"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 0.920909, lng: 104.514704};
                    var maO = new google.maps.Map(document.getElementById('map'), {
                      zoom: 9,
                      center: uluru
                    });

                    var contentString = '<div id="content">'+
                        '<div id="siteNotice">'+
                        '</div>'+
                        '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                        '<div id="bodyContent">'+
                        '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                        'sandstone rock formation in the southern part of the '+
                        'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                        'south west of the nearest large town, Alice Springs; 450&#160;km '+
                        '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                        'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                        'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                        'Aboriginal people of the area. It has many springs, waterholes, '+
                        'rock caves and ancient paintings. Uluru is listed as a World '+
                        'Heritage Site.</p>'+
                        '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                        'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                        '(last visited June 22, 2009).</p>'+
                        '</div>'+
                        '</div>';

                    var infowindow = new google.maps.InfoWindow({
                      content: contentString
                    });

                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map,
                      title: 'Uluru (Ayers Rock)'
                    });
                    marker.addListener('click', function() {
                      infowindow.open(map, marker);
                    });
                  }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlXTI26UPn_mzsPbf0xs3Rli9XGNmo5M&callback=initMap">
                </script>
                <br><br><br>
                <?php if( validation_errors() ): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                            
                        </div>
                    <?php endif; ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Panjang">
                </div>
                <div class="form-group">
                    <label for="meja">Meja</label>
                    <input type="text" name="meja" class="form-control" placeholder="Meja ke">
                </div>

                <div class="form-group">
                    <label for="makan">Pesan Makan</label>
                    <textarea class="form-control" name="makan" id="makan" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="minum">Pesan Minum</label>
                    <textarea class="form-control" name="minum" id="minum" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary col-md-12 mb-5">Order here</button>
            </form>
            
    </div>   
</div>