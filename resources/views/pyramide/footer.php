



<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                  <i class="fa fa-bed" aria-hidden="true" ata-toggle="tooltip" data-placement="top" data-original-title="Ledya Pyramide Hotel">
                      <h4>Ledya Pyramide Hôtel</h4>
                  </i>  
                    <p style="text-align: justify-all;">Ledya Pyramide Hôtel est l'un des hôtels de la capitale qui vous
                    offre des chambres calmes et des équipements modernes repondant aux normes internationale avec 3 Etoiles 
                    Avec sa devise qui est : "vivez le confort dans la discretion", Il s'assure que ses clients passent de très bons moment dans une grande discretion et confort où ils n'auront pas à penser aux stresses du boulot ou autres...  </p>
                </div>              
                 
                 <div class="col-sm-2">
                   <i> <h4>Quick Links</h4></i>
                    <ul class="list-unstyled">
                        <li><a href="index.php#link-a" data-original-title="accueil">Accueil</a></li> 
                        <li><a href="Chambre-tariff.php" data-original-title="chambre">Chambre & Tariff</a></li>        
                        <li><a href="activites.php" data-original-title="activité">Nos activités</a></li>
                        <li><a href="photos.php" data-original-title="gallery">Nos photos</a></li>
                        
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                <i><h4>Contacter nous </h4></i>
                     <div class="social">
                        <ul class="list-unstyled">
                            <li>
                            <a href="https://web.facebook.com/pyramide.hotel.7">
                            <i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"> Facebook</i></a></li>
                            <li>
                            <a href="mailto:pyaramidehotel@gmail.com">
                            <i class="fa fa-google-plus-square"  data-toggle="tooltip" data-placement="top" data-original-title="gmail"> Gmail</i></a></li>
                            <li>
                            <a href="https://www.instagram.com/LedyaPyramideHotel/">
                            <i class="fa fa-instagram" data-toggle="tooltip" data-placement="top" data-original-title="twitter"> Instagram</i></a></li>
                            
                        </ul>
                    </div>
                </div>
               
                    <div class="col-sm-4 subscribe">
                       <i> <h4>Souscrire à nos notifications</h4></i>
                        <form role="form" action="" methode="POST">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Entrer votre adresse E-mail">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Approuver</button>
                                </span>
                            </div>
                        </form>
                    </div>
    <?php
        if(isset($_POST) && !empty($_POST['email']) ) {
            extract($_POST);
                $detinataire='pyramidehotel@gmail.com';
                $expediteur=$email. '<' .$email. '>';
                $mail=mail($destinataire,$objet,$message,$expediteur.' :  pangakev.com : Mail de test');
            if($mail) echo'Nous avons reçu votre adresse!!';
            else echo'echec d\'envoi';
         }

    ?> 
                
            <!--/.row-->
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Powered by <a href="#">D.Pangconception</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>





<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>










</body>
</html>





