<template>
<div class="container-fluid">
    <card-component class="text-center " titulo="Formulário de Cadastro de Membros">
        <template v-slot:content>
            <form name="" method="POST" action="">
                <div class="pm-tabs ">
                    <ul role="tablist" class="nav nav-tabs nav-fill" >
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" href="#personaldatatab">Identificação geral</a></li>
                         <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#integracaotab">Integração Social</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="messages" href="#integracaoAnetab">Integração ANEJS</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                        <div id="personaldatatab" class=" tab-pane active">
                            <div class="row text-left">
                                <div class=" form-floating  col-md-6  p-2 col-sm-12 col-lg-6">
                                        <input type="hidden" name="">
                                        <input-component titulo="Nome Completo" name="nome">
                                            <input type="text"  name=""   class="form-control" required autofocus placeholder="Insira o seu Nome" v-model="mensagem">  
                                            <h1>{{ mesagem}}</h1>      
                                        </input-component>
                                </div>
                                <div class=" col-md-6 p-2 col-sm-12 col-lg-6">    
                                    <input-component titulo="Nome do Pai">
                                        <input type="text" name=""  class="form-control" required placeholder="Insira o nome do Seu Pai" >
                                    </input-component>
                                </div>
                                <div class=" col-md-6 p-1 col-sm-12 col-lg-6">    
                                    <input-component titulo="Nome da Mãe">
                                        <input type="text" name=""  class="form-control"  required placeholder="Insira o nome da Sua mãe ">
                                    </input-component>
                                </div>
                                <div class=" col-md-6  col-sm-12 col-lg-6 p-1">    
                                    <input-component titulo="Género">
                                        <select class="form-control" name="" id="" required>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </input-component>
                                </div>
                                <div class=" col-md-6 p-1 col-sm-12 col-lg-6 ">    
                                    <input-component titulo="Nacionalidade">
                                        <input type="text" name="" class="form-control" required placeholder="Insira a sua Nacionalidade">
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
                                    <input-component titulo="Data de Nascimento" >
                                        <input type="date" name="" class="form-control" required>
                                    </input-component>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                                    <input-component titulo="Número do B.I/ Passaporte">
                                        <input type="text"  name="" class="form-control" required placeholder="Insira o número do seu documento de identificação">
                                    </input-component>
                                </div>
                            
                                <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                                    <input-component titulo="Local da emissão">
                                        <input type="text"  name="" class="form-control" placeholder="Onde emitiu o seu documento de identificação ">
                                    </input-component>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6  p-1">    
                                    <input-component titulo="contacto">
                                        <input type="text"  name="" class="form-control" required placeholder="Insira o seu número de Telemóvel">
                                    </input-component>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 p-1 ">    
                                    <input-component titulo="Morada">
                                        <input type="text"  name="" class="form-control" placeholder="Nome do Bairro">
                                    </input-component>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 p-1"> 
                                    <input-component titulo="Fotografia do Documento de Identificação">
                                        <input type="file" name="documento_upload" class="form-control">
                                    </input-component>
                                
                                </div>
                            </div>
                            <div class="text-left inline-block" >
                                 <a  id="next" class="btn btn-outline-success" >Próximo</a>
                            </div>
                        </div>
                        <div id="integracaotab" class="tab-pane fade text-left">
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
                                    <a  id="antigo" class="btn btn-outline-success">Voltar</a>
                                    <a  id="next2" class="btn btn-outline-success">Próximo</a>
                                </div>
                            </div>
                        </div>
                        <div id="integracaoAnetab" class="tab-pane fade text-left">
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
                            
                            </div>
                             <div class="align-items-sm-center inline-block" style="margin-left:1%">
                                    <a  id="antigo2" class="btn btn-outline-success">Voltar</a>
                                     <button class=" btn btn-outline-success" type="submit">Enviar</button>
                                    
                                </div>
                        </div>
                        <div id="compromissotab" class="tab-pane fade">
                            <div class="row">

                            </div>
                        </div>
             </div>           
            </form>
        </template> 
        <template v-slot:rodape>
           
        </template>
    </card-component>
</div>
</template>
<script>
import Input from '../Input.vue'
export default {
props:[],
data(){
 return{
    mensagem:'s',
    hasError:false,
    newItem:{ 
        nome_completo:'',
        nome_mae:'',
        nome_pai:'',
        genero:'',
        nacionalidade:'',
        estado_civil:'',
        data_nascimento:'',
        numero_documento:'',
        local_emissao:'',
        contacto:'',
        morada:'',
        fotografia:'',
        nivel_academico:'',
        escola:'',
        profissao:'',
        local_trabalho:''
        },
        
        
    }
},
method:{

gravarMembro(){

}

}
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