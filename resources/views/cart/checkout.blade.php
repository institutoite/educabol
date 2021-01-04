@extends('layouts.appregister')

@section('content')
<style>
#map-canvas{
 width:600px;
 height:300px;
}
</style>

<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAnVKWBNY-BBpP8H3ZQ3omqkoxuD3LyhQ&libraries=places" type="text/javascript"></script>
<section class="checkout spad">
  <div class="container">
    <div class="checkout__form">
      <h4>Información de envío</h4>
      {!! Form::open(['route' => 'orders.store', 'method' => 'post']) !!}
      @csrf
      
          <div class="row">
            <div class="col-lg-8 col-md-6">

              <div class="form-group">
                  <label for="">Nombre Completo</label>
                  <input type="text" name="shipping_fullname" id="" class="form-control" value="{{ Auth::user()->name }}" required>
              </div>

              <div class="form-group">
                  <input type="hidden" name="shipping_state" id="" class="form-control" value="Bolivia">
              </div>

              <div class="form-group">
                  <input type="hidden" name="shipping_city" id="" class="form-control" value="Santa Cruz">
              </div>

              <div class="form-group">
                  <input type="hidden" name="shipping_zipcode" id="" class="form-control" value="591">
              </div>

              <div class="form-group">
                  <label for="">Numero de Celular</label>
                  <input type="text" name="shipping_phone" id="" class="form-control" value="{{ Auth::user()->celular }}" required>
              </div>

              <div class="form-group">
              <div id="map-canvas"></div>
              </div>

              <div class="form-group">
                  <label for="">Informacion adicional del lugar de envio</label>
                  <input type="text" name="shipping_address" id="" class="form-control" placeholder="# de casa o edificio" required> 
              </div>

              <div class="form-group">
              <input type="hidden" class="form-control input-sm" name="lat" id="lat">
              </div>

              <div class="form-group">
              <input type="hidden" class="form-control input-sm" name="lng" id="lng">
              </div>
              

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="checkout__order">
                    <h4>Resumen del Pedido</h4>
                    <div class="checkout__order__subtotal">Subtotal <span>Bs. {{\Cart::session(auth()->id())->getSubTotal()}}</span></div>
                    <div class="checkout__order__total">Total <span>Bs. {{\Cart::session(auth()->id())->getTotal()}}</span></div>

                    
                    <h4>Metodo de Pago</h4>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="Efectivo">
                            Efectivo

                        </label>

                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="Tranferencia Bancaria">
                            Tranferencia Bancaria

                        </label>

                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Realizar Pedido</button>
                </div>
            </div>
          </div>
      {!! Form::close() !!}


    </div>

  </div>

</section>

<script>
var map = new google.maps.Map(document.getElementById('map-canvas'),{
 zoom:17
});

navigator.geolocation.getCurrentPosition(function(position){
    var geolocate = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

 let lat = position.coords.latitude;
 let lng = position.coords.longitude;
 $('#lat').val(lat);
 $('#lng').val(lng);

    var marker= new google.maps.Marker({
 position:{
  lat:position.coords.latitude,
  lng:position.coords.longitude
 },
 map:map,
 draggable:true
});

var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
google.maps.event.addListener(searchBox,'places_changed',function(){
var places = searchBox.getPlaces();
var bounds = new google.maps.LatLngBounds();
var i , place;
for(i=0;place=places[i];i++){
 bounds.extend(place.geometry.location);
 marker.setPosition(place.geometry.location);
}
map.fitBounds(bounds);
map.setZoom(17);
});
google.maps.event.addListener(marker,'position_changed',function(){
  lat = marker.getPosition().lat();
  lng = marker.getPosition().lng();
 $('#lat').val(lat);
 $('#lng').val(lng);
});

    map.setCenter(geolocate);
});




</script>
</html>

    
@endsection
