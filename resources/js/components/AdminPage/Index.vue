<template>
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"> Lista de Testemunhas</h6>    
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th> id</th>
                            <th> Nome do beneficiario</th>
                            <th>Descrição</th>
                            <th>Morada</th>
                            <th>Data da doação</th>
                            <th>Accoes</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th> id</th>
                            <th> Nome do beneficiario</th>
                            <th>Descrição</th>
                            <th>Morada</th>
                            <th>Data da doação</th>
                            <th>Accoes</th>
                        </tr>
                    </tfoot>


                </table>

            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-success btn-sn float-right" data-toggle="modal" data-target="#modalbeneficiario">Adicionar</button>
        </div>
       <modal-component id="modalbeneficiario" titulo="Registar Novo Testemunho">
            <template v-slot:content>
                <div class="form-roup">
                    <label for="name"> Nome do beneficiario</label>
                    <input type="text" class="form-control" placeholder="Nome do beneficiario" v-model="newItem.nome_beneficiario">
                    <h1>{{ newItem.nome_beneficiario}}</h1>
                </div>
                <div class="form-group">
                    <label for="name">Descrição</label>
                    <input type="text" class="form-control" placeholder="descrição" v-model="newItem.descricao">
                
                </div>
                 <div class="form-group">
                    <label for="name">Morada</label>
                    <input type="text" class="form-control" placeholder="Morada" v-model="newItem.morada">
                
                </div>
                <div class="form-group">
                    <label for="name">Data da doação</label>
                    <input type="date" class="form-control" placeholder="Data da doação " v-model="newItem.data">
                
                </div>
                 <div class="form-group">
                    <label for="name">Fotografia</label>
                    <input type="file" class="form-control" placeholder="Imagem" >
                
                </div>


                
            </template>
            <template v-slot:buttons>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-outline-success">Salvar</button>
            </template>
       
       
       </modal-component>


    </div>

</template>
<script>
export default {
    props:[],
    data(){
        return {
            newItem:{
                nome_beneficiario:'',
                descricao:'',
                morada:'',
                data:'',
                fotografia:''

            }
        }
    }
    
}
</script>