


<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        <script src="script.js" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <form id="contact-form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" >
                        <p class="comments"></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email <span class="blue">*</span></label>
                        <input id="email" type="email" required name="email" class="form-control" placeholder="Votre Email">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input id="phone" type="text" name="phone" class="form-control" placeholder="Votre Téléphone">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="sujet">
                        <label for="sujet" class="form-label ">Sujet<span class="blue">*</span></label>
                        <select id="sujet" class="form-select form-control" required name ="sujet">
                            <option  selected >Open this select menu</option>
                            <option  value="1">One</option>
                            <option  value="2">Two</option>
                            <option  value="3">Three</option>
                        </select>
                        <p class="comments"></p>
                    </div>
                    <div>
                        <label for="message" class="form-label">Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div>
                        <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div>
                        <input type="submit" class="button1" value="Envoyer">
                    </div>    
                </div>
               
            </form>
        </div>
    </body>
</html>