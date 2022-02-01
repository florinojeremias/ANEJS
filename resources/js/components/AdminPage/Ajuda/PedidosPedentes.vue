<template>
<div class="container-fluid">
    <card-component class="mb-4" titulo="Lista de Pedidos de Ajuda">
        <template v-slot:content>
            <div class="table-responsive">
                <table class="table  table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Número de Telfone</th>
                            <th>Assunto</th>
                            <th>Acções</th>
                        </tr>
                    
                    </thead>
                    <tbody>
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Número de Telfone</th>
                            <th>Assunto</th>
                            <th>Acções</th>
                            
                            </tr>
                        </tfoot>
                
                
                </table>
            
            
            </div>
        
        </template>
        <template v-slot:rodape>
        
        </template>
    
    
    </card-component>



</div>
</template>
<script>
import Card from '../../Table'
export default {
  components: { Card },
  props:[],
    
}
</script>