@extends('layouts.app')

@section('content')
<div class="container-fluid" id="menu">
    <div class="row" id="startage">
        <div class="col-12"  style="padding-left: 0px;padding-right: 0px;">
            <div class="portada">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-lg-6 col-12 text-center">
                            <img src="{{ asset('img/cropped-orogold-logo-dgold.png') }}" alt="" style="height:150px; width:300px;">
                        </div>
                        <div class="col-lg-6 col-12" style="margin-top: 50px; margin-bottom:50px">
                            <date-component></date-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="font-size:1.8em">
                    <p style="color:#D4AF37 !important;">NUESTROS TRATAMIENTOS</p>
                    <p>
                        El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies utilizando aceites de masaje.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <table class="table table-borderless">
                        <tbody class="text-center">
                            <tr>
                                <td><a-avatar src="{{ asset('img/photo-1516238840914-94dfc0c873ae.jpg') }}" :size="140"/></td>
                                <td><a-avatar src="{{ asset('img/photo-1515377905703-c4788e51af15.jpg') }}" :size="140"/></td>
                                <td><a-avatar src="{{ asset('img/photo-1552693673-1bf958298935.jpg') }}" :size="140"/></td>
                            </tr>
                            <tr>
                                <td><h3 style="color:#D4AF37 !important;">MASAJES DE ORO</h3></td>
                                <td><h3 style="color:#D4AF37 !important;">EXFOLIACIÓN CON PRODUCTOS NATURALES</h3></td>
                                <td><h3 style="color:#D4AF37 !important;">RECONSTRUCCIÓN FACIAL</h3></td>
                            </tr>
                            <tr>
                                <td><p><strong>SPA Orogold</strong> ofrece tratatmientos especializados de la mano de nuestro profesionales expertos, con productos excepcionales de marca galardonadas.</p></td>
                                <td><p>El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de ralajación. Incluye un masaje de espalda, hombros, piernas y pies.</p></td>
                                <td><p>El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de ralajación. Incluye un masaje de espalda, hombros, piernas y pies.</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
            <di class="row">
                <div class="col-12">
                    <div class="who">
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="padding:30px">
                                    <p style="color:#D4AF37; font-size:1.8em">QUIENES SOMOS</p>
                                    <p style="color:white; font-size:1.2em">El lujoso spa en Orogold, en México, ofrece un refug sublime en pleno corazón de la ciudad.</p>
                                    <p style="color:white; font-size:1.2em">Los huéspedes pueden disfrutar de un gimnasio de última generación, una relajante sauna o duchas a chorro durante su escapada de 5 estrellas en nuestro hotel boutique en París. Por otra parte, nuestra nueva asociación con ZEAL COSMETICS asegura la disponiblidad de una gama de relajantes tratamientos faciales y corporales para mimarse y revitalizarse.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a-carousel effect="fade" autoplay>
                        <div><img src="{{ asset('img/photo-1489659639091-8b687bc4386e.jpg') }}" style="height: 580px !important; width: 100% !important"></div>
                        <div><img src="{{ asset('img/photo-1554057009-6798cb3d4a04.jpg') }}" style="height: 580px !important; width: 100% !important"></div>
                        <div><img src="{{ asset('img/photo-1531853121101-cb94c8ed218d.jpg') }}" style="height: 580px !important; width: 100% !important"></div>
                        <div><img src="{{ asset('img/photo-1560944527-a4a429848866.jpg') }}" style="height: 580px !important; width: 100% !important"></div>
                    </a-carousel>
                </div>
            </di>
        </div>
    </div>
    <div class="row" style="margin-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                        <script>(function () {
                            var setting = {"height":450,"width":800,"zoom":17,"queryString":"Zócalo, Centro, Ciudad de México, CDMX, México","place_id":"EjFaw7NjYWxvLCBDZW50cm8sIENpdWRhZCBkZSBNw6l4aWNvLCBDRE1YLCBNw6l4aWNvIi4qLAoUChIJh9f3Rs3-0YURMWwnedIYyrESFAoSCfG4fcss-dGFEZS9nBY156_f","satellite":false,"centerCoord":[19.4319863056023,-99.13352959999999],"cid":"0xb1ca18d279276c31","lang":"es","cityUrl":"/mexico/mexico-city","cityAnchorText":"Mapa de México DF, Estado de México, México","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"203509"};
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://embedgooglemap.1map.com/js/script-for-user.js?embed_id=203509';
                            s.async = true;
                            s.onload = function (e) {
                                window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();
                        </script>
                    </div>
                
                </div>
                <div class="col-lg-4 col-12">
                    <p style="color:#D4AF37; font-size:1.8em">HORARIOS</p>
                    <p style="font-size:1.2em">
                        Lunes a viernes de 10:00 a 19:30<br><br>
                        Pueden concentrarse tratamientos fuera del horario de apertura indicado con cita previa
                    </p>
                    <p style="color:#D4AF37; font-size:1.8em">DIRECCIÓN</p>
                    <p style="font-size:1.2em">
                        Av. Insurgetes Sur 105, Roma Sur, Cuauhtémoc 06600 Ciudad de México, CDMX, México
                    </p>
                    <p>
                        <button type="button" class="btn btn-outline-dark">Ver en Mapa</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:20px"  >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('img/photo-1560944527-a4a429848866.jpg') }}" style="height:400px !important; width:100% !important">
                </div>
                <div class="col-12 text-center">
                    <p style="color:#D4AF37;font-size:1.8em">NO DEJES PASAR ESTA OPORTUNIDAD</p>
                    <p style="font-size:1.2em">
                        Sabías que un masaje debido a su acción calmante y analgésica vienen dada mediante actos reflejos que afectan al sistema nervioso central o esto causa la liberaciónde endorfinas que anulan las sensaciones de dolor en el cerebro. El estímulo de los mecanos receptores mediante el masaje se ha demostrado que alivia el dolor y la tensión muscular.
                    </p>
                    <p>
                        <a href="#startage" id="endpage">
                            <button type="button" class="btn btn-warning">Reservar Ahora</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<style>
    .portada{
        background-image: url(img/bg-principal.jpg);
        background-repeat: no-repeat;
        background-position: center center;
	    background-size: cover;
    
    }
    .who{
        background-image: url(img/photo-1520473378652-85d9c4aee6cf.jpg);
        background-repeat: no-repeat;
        background-position: center center;
	    background-size: cover;
        text-align: center;
    }
    .who:before {
        content:'';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.6);
    }
</style>
<style scoped>
/* For demo */
.ant-carousel >>> .slick-slide {
  text-align: center;
  height: 80px !important;
  line-height: 160px;
  background: #364d79;
  overflow: hidden;
}

.ant-carousel >>> .slick-slide h3 {
  color: #fff;
}
</style>
