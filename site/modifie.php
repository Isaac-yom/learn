<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="site.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <?php
        
        require_once('loge.php');

    
        if(!isset($_SESSION['id'])){
            header('Location: /');
            exit;
        }

        $req=$DB->prepare("SELECT *FROM utilisateur WHERE id=?");

        $req->execute([$_SESSION['id']]);

        $req_user=$req->fetch();

        if(!empty('$_POST')){
            extract($_POST);

            $valid=true;

            if(isset($_POST['Modifier'])){

            }
        }

        if(!isset($chambre)){
            $chambre=$req_user['chambre'];
        }

        if(!isset($type_chambre)){
            $type_chambre=$req_user['type_chambre'];
        }

        if(!isset($zone1)){
            $zone1=$req_user['zone1'];
        }

        if(!isset($prix)){
            $prix=$req_user['prix'];
        }

        if(!isset($numero)){
            $numero=$req_user['numero'];
        }

        ?>

        <div class="form-box px-5 py-4 mt-5 col-md-9 ms-4">
            <form method="POST">
                <h2 class="text-center mb-4 wrapper">Modifiez vos informations si vous voulez</h2>

                <select id="chambre" class="form-select mb-3" type="chambre" name="chambre" value="<?=$chambre ?>">                                                                        
                    <option value="chambre">Modifiez la chambre</option>
                    <option value="sanitaire"> Sanitaire</option>
                    <option value="semi-sanitaire"> Semi-sanitaire</option>
                    <option value="ordinaire"> Ordinaire</option>
                    <option value="meublée"> Meublée</option>
                </select>

                

                <select id="type_chambre" class="form-select mb-3" type="type_chambre" name="type_chambre" value="<?=$type_chambre ?>">
                    <option value="type_chambre"> Modifiez le type de chambre</option>
                    <option value="entrée couchée"> Entrée couchée</option>
                    <option value="1chambre 1 salon"> 1 Chambre 1 Salon</option>
                    <option value="2 chambres 1 salon"> 2 Chambres 1 Salon</option>
                    <option value="3 chambres 1 salon"> 3 Chambres 1 Salon</option>
                    <option value="4 chambres 1 salon"> 4 Chambres 1 Salon</option>
                    <option value="5 chambre 1 salon"> 5 Chambres 1 Salon</option>
                    <option value="6 chambres 1 salon"> 6 Chambres 1 Salon</option>
                    <option value="plus de 6 chambres"> plus de 6 Chambre?</option>
                </select>

                <input  class="form-control mb-3" type="zone1" name="zone1" placeholder="Modifier la zone" value="<?=$zone1 ?>">
                <input  class="form-control mb-3" type="prix"  name="prix" placeholder="Votre nouveau budjet?" value="<?=$prix ?>">
                <input  class="form-control mb-3" type="numero" name="numero" placeholder="Votre numero whatsapp" value="<?=$numero ?>">
                <button tpye="submit" name="Modifier" value="Modifier" class="register-btn form-control  mb-3 ">Modifiez</button>
            </form>
        </div>        




    </div>
</body>
</html>