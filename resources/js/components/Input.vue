<template>
  <div class="form-group">
    <label :for="name" class="form-label">{{titulo}}</label>
        <slot></slot>
      <div :id="help" class="form-text text-muted ">{{helptext}}</div>
  </div>
</template>

<script>
export default {
    props:['titulo','name','help','helptext']
}
</script>

<style>

</style>