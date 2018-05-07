<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      {!! Form::open(['route'=>'employes.store','files'=>true]) !!}
        <div class="form-group">
            <strong>FristName:</strong>
            {!! Form::text('fristname', null, array('placeholder' => 'FristName','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>LastName:</strong>
            {!! Form::text('lastname', null, array('placeholder' => 'LastName','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>job:</strong>
            {!! Form::text('job', null, array('placeholder' => 'job','class' => 'form-control')) !!}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>image:</strong>
                {!! Form::file('image', null,array()) !!}
                      </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                        <strong>location:</strong>
                        <input type="text" id="searchmap" >
                        <div id="map-canvas"> </div>
                      </div>



                      <div class="form-group">
                            <strong>lat:</strong>
                            <input type="text" id="lat" name="lat"  class="form-control input-sm">

                          </div>
                          <div class="form-group">
                                <strong>lng:</strong>
                                <input type="text" id="lng" name="lng"  class="form-control input-sm">

                              </div>

                      <script>
                      var map = new google.maps.Map(document.getElementById('map-canvas'),
                      {
                        center:{
                          lat: 30.0666664,
                          lng:  31.5499978
                        },zoom:15
                      }
                      );
                      var marker = new google.maps.Marker({
                        position:{
                          lat: 30.0666664,
                          lng:  31.5499978
                        },map: map,
                        draggable:true
                      }
                      );
                      var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));


                      google.maps.event.addListener(searchBox,'places_changed', function() {
                        var places = searchBox.getPlaces();
                        var bounds = new google.maps.LatLngBounds();
                        var i,place;
                        for ( i = 0; place=places[i]; i++) {
                           bounds.extend(place.geometry.location);
                           marker.setPosition(place.geometry.location);
                         }
                         map.fitBounds(bounds);
                         map.setZoom(15);
                       });
                           google.maps.event.addListener(marker,'position_changed', function() {
                             var lat =marker.getPosition().lat();
                             var lng =marker.getPosition().lng();
                                $('#lat').val(lat);
                                $('#lng').val(lng);
                           });

                      </script>
 -->

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
