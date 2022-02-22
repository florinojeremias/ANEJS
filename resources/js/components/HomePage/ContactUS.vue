<template>
<div class="container-fluid p-4">
    <h3 class="text-center p-4">Contacte-nos</h3>
        <!--formulario para pedido de ajuda-->
    <form action="" method="POST">
        <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <img src="/img/anejslogo.png" alt="" class="card-img-top">  
                </div>
                
                <div class="col-md-8 col-sm-8 col-lg-8">
                    <div class="row">
                         <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="text" v-model="newItem.nome" class="form-control" placeholder="Nome" name="nome" autocomplete="off">
                         </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="text" v-model="newItem.apelido" class="form-control" placeholder="Apelido" name="apelido" autocomplete="off">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="email" v-model="newItem.email" class="form-control" placeholder="email" name="email" autocomplete="off">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="tel" v-model="newItem.numero_telemovel" class="form-control" placeholder="Número de Telemovel" name="numero_telemovel" autocomplete="off">
                        </div>
                         <div class="col-md-12 col-sm-12 col-lg-12 p-2">
                            <input type="text" v-model="newItem.assunto" class="form-control" placeholder="Assunto" name="assunto" autocomplete="off">
                        </div>
                         <div class="col-md-12 col-sm-12 col-lg-12 p-2">
                            <textarea name="mensagem" v-model="newItem.mensagem"  id="" cols="20" rows="10" class="form-control" autocomplete="off" >Breve Mensagem</textarea>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2"> 
                        <button type="reset" name="" id="" class="btn btn-outline-danger rounded-pill  btn-md btn-block">Limpar</button>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 p-2">
                             <button  name="" id="" class="btn btn-outline-success rounded-pill  btn-md btn-block">Submeter</button>     
                        </div>
                    </div>
                
                </div>         
         </div>

    </form>
    <history-component></history-component>
</div>
</template>
<script>
export default {
    props:[],
 data(){
     return{
         newItem:{nome:'', apelido:'',email:'',assunto:'',numero_telemovel:'',mensagem:''},
         mesagem:'',
         
     }
 },
 methods:{
     salvarPedido(){
     }
 }
 

}
</script>