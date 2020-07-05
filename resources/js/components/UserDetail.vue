<template>
  <div class="UserDetail">
    <h1>Detail User</h1>
    ...
  </div>
</template>

<script>
import LayoutDefault from '../layouts/LayoutDefault.vue';

export default {
  name: 'UserDetail',
  created() {
    this.$emit('update:layout', LayoutDefault);
  },
};
</script>
