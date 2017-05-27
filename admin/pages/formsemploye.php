<!DOCTYPE html>
<html lang="en">

<?php require '../include/menu.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire d'enregistrement des employes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Tableau de Bord</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> enregistrer employe
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Nif</label>
                                <input class="form-control">
                                <p class="help-block">Par example:01-02-99-22-1995-12-00109</p>
                            </div>

                            <div class="form-group">
                                <label>Nom Employe</label>
                                <input class="form-control" placeholder="Enter text">
                            </div>
							<div class="form-group">
                                <label>Adresse</label>
                                <input class="form-control" placeholder="Enter text">
                            </div>
							
                            <div class="form-group">
                                <label>Telephone</label>
                                <input class="form-control">
                                <p class="help-block">Par example:509 236-6396</p>
                            </div>
							
                            
                        </form>

                    </div>
                    <div class="col-lg-6">
         <form role="form">

                            

                            <div class="form-group">
                                <label>Poste occupe</label>
                                <input class="form-control" placeholder="Enter text">
                            </div>
							


                        </form>

                        <h3>Informations Supplementaires</h3>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
							<div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Mot de passe">
                            </div>
							<div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Confirmer Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-default">soumettre</button>
                            <button type="reset" class="btn btn-default">annuler</button>


                        </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require '../include/liencss.php';?>
</body>

</html>
