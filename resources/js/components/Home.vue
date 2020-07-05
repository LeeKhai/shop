<template>
  <div class="Home">
    <h1>Home</h1>
    ...
  </div>
</template>

<script>
import LayoutDefault from '../layouts/LayoutDefault.vue';

export default {
  name: 'Home',
  created() {
    this.$emit('update:layout', LayoutDefault);
  },
};
</script>
