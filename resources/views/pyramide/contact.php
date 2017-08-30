<?php include 'header.php';?>
<div class="container">

<h1 class="title">Où sommes nous ?</h1>


<!-- form -->
<div class="contact">

       <div class="row">
       	
       	<div class="col-sm-12">
	       	<div class="map">
	       		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.3640627728028!2d15.251169214760994!3d-4.342586696843714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3197e1c63b0f%3A0xbd6fa66c5682a398!2sLedya+Pyramide+Hotel+Kinshasa!5e0!3m2!1sfr!2sfr!4v1502935598763" 
	       		 width="100%" height="300" frameborder="0">
	       		</iframe>	
	       	</div></div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

	       		<h1 class="title" id="contact">Ecrivez nous</h1>
				<form role="form" action="" methode="POST">
                                    <div class="form-group"> <label for="text"> Votre nom</label>     
                                          <input type="text" name="nom_exp" class="form-control" id="name" placeholder="ex. François Perou ">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Votre adresse E-mail</label>
                                          <input type="email" name="email_exp" class="form-control" id="email" placeholder="ex. francoisperou@gmail.com">
                                    </div>
                                    <div class="form-group">
                                    <label for="phone">Votre numero de téléphone</label>
                                          <input type="phone" name="num_phone_exp" class="form-control" id="phone" placeholder="ex. +243 81xxxxxxx">
                                    </div>
                                    <div class="form-group">
                                    <label for="objet">L'objet de votre message</label>
                                          <input type="text" name="objet" class="form-control" id="phone" placeholder="ex. renseignement">
                                    </div>
                                    <div class="form-group">
                                    <label for="message"> Votre message</label>
                                          <textarea type="message" name="message" class="form-control"  placeholder="ex. besoin d'une chambre" rows="4"></textarea>
                                    </div>
                                          
                                    <button type="submit" class="btn btn-default">Envoyer</button>
                              </form>
			</div>
	<?php
            if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['num_phone_exp']) && !empty($_POST['objet']) && !empty($_POST['message']) )
            {
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
                        <br><br><br>





       </div>
</div>
</div>
<!-- form -->

</div>
<!--Envoi d'un email dans la boite email-->

<?php include 'footer.php';?>