<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="inscription.css">
  <link rel="stylesheet" type="text/css" href="accueil.js">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</head>
    
    <body >

           
                    
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tableau de bord</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="accueil.html">Tableau de bord</a></li>
                            <li class="active">Newsletter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header col-md-10" >
                                <strong class="card-title">NEWSLETTERS</strong>
                                <?php
                                 $db = Database::connect();

                               $statMail = $db->prepare("SELECT email FROM newsletter");
                               $statMail->execute(array());

                             
                               $email = '';
                       while ($itemMail = $statMail->fetch()) 
                       {
                         
                            $itemMail['email'] ;
                            echo '  ';
                            $email .= $itemMail['email']. ';';

                            
                        }
                        
                        
                        Database::disconnect();
                      ?>
                               <a href="mailto:<?php echo $email ?>" class="btn btn-success btn-md"><span class="fa fa-envelope"></span> E-MAIL A TOUS LES CLIENTS</a>
                <canvas id="" width="100%" height="10"></canvas>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Adresse E-mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                    while($newletter = $items -> fetch()){ ?>
                                        <tr>
                                            <td><?php echo $newletter['id_newsletter']; ?></td>
                                            <td><?php echo $newletter['email']; ?></td>
                                            <td width=250>
                             <a class="btn btn-primary" href="mailto:<?php echo $newletter['email'] ?>"><span class="fa fa-location-arrow"></span>

                            send </a>
                         <a class="btn btn-danger" href="traitement/supNewletter.php?id=<?php echo $newletter['id_newsletter'] ?>"><span class="fa fa-archive"></span>

                         supprimer</a>
                         </td>
                         </tr>
                     <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 250px;"></div>
                    </div>
                </div>

                <!-- /# card -->
            </div>
            <iframe name="InlineFrame1" id="InlineFrame1" style="width:250px;height:200px;margin-left:100px " src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe>

            
        </div><!-- .content -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <ul class="list-inline quicklinks">
              <li class="list-inline-item" style="color: red">
                Designed by
              </li>
              <li class="list-inline-item">
                <a href="#" style="color: blue">semy bi hector</a>
              </li>
            </ul>
    </div>
    <span class="copyright" style="color: red">Copyright &copy; BCU 2018</span>
  </footer>      
                   

                    
 </body>
</html>