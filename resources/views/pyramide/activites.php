<?php include 'header.php';?>
<div class="container">

       <h1 class="title">Nos Activités & Services <hr>  </h1>
       <div class="row">
                  <div class="col-sm-4">
                  <div class="panel panel-default">
                        <div class="panel-heading">
                              <center>
                                    <h2 class="one"> <strong>Special Barbecue</strong> </h2>
                              </center>
                        </div>
                  </div>

                  	<p>
                        Venez vivre des moments qui vous aideront à vous sentir dans une pleine détente et satisfaction autour d'une piscine qu’offre chaque dimanche chez Ledya Pyramide Hôtel  <br>
                        L'entrée est <strong>Gratuite</strong>
                         <br>

                        
                        </p>
                  </div>
                  <div class="col-lg-2 col-lg-offset-2" ><br><br><br><br>
                  <img src="images/photos/another/pyr58.jpg" class="img-rounded" width="325" height="165">
                   </div>

      </div><br><br><br><br><hr><br>
      <div class="row">
            <div class="col-sm-4">

<div class="panel panel-default">
                        <div class="panel-heading">
                              <center>
                                    <h2 class="one"> <strong>Organisation</h2> Fêtes & Réunions</strong> 
                              </center>
                        </div>
                  </div>


                   
                    	<p>
                        Ledya Pyramide Hôtel avec son étendue autour de la piscine a la capacité de contenir  200 personnes assises avec une décoration  classique qui accompagne la beauté de la soirée. <br>
                        La réservation se fait sur place pour plus amples détails sur ce qui concerne l’organisation.  
                       </p>
            </div> 
            <div class="col-lg-2 col-lg-offset-2"> <br><br><br><br><br>
                  <img src="images/photos/another/pyr64.jpg" class="img-rounded" width="325" height="165">
            </div>
      </div><br><br><br><br><hr><br>

<div class="row">
            <div class="col-sm-4">
            <div class="panel panel-default">
                        <div class="panel-heading">
                              <center>
                                    <h2 class="one"> <strong>Location Véhicule</strong> </h2>
                              </center>
                        </div>
                  </div>
                  
                       <p>Pour tous vos mouvements dans la capitale lors de votre séjour, Ledya Pyramide Hôtel met à votre disposition des véhicules des locations avec des chauffeurs qui connaissent la capitale <br>
                        Pour plus amples détails veillé nous écrire ou contacter  sur les modalités de la location.  
                       </p>
            </div> 
            <div class="col-lg-2 col-lg-offset-2"> <br><br><br><br>
                  <img src="images/photos/another/pyr43.png" class="img-rounded" width="325" height="165">
            </div>
</div>
      <br><hr>


      


       <div class="row" id="taille">
	     <div class="embed-responsive embed-responsive-16by9">
		      
                        <div class="col-sm-4">
                            

                              <h1 class="title" id="contact">Ecrivez nous</h1>
                              <form role="form" action="" methode="POST">
                                    <div class="form-group"> <label for="text"> Votre nom</label>     
                                          <input type="text" name="nom_exp" class="form-control" id="name" placeholder="Votre nom ">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Votre adresse E-mail</label>
                                          <input type="email" name="email_exp" class="form-control" id="email" placeholder="Votre email">
                                    </div>
                                    <div class="form-group">
                                    <label for="phone">Votre numero de téléphone</label>
                                          <input type="phone" name="num_phone_exp" class="form-control" id="phone" placeholder="Votre numero de téléphone">
                                    </div>
                                    <div class="form-group">
                                    <label for="objet">L'objet de votre message</label>
                                          <input type="text" name="objet" class="form-control" id="phone" placeholder="Votre numero de téléphone">
                                    </div>
                                    <div class="form-group">
                                    <label for="message"> Votre message</label>
                                          <textarea type="message" name="message" class="form-control"  placeholder="Ecrire son Message" rows="4"></textarea>
                                    </div>
                                          
                                    <button type="submit" class="btn btn-default">Envoyer</button>
                              </form>
                        <!--send message-->
                              <?php
                                    if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['num_phone_exp']) && !empty($_POST['objet']) && !empty($_POST['message']) ) {
                                          extract($_POST);
                                                $detinataire='pyramidehotel@gmail.com';
                                                $expediteur=$pseudo_exp. '<' .$email_exp. '>';
                                          $mail=mail($destinataire,$objet,$message,$expediteur.' :  pangakev.com : Mail de test');
                                          if($mail) echo'Message envoyé avec  succes!!';
                                          else echo'echec d\'envoi';
                                     }
                  
                              ?>

                         </div>

                        <div class="col-sm-5 col-sm-offset-3" >
                              <h2>Nos coordonnées</h2><br>
                              <ul>
                                    <li>Adresse : <strong style="color:white;"> Avenue Nguma 35 , Macampagne, Kinshasa</strong></li><br>
                                    <li>Téléphone : 
                                    <strong style="color:white;"> +243 820005454 ; 82005464</strong>
                                    </li><br>
                                    <li>Adresse E-mail : <strong style="color:white;">pyramidehotel@gmail.com</strong></li><br>
                                      <li>Facebook : 
                                        <strong style="color:white;">
                                          <a href="https://web.facebook.com/pyramide.hotel.7">Ledya Pyramide HÔTEL</a>
                                        </strong>
                                      </li>
                              </ul>
                        </div>
                  </div>
	      </div>
       </div></div>



<div class="spacer"> </div>




<!--Envoi d'un email dans la boite email-->


<?php include 'footer.php';?>