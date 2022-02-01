<template>
    <div class="container-fluid">
             <card-component class="mb-4" titulo="Busca de Atividades" width="100%">
            <template v-slot:content>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Tema</label>
                        <input type="text" class="form-control form-rounded">
                    </div>
                    <div class="col-md-6">
                        <label for="">Data</label>
                        <input type="text" class="form-control form-rounded">
                    </div>
                
                </div>
            
            </template>
            <template v-slot:rodape>
                <button type="submit" class="btn btn-outline-success btn-sn float-right">Pesquisar</button>
            </template>
        
        </card-component>

        <card-component class="mb-4" titulo="Lista de actividades realizadas">
            <template v-slot:content>
                <div class="table-responsive">
                <table class="table  table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tema</th>
                            <th>Endereço</th>
                            <th>Fotografia</th>
                            <th>Descrição</th>
                            <th>Data</th>
                            <th>Acções</th>
                        </tr>
                    
                    </thead>
                    <tbody>
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tema</th>
                            <th>Endereço</th>
                            <th>Fotografia</th>
                            <th>Descrição</th>
                            <th>Data</th>
                            <th>Acções</th>
                           
                        </tr>
                        </tfoot>
                </table>
            </div>   
            </template>
            <template v-slot:rodape>
                <button type="button" data-toggle="modal" data-target="#modalaActivity" class="btn btn-outline-success btn-sn float-right">Adicionar</button>
            </template>
        </card-component>

        <modal-component id="modalaActivity" titulo="Adicionar Atividade">
            <template v-slot:content>
                <div class="form-group">
                    <label for="">Tema da Actividade</label>
                   <input type="text" class="form-control" name="tema_actividae" placeholder="Insira o Tema da Actividade">
                </div>
                 <div class="form-group">
                    <label for="">Endereço</label>
                   <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço ">
                </div>
                 <div class="form-group">
                    <label for="">Fotografia</label>
                   <input type="file" class="form-control" name="fotografia" placeholder="Insira a fotografia">
                </div>
                 <div class="form-group">
                    <label for="">Descrição</label>
                   <input type="text" class="form-control" name="descricao">
                </div>
                <div class="form-group">
                    <label for="">Data</label>
                   <input type="date" class="form-control" name="data">
                </div>
                
            </template>
            <template v-slot:buttons>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-success">Salvar</button>
            </template>
        </modal-component>
    
    
    
    </div>
</template>
<script>
 import  Card  from "../../Card.vue";
export default {
    components:{Card},
    props:[],
}
</script>