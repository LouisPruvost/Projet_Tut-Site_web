<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link href="../css/normalize.css" rel="stylesheet" type="text/css"/>
  	<link rel="stylesheet" type="text/css" href="../Styles_CSS/contact.css">
    <link href="../Styles_CSS/main_css.css" rel="stylesheet" type="text/css"/>

</head>

<body>
	<div id="titre">
		<h2>CONTACT</h2>
	</div>
    <section class="banner">
    	<div class="img"></div>
	    <div class="contact">
		    <h2>Contactez nous !</h2>
		    <form method="post">
		    	<label>Nom</label>
        		<input type="text" name="nom" required>
 				<label>Email</label>
		        <input type="email" name="email" required><br>
		        <label id="mess3">Message</label>
		        <textarea name="message" required></textarea><br>
		        <input id="bouton" value="Envoyer" type="submit">
		    </form>
	    </div>
    </section>
   <?php
    
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');

        $message = '<h1>Message envoyé depuis la page Contact de lesnuitsblanches.fr</h1>
				        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
				        <b>Email : </b>' . $_POST['email'] . '<br>
				        <b>Message : </b>' . $_POST['message'] . '</p>';
        
        
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        
        else {
            $retour = mail('lesnuitsblanchesfestival@gmail.com', 'Envoi depuis la page Contact', $message);

            
            
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            
            else
                echo '<p>Erreur.</p>';
        }
    }
    
    ?>

    <section class="footer">


                <img id="fin" src="../photo_artist/footer.png" id="logoAgence">
                <div>
                    <a id="fb"href="https://www.facebook.com/Les-Nuits-Blanches-104617577950478/"></a>
                    <a id="tw" href="https://twitter.com/les_blanches"></a>
                    <a id="in" href="https://www.instagram.com/lesnuitsblanches_festival/"></a>
                </div>



            </section>

</body>
</html>