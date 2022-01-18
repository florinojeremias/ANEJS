<template>
    <div class="container-fluid">
    <card-component class="mb-4" titulo="Lista de Pedidos de Ajuda">
        <template v-slot:contet>
               <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <slot name="table_head"></slot>
                        <tbody>
                         <tr>
                                <slot name="table-body"></slot>
                            </tr>
                        
                        </tbody>
                        <tfoot>
                        <tr>
                               <slot name="table_foot"></slot>
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
export default {
    
}
</script>