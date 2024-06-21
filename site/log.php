<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="site.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>

  <body>
    <section class="main">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12">
            <div class="text-center text">
              <img src="image/IMG-20240605-WA0019-removebg-preview.png" height="300px" class="mt-4 ms-5">
              <div class="d-flex wrapper">
                <h4 class="ms-4">RCCM:RB/ABC/24 A 107060</h4>
                <h4 class="ms-5">0202483611655</h4>
              </div>
              <h3 class="text-dark mt-4">Welcome! Une équipe de jeunes professionnels, dynamiques, honnêtes  et fiables est à votre service en Immobilier et en Commerce Géneral.</h3>
              <h4 class="txt mt-5 ms-3">Formulaire de demande de chambre à louer</h4>

            </div>  
          </div>

          <div class="col-lg-5 col-md-10 col-sm-12">

            <div class="form-box px-5 py-4 mt-5 p-5">

              <form action="loge.php"  method="POST">
                <h2 class="text-center mb-4">Remplissez les champs</h2>

                <select id="chambre" class="form-select mb-3" name="chambre">
                  <option value="chambre"> Choisissez la chambre</option>
                  <option value="sanitaire"> Sanitaire</option>
                  <option value="semi-sanitaire"> Semi-sanitaire</option>
                  <option value="ordinaire"> Ordinaire</option>
                  <option value="meublée"> Meublée</option>
                </select>
                
                <select id="type_chambre" class="form-select mb-3" name="type_chambre">
                  <option value="type_chambre"> Choisissez le type de chambre</option>
                  <option value="entrée couchée"> Entrée couchée</option>
                  <option value="1chambre 1 salon"> 1 Chambre 1 Salon</option>
                  <option value="2 chambres 1 salon"> 2 Chambres 1 Salon</option>
                  <option value="3 chambres 1 salon"> 3 Chambres 1 Salon</option>
                  <option value="4 chambres 1 salon"> 4 Chambres 1 Salon</option>
                  <option value="5 chambre 1 salon"> 5 Chambres 1 Salon</option>
                  <option value="6 chambres 1 salon"> 6 Chambres 1 Salon</option>
                  <option value="plus de 6 chambres"> plus de 6 Chambre?</option>
                </select>
              
                <input  class="form-control mb-3" type="text" name="zone1" placeholder="Induiquez la zone" required>
                
                <input  class="form-control mb-3" type="text" name="prix" placeholder="Quel est votre budjet?" required>
                
                <input  class="form-control mb-3" type="text" name="numero" placeholder="Votre numero whatsapp" required>

                <button tpye="submit" name="Envoyer" class="register-btn form-control mb-3">Envoyer</button>
  
              </form>
              <h4 class="mt-5 text-dark text-center">NB:Si vous avez de difficultés à remplir le formulaire, veuillez contacter via whatsapp le +229 61 52 45 82</h4>

            </div>  
          </div>  
          

      
          <div class="text-center">
            <h3 class="mt-5 p-4">Merci d'avoir choisi <span class="text-primary">Yom Service!</span></h3>
          </div>
        </div>    
      </div>
    </section>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
