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
             <div class="col-md-4 mt-5 pt-5">
                 <!-- Default form register -->
                 <form class="text-center border border-light p-5" action="#!">
                     <img src="../assets/img/logo.png" class="rounded-circle z-depth-0 mb-3" alt="avatar image" height="70">
                     <p class="h4 mb-4">Cadastrar candidato</p>
                     <p class="text-left"><b>Dados Pessoais</b></p>
                     <div class="form-row mb-5">

                         <div class="col-12 mb-1">
                             <!-- nome -->
                             <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nome completo">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Data de Nascimento -->
                             <label>Data de Nascimento</label>
                             <input type="date" id="defaultRegisterFormLastMorada" class="form-control" placeholder="Data de nascimento">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Genero -->
                             <label>Genero</label>
                             <select name="genero" class="form-control" id="defaultRegisterFormLastGenero">
                                 <option selected disabled value="">Selecione o genero</option>
                                 <option value="Feminimo">Feminino</option>
                                 <option value="Masculino">Masculino</option>
                             </select>
                         </div>
                         <div class="col-12 mb-1">
                             <!-- NIF -->
                             <input type="text" id="defaultRegisterFormNIF" class="form-control" placeholder="NIF">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Morada -->
                             <input type="text" id="defaultRegisterFormLastMorada" class="form-control" placeholder="Morada">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Profissão -->
                             <input type="text" id="defaultRegisterFormProfession" class="form-control" placeholder="Profissão">
                         </div>
                         <div class="col-12 mb-1">
                             <textarea class="form-control" placeholder="Biográfia" id="defaultRegisterFormLastbiografia"></textarea>
                         </div>


                         <div class="col-12 mb-1">
                             <!--  -->
                             <label>Situação Profissional</label>
                             <select name="estado" class="form-control" id="defaultRegisterFormLastestado">
                                 <option selected disabled value="">Selecione o estado</option>
                                 <option value="1">Empregado</option>
                                 <option value="0">Desempregado</option>
                             </select>
                         </div>
                         <p class="text-left mt-2"><b>Experiências</b></p>

                         <div class="col-12 mb-1">
                             <!-- Titulo -->
                             <input type="text" id="defaultRegisterFormLastTitulo" class="form-control" placeholder="Titulo da Experiência">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Empresa -->
                             <input type="text" id="defaultRegisterFormLastEmpresa" class="form-control" placeholder="Empresa">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Ano de Início -->
                             <label>Ano de Início</label>
                             <input type="date" id="defaultRegisterFormLastInicio" class="form-control" placeholder="Ano de Início">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Ano de Término -->
                             <label>Ano de Término</label>
                             <input type="date" id="defaultRegisterFormLastTermino" class="form-control" placeholder="Ano de Término">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Localização da Empresa -->
                             <input type="text" id="defaultRegisterFormLastLocaempresa" class="form-control" placeholder="Localização da Empresa">
                         </div>
                         <div class="col-12 mb-1">
                             <textarea class="form-control" placeholder="Sobre a experiência" id="defaultRegisterFormLastsobreExperiencia"></textarea>
                         </div>
                         <p class="text-left mt-2"><b>Formação Acadêmica</b></p>
                         <div class="col-12 mb-1">
                             <!-- Nome da Instituição -->
                             <input type="text" id="defaultRegisterFormLastLocaInstituição" class="form-control" placeholder="Instiuição de Ensino">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- grau -->
                             <select name="grau" class="form-control" id="defaultRegisterFormLastgrau">
                                 <option selected disabled value="">Grau acadêmico</option>
                                 <option value="Ensino Secundário">Ensino Secundário</option>
                                 <option value="Bacharelato">Bacharelato</option>
                                 <option value="Licenciatura">Licenciatura</option>
                                 <option value="Mestre">Mestre</option>
                                 <option value="Doutor">Doutor</option>
                             </select>
                         </div>
                         <div class="col-12 mb-1">
                             <!-- Curso  -->
                             <input type="text" id="defaultRegisterFormCurso" class="form-control" placeholder="Curso">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Ano de Início -->
                             <label>Ano de Início</label>
                             <input type="date" id="defaultRegisterFormLastInicio" class="form-control" placeholder="Ano de Início">
                         </div>
                         <div class="col-6 mb-1">
                             <!-- Ano de Término -->
                             <label>Ano de Término</label>
                             <input type="date" id="defaultRegisterFormLastTermino" class="form-control" placeholder="Ano de Término">
                         </div>
                         <p class="text-left"><b>Contactos Pessoais</b></p>
                         <div class="col-12 mb-1">
                             <!-- contactos -->
                             <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="Email">
                         </div>
                         <div class="col-12 mb-1">
                             <!-- contactos -->
                             <input type="number" id="defaultRegisterFormCel" class="form-control" placeholder="Telefone" min="900000000" max="1000000000" maxlength="9">
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
                         <!-- Carregar CV -->
                         <div class="col-12 text-left">
                             <label>Carregar Ficheiros</label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                     <label class="custom-file-label" for="inputGroupFile01">Carregar Ficheiros</label>
                                 </div>
                             </div>
                         </div>


                         <!-- Sign up button -->
                         <button class="btn blue-gradient my-4 btn-block" type="submit">Cadastrar</button>
                     </div>
                     <hr>

                     <!-- Terms of service -->
                     <p>
                         Ao clicar em cadastrar, você concorda com nossos
                         <a href="termos.php" target="_blank">Termos de uso</a>
                     </p>
                     <a href="home.php" class="btn blue-gradient">voltar ao Início</a>
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
     <!-- Your custom scripts (optional) -->
     <script type="text/javascript"></script>

 </body>

 </html>