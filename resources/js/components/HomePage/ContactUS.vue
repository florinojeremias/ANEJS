<template>
<div class="container-fluid p-4">
    <h3 class="text-center p-4">Contacte-nos</h3>
    <!--formulario para pedido de ajuda-->
    <form action="" method="POST" @prevent.stop="">
        <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4">
                    <img src="/img/anejslogo.png" alt="" class="card-img-top">  
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8">
                    <div class="row">
                         <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="text"  class="form-control" placeholder="Nome">
                         </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="text" class="form-control" placeholder="Apelido">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 p-2">
                            <input type="tel" class="form-control" placeholder="Número de Telemovel">
                        </div>
                         <div class="col-md-12 col-sm-12 col-lg-12 p-2">
                            <input type="text" class="form-control" placeholder="Assunto">
                        </div>
                         <div class="col-md-12 col-sm-12 col-lg-12 p-2">
                            <textarea name="" id="" cols="20" rows="10" class="form-control">Breve Mensagem</textarea>
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
 data(){
     return{

     }
 }
}
</script>