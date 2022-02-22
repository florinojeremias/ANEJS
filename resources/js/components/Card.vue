<template>
    <div class="container-fluid">
            <div class="card  shadow mb-4">
                <div class="card-header  text-success">
                {{titulo}}
                </div>
                <div class="card-body">
                    <slot name="content"></slot>
                
                </div>
                <div class="card-footer">
                    <slot name="rodape"></slot>
                </div>
            
            </div>
        
    </div>
</template>
<script>
export default {
    props:['titulo']
    
}
</script>