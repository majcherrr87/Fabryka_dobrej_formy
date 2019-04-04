
<?php 
$site=(isset($_GET['action'])) ? $_GET['action'] : 'home';
?>



<a href="index.php?action=home">home</a><br>
                <a href="wszystko-o-nas">onas</a><br>


<?php
                switch($site){
                    case'home'   :include'home.html';break;
                    case'onas'   :include'onas.html';break;
                    default;
                }
                ?>



<!-- // mapa VVVVV
// function initMap() {

//     var options = {
//         zoom: 14,
//         center: {
//             lat: 54.435566918121886,
//             lng: 18.551191806727733
//         },
//         disableDefaultUI: false
//     }
//     var map = new google.maps.Map(document.getElementById('map'), options);

//     var marker = new google.maps.Marker({
//         position: {
//             lat: 54.435566918121886,
//             lng: 18.551191806727733
//         },
//         map: map,
//         icon: 'img/marker.png',
//         animation: google.maps.Animation.BOUNCE
//     });

//     var infoWindow = new google.maps.InfoWindow({
//         content: '<b>Fabryka dobrej formy</b>'
//     });

//     marker.addListener('click', function () {
//         infoWindow.open(map, marker);
//     });
// }
// mapa ^^^^^ -->



<section id="team" class="pb-5">
                <div class="container">
                    <div class="row">
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-12 col-md-4">



                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="fot">
                                        <img class=" img-top " src="img/dieta.jpg" alt="card image">
                                    </div>
                                    <h4 class="card-title">Dieta</h4>
                                    <p class="card-text">Oferta dietetyczna dla każdego </p>
                                    <a href="#" class="btn btn-primary btn-sm">Zobacz</a>
                                </div>
                            </div>
                        </div>


                        <!-- ./Team member -->
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="image-flip" onclick="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <div class="fot">
                                                    <img class=" img-top" src="img/trening.jpg" alt="card image">
                                                </div>
                                                <h4 class="card-title">Trening personalny</h4>
                                                <p class="card-text"> Dobry trener osobisty sprawi, że nawet najcięższe
                                                    ćwiczenia fizyczne staną się przyjemnością. </p>
                                                <a href="#" class="btn btn-primary btn-sm">Zobacz</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Trening personalny</h4>
                                                <p class="card-text">Jesteśmy trenerami z długoletnim doświadczeniem,
                                                    które zdobywaliśmy podczas edukacji i kariery zawodowej. Aktualnie
                                                    pracujemy głównie z klientami z Sopotu Gdyni i Gdańska, ale wciąż
                                                    się rozwijamy i dokształcamy</p>
                                                <a href="#" class="btn btn-primary btn-sm">Zobacz</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="image-flip" onclick="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <div class="fot">
                                                    <img class=" img-fluid" src="img/ems.jpg" alt="card image"></div>
                                                <h4 class="card-title">Trening EMS</h4>
                                                <p class="card-text">Trening EMS to innowacyjna, mająca wiele zalet
                                                    metoda ćwiczeń</p>
                                                <a href="#" class="btn btn-primary btn-sm">Zobacz</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Trening EMS</h4>
                                                <p class="card-text">Trening EMS to innowacyjna, mająca wiele zalet
                                                    metoda ćwiczeń, która polega na elektrostymulacji mięśni. Jeśli
                                                    pierwszy raz spotykasz się z terminem EMS w kontekście fitness i
                                                    sportu, chcesz dowiedzieć się co to jest, dla kogo to jest i ile
                                                    kosztuje oraz na czym polega wspomniana innowacyjność, to zapraszam
                                                    Cię do lektury.</p>
                                                <a href="#" class="btn btn-primary btn-sm">Zobacz</a>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>



            </section>


            <!-- css card -->
            #team {
    background: #eee !important;

}



.btn-primary {
    color: #fff;
    background-color: #5fa84a;
    border-color: #5fa84a;
}

.btn-primary:hover {

    background-color: #5fa84a;
    border-color: #5fa84a;
}

section #team {
    padding: 60px 0;
}



#team .card {
    border: none;
    background-color: rgba(0, 0, 0, 0.7);

}







.frontside {
    position: relative;

    margin-bottom: 30px;
    margin-top: 50px;
    min-height: 312px;
}





.card-text {
    color: white;
}



.card .card-title {
    color: #5fa84a !important;
}


.card-body .fot {
    height: 100%;
    width: 100%;
    overflow: hidden;
    border-radius: 5%;
}

.card-body img {
    height: 100%;
    width: 100%;
    transition: all .2s ease-in-out;

}

.card-body:hover img {
    transform: scale(1.2) translateY(10px);

}