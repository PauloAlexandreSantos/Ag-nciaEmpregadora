 <!DOCTYPE html>
 <html lang="pt-pt">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>AEA</title>
     <!-- MDB icon -->
     <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <!-- Google Fonts Roboto -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <!-- Material Design Bootstrap -->
     <link rel="stylesheet" href="../assets/css/mdb.min.css">
     <!-- Your custom styles (optional) -->
     <link rel="stylesheet" href="../assets/css/style.css">
 </head>

 <body>
     <div class="col-md-12">
         <div class="row justify-content-center">
             <div class="col-md-6 mt-5 pt-5">
                 <!-- Default form register -->
                 <form class="text-center border border-light p-5" action="#!">
                     <img src="../assets/img/logo.png" class="rounded-circle z-depth-0 mb-3" alt="avatar image" height="70">
                     <p class="h4 mb-4">Cadastrar Empresa</p>
                     <div class="form-row mb-5">
                         <!-- Carregar Logo -->
                         <div class="col-12 text-left mb-2">
                             <p class="text-left"><b>Carregar Logotipo</b></p>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                     <label class="custom-file-label" for="inputGroupFile01">Carregar Logotipo</label>
                                 </div>
                             </div>
                         </div>
                         <p class="text-left"><b>Dados Empresariais</b></p>


                         <div class="col-12 mb-1">
                             <!-- nome -->
                             <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nome da Empresa">
                         </div>

                         <div class="col-12 mb-1">
                             <!-- NIF -->
                             <input type="text" id="defaultRegisterFormNIF" class="form-control" placeholder="NIF">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Tipo -->
                             <input type="text" id="defaultRegisterFormLastTipo" class="form-control" placeholder="Tipo">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Sector -->
                             <input type="text" id="defaultRegisterFormSector" class="form-control" placeholder="Sector">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Localização -->
                             <input type="text" id="defaultRegisterFormLocation" class="form-control" placeholder="Localização">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Especializações -->
                             <input type="text" id="defaultRegisterFormEspecialization" class="form-control" placeholder="Especializações da Empresa">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Tamanho de funcionários -->
                             <input type="text" id="defaultRegisterFormLastTamanho" class="form-control" placeholder="Tamanho de funcionários">
                         </div>
                         <div class="col-12 mb-1">
                             <textarea class="form-control" placeholder="Sobre a Empresa" id="defaultRegisterFormSobre"></textarea>
                         </div>
                         <p class="text-left"><b>Contactos da Empresa</b></p>

                         <div class="col-12 mb-1">
                             <!-- contactos -->
                             <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="Email">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- contactos -->
                             <input type="number" id="defaultRegisterFormCel" class="form-control" placeholder="Telefone" min="900000000" max="1000000000" maxlength="9">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Website -->
                             <input type="text" id="defaultRegisterFormSite" class="form-control" placeholder="Website">
                         </div>
                         <p class="text-left"><b>Dados de Acesso</b></p>
                         <div class="col-12 mb-1">
                             <!-- Nome do Utilizador -->
                             <input type="text" id="defaultRegisterFormCurso" class="form-control" placeholder="Nome do Utilizador">
                         </div>
                         <div class="col-12 text-left">
                             <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Palavra passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                             <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                 Pelo menos 8 caracteres
                             </small>
                         </div>
                         <div class="col-12 text-left mb-3">
                             <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Reentroduza a palavra passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                         </div>



                         <!-- Sign up button -->
                         <button class="btn btn-dark my-4 btn-block" type="submit">Cadastrar</button>
                     </div>
                     <hr>

                     <!-- Terms of service -->
                     <p>
                         Ao clicar em cadastrar, você concorda com nossos
                         <a href="termos.php" target="_blank">Termos de uso</a>
                     </p>
                     <a href="home_empresa.php" class="btn btn-dark">voltar ao Início</a>
                 </form> <!-- Default form register -->

             </div>
         </div>
     </div>

     <!-- jQuery -->
     <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
     <!-- Bootstrap tooltips -->
     <script type="text/javascript" src="../assets/js/popper.min.js"></script>
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
     <!-- MDB core JavaScript -->
     <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
     
 </body>

 </html>