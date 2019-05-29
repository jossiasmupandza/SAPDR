<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Profissional da Saúde | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
    
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href="../css/Registar Profissional.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard_theme_circles.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
        <script src="../js/Registar Profissional.js"></script>
    </head>
    <body>
        <!--Cabecalho-->
        <?php
            cabecalhoAdmin();
        ?>
        
        <!--corpo da pagina-->
        <div id="corpo">

           <!--Menu Lateral Esquerdo-->
            <?php
                menuVertical();
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">

                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Profissional da Saúde</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a>  >> Usuários >> <span class="text-sucess"> Profissional da Saúde</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-profissionais.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fas  fa-user-plus mr-2"></i>Adicionar Profissional</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11  cor-borda2 bg-white" id="cadastro">
                        <form  action="#" id="myForm" role="form"  method="post" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="mt-2">
                                    <li><a href="#step-1">Passo 1<br /><small>Dados Pessoais</small></a></li>
                                    <li><a href="#step-2">Passo 2<br /><small>Contacto e Endereco</small></a></li>
                                    <li><a href="#step-3">Passo 3<br /><small>Informacao Profissional</small></a></li>
                                    <li><a href="#step-4">Passo 4<br /><small>Dados de Acesso</small></a></li>
                                </ul>
                    
                                <div>
                                    <div id="step-1">
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <legend>Dados Pessoais</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="nome" >Nome:</label>
                                                    <input type="text" name="nome" id="nome"  class="form-control"  placeholder="Nome" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Apelido" >Apelido:</label>
                                                    <input type="text" class="form-control" placeholder="Apelido" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Nome" >Data de Nascimento:</label>
                                                    <input type="text"   class="form-control" placeholder="Nome" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Genero" >Genero:</label>
                                                    <select class="form-control" id="Genero " required>
                                                        <option disabled selected>...</option>
                                                        <option >Maculino</option>
                                                        <option >Femenino</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> 
                                        </div>
                    
                                    </div>
                                    <div id="step-2">
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <legend>Endereco e Contacto</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Provincia" >Provincia:</label>
                                                    <select class="form-control" id="Provincia" required>
                                                        <option disabled selected>...</option>
                                                        <option >Maputo</option>
                                                        <option >Gaza</option>
                                                        <option >Inhambane</option>
                                                        <option >Sofala</option>
                                                        <option >Manica</option>
                                                        <option >Zambezia</option>
                                                        <option >Tete</option>
                                                        <option >Nampula</option>
                                                        <option >Niassa</option>
                                                        <option >Cabo Delgado</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Distrito" >Distrito:</label>
                                                    <select class="form-control" id="Distrito" required>
                                                        <option disabled selected>...</option>
                                                        <option >...</option>
                                                        <option >...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Bairro" >Bairro:</label>
                                                    <select class="form-control" id="Bairro" required>
                                                        <option disabled selected>...</option>
                                                        <option >Bairro</option>
                                                        <option >Bairro</option>
                                                    </select>
                                                </div>
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Rua" >Rua:</label>
                                                    <input type="text" class="form-control" placeholder="Rua">
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Email" >Email:</label>
                                                    <input type="email" class="form-control"  placeholder="Email" required>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Tellefone" >Tellefone:</label>
                                                    <input type="number" class="form-control" placeholder="Tellefone" required>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <div id="form-step-2" role="form" data-toggle="validator">
                                            <legend>Informaco Profissional</legend>
                                            <div class="form-row">
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Unidade Hospitalar" >Unidade Hospitalar:</label>
                                                    <select class="form-control" id="Unidade Hospitalar" required>
                                                        <option disabled selected>...</option>
                                                        <option >...</option>
                                                        <option >...</option>
                                                    </select>
                                                </div>
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Nr de Cartao da Ordem dos Medicos" >Nr de Cartao da Ordem dos Medicos:</label>
                                                    <input type="text"   class="form-control"  placeholder="Nr de Cartao da Ordem dos Medicos" required>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="">
                                        
                                        <div id="form-step-3" role="form" data-toggle="validator">
                                            <legend>Dados de Acesso</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Nome do Usuario" >Nome de Usuario:</label>
                                                    <input type="text"   class="form-control"  placeholder="Nome do Usuario" required>
                                                </div>
                                            </div>
                            
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Senha" >Senha:</label>
                                                    <input type="password"   class="form-control"  placeholder="Senha" required>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Confirme a Senha" >Confirme a Senha:</label>
                                                    <input type="password" class="form-control" placeholder="Confirme a Senha" required>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                    
                        </form>
                    </div>
                </div>

                <!--Rodape-->
                <?php
                    rodapeAdmin();
                ?>
            </div>

        </div>


    <!-- plugins do smartwizard -->
    <script src="../lib/smartwizard/js/jquery.min.js"></script>
    <script src="../lib/smartwizard/js/validator.min.js"></script>
    <script src="../lib/smartwizard/js/jquery.smartWizard.js"></script>

    <!--script do smartwizard-->
    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finalisar')
                                             .addClass('btn btn-info')
                                             .on('click', function(){
                                                    if( !$(this).hasClass('disabled')){
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops existem campos que nao foram preenchidos');
                                                                return false;
                                                            }else{
                                                                alert('Bom! Cadastro Feito com Sucesso');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Cancelar')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                    $('#myForm').find("input, textarea").val("");
                                                });



            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'circles',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){
                    $('.btn-finish').removeClass('disabled');
                }else{

                    $('.btn-finish').addClass('disabled');
                }
            });

        });
    </script>   
</body>
</html>
















