<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BatiPlus</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="exo2.css">
  <link rel="stylesheet" type="text/css" href="accueil.js">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</head>


<body >
       
            
            
           
            
        <section class="section1">
                <div class="container-fluid">
                    <div class="img">  
                  <div class="container" style="background-color: MediumSeaGreen;width:650px;">
                    <h1 style="text-align:center ">-----INSCRIPTION-----</h1>
                    <div class="col-lg-10" >
                      <form action="traitement/ins.php" method="post" role="form" name="form" class="form-group" style="background:rgb(255, 255, 255,0.9);width:600px;">
                          <div class="form-group col-md-12 col-lg-10" style="margin-top:15px;" >
                            <label  class="col-form-label">Nom  :</label>
                            <input type="text" class="form-control"  placeholder=" votre nom " name="nom">
                          <span id="nom"></span>
                          </div>
                          <div class="form-group col-md-12 col-lg-10" style="margin-top:15px;" >
                            <label  class="col-form-label"> Prénoms :</label>
                            <input type="text" class="form-control"  placeholder=" votre prénom " name="prenom">
                          <span id="nom"></span>
                          </div>
    
                          <div class="form-group col-md-12 col-lg-10" style="margin-top:5px;">
                            <label for="ville_commande" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder=" votre Email">
                          </div>
    
                          <div class="form-group col-md-12 col-lg-10" style="margin-top:5px;">
                            <label for="contact_commade" class="col-form-label">Contact :</label>
                            <input type="tel" class="form-control" id="contact_commade" name="tel" placeholder=" votre contact">
                          </div>
    
                           <div class="form-group col-md-12 col-lg-10" style="margin-top:5px;">
                            <label for="contact_commade" class="col-form-label">mot de passe</label>
                            <input type="password" class="form-control"  placeholder=" votre mot de passe" required="" name="mdp">
                          </div>
    
                           <div class="form-group col-md-12 col-lg-10" style="margin-top:5px;">
                            <label for="contact_commade" class="col-form-label">confirmer mot de passe</label>
                            <input type="password" class="form-control"  placeholder="veuillez confirmer votre mot de passe" required ="" name="cmdp">
                          </div>
                          
                          <div class="form-group col-md-12 col-lg-10" style="margin-top:5px;">
                                <input type="checkbox" id="quantite" name="quantite" > j'accepte <br><br>
                             <button type="submit" class="btn btn-success" style="margin-left:50%;" value="add" id="boutton">
                                <a href=""  onclick="alert('inscription réussie, vous pouvez vous connecter à présent !!!')" style="color:#fff;margin-bottom:8px;">Envoyer</a>
                                </button>
                                
                              </div>
                              
                          <div class="modal-footer" >
                                
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
         </section>
            

 </body>
   

</html>