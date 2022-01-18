<template>
    <div class="container-fluid">
       <div class="col-xl-3 col-md-6 mb-4 ml-auto">
            <div class="card border-left-success shadow h-100 ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase ">Membros com cargo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        

        <card-component class="mb-4" titulo="Busca de Candidatos a Membros">
            <template v-slot:content>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Nome do  Membro</label>
                        <input type="text" class="form-control form-rounded">
                    </div>
                    <div class="col-md-6">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control form-rounded">
                    </div>
                
                </div>
            
            </template>
            <template v-slot:rodape>
                <button type="submit" class="btn btn-outline-success btn-sn float-right">Pesquisar</button>
            </template>
        
        </card-component>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Membros com Cargo</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr ></tr>
                            <tr>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th>Morada</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr>
                                <td>Pintane</td>
                                <td>Saide</td>
                                <td>saide@gmail.com</td>
                                <td>841201360</td>
                                <td>Matola</td>
                            </tr>
                        
                        </tbody>
                        <tfoot>
                        <tr>
                               <th>Nome</th>
                                <th>Apelido</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th>Morada</th>
                        </tr>
                        </tfoot>
                    </table>
                
                </div>
            </div>
            <div class="card-footer">
                <div>
                </div>
            
            </div>
        
        </div>
    
    </div>
    
</template>
<script>
export default {
    props:[]
}
</script>