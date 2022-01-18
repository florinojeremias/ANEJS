<template>
<div class="container-fluid"  >
    <form action="">
        <div class="form-group col-xs-12 ">
            <h3 class="text-center">Formulário de Cadastro de Membros</h3>
            <ul class="nav nav-tabs  p-3">
                <li class="active">
                    <a href="#personaldatatab" data-toggle="tab" class="p-4">Identificação Geral</a>
                </li>
                <li id="#tab1">
                    <a href="#integracaotab" data-toggle="tab" class="p-4">Integração Social</a>
                </li>
                <li id="#tab2">
                    <a href="#integracaoAnetab" data-toggle="tab" class="p-4">Integração na ANEJS</a>
                
                </li>
                <li id="#tab3">
                    <a href="#compromissotab" data-toggle="tab" class="p-4">Compromisso de Honra</a>
            
                </li>
            </ul> 
        </div>

        <div class="tab-content">
            <div id="personaldatatab" class=" tab-pane active">
                <div class="row">
                    <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                            <input type="hidden" name="">
                        <input-component titulo="Nome Completo" name="nome">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                    <div class=" col-md-6 p-2 col-sm-12 col-lg-6">    
                        <input-component titulo="Nome do Pai">
                            <input type="text" name="" class="form-control">
                        </input-component>
                    </div>
                     <div class=" col-md-6 p-1 col-sm-12 col-lg-6">    
                        <input-component titulo="Nome da Mãe">
                            <input type="text" name="" class="form-control">
                        </input-component>
                    </div>
                    <div class=" col-md-6  col-sm-12 col-lg-6 p-1">    
                        <input-component titulo="Género">
                            <select class="form-control" name="" id="">
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </input-component>
                    </div>
                     <div class=" col-md-6 p-1 col-sm-12 col-lg-6 ">    
                        <input-component titulo="Nacionalidade">
                            <input type="text" name="" class="form-control">
                        </input-component>
                    </div>
                      <div class=" col-md-6 col-sm-12 col-lg-6  p-1">    
                        <input-component titulo="Estado Civil">
                            <select class="form-control" name="" id="">
                                <option value="solteiro">Solteiro</option>
                                <option value="separado">Separado</option>
                                <option value="viuvo">Viúvo</option>
                                <option value="marital">Marital</option>
                            </select>
                        </input-component>
                    </div>
                     <div class="col-md-6 col-sm-12 col-lg-6  p-1">    
                        <input-component titulo="Data de Nascimento">
                            <input type="date" name="" class="form-control">
                        </input-component>
                    </div>
                     <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                        <input-component titulo="Número do B.I">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                     <div class="col-md-6 col-sm-12 col-lg-6 p-1">    
                        <input-component titulo="Número do B.I">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                    <div class="col-md-6 col-sm-12 p-1 col-lg-6 ">    
                        <input-component titulo="Número do B.I/Passaporte">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                        <input-component titulo="Local da emissão">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                     <div class="col-md-6 col-sm-12 col-lg-6  p-1">    
                        <input-component titulo="contacto">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                        <input-component titulo="Morada">
                            <input type="text"  name="" class="form-control">
                        </input-component>
                    </div>
                </div>
                   <div class="align-items-sm-center">
                    <a  id="next" class="btn btn-outline-primary" style="margin-left:-1%">Próximo</a>
                   
        
                 </div>
             

            
            </div>
            <div id="integracaotab" class="tab-pane fade">
                <div class="row">
                     <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="Nivel académico" name="nivel">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                     <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="Escola que Frequentou" name="escola">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                      <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="Profissão" name="profissao">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                    <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="Local de Trabalho" name="local_trabalo">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                     <div class="align-items-sm-center inline-block" style="margin-left:1%">
                      <a  id="antigo" class="btn btn-outline-primary">Voltar</a>
                        <a  id="next2" class="btn btn-outline-primary">Próximo</a>
                        
        
                    </div>
                </div>
            </div>
             <div id="integracaoAnetab" class="tab-pane fade ">
                <div class="row">
                    <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="Razões que levaram a fazer parte  da ANEJS" name="reasons">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                    <div class="col-md-6 p-2 col-sm-12 col-lg-6">
                        <input-component titulo="O que é ANEJS" name="anejs">
                            <input type="text" name="" class="form-control">        
                        </input-component>
                    </div>
                    <div class="align-items-sm-center" style="margin-left:1%">
                         <a  id="antigo2" class="btn btn-outline-primary" >Voltar</a>
                        <a  id="next3" class="btn btn-outline-primary" >Próximo</a>
        
                    </div>
                </div>
             </div>
           <div id="compromissotab" class="tab-pane fade">
                <div class="row">

                </div>
           </div>
        
        
        </div>
        
    </form>
</div>
</template>
<script>
export default {
props:[],
data(){
    return {
        mensagem:'',
        hasError:false,
    }
},
}
</script>

<script>
$(document).ready(function(){
    $("#next").click(function(){
        $(".nav-tabs li:nth-child(2) a").tab('show');
        $(".nav-tabs li:first-child(1) a").hide();
    })
    $("#next2").click(function(){
        $(".nav-tabs li:nth-child(3) a").tab('show');
        $(".nav-tabs li:first-child(2) a").hide();
    })
    $("#next3").click(function(){
        $(".nav-tabs li:nth-child(4) a").tab('show');
        $(".nav-tabs li:first-child(3) a").hide();
    })
      $("#antigo").click(function(){
        $(".nav-tabs li:nth-child(1) a").tab('show');
        $(".nav-tabs li:first-child(2) a ").hide();
    })
        $("#antigo2").click(function(){
        $(".nav-tabs li:nth-child(2) a").tab('show');
        $(".nav-tabs li:first-child(3) a").hide();
    })

})
</script>
<style>

</style>