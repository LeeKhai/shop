<template>
  <div class="UserList">
    <h1>List User</h1>
    ...
  </div>
</template>

<script>
import LayoutDefault from '../layouts/LayoutDefault.vue';

export default {
  name: 'UserList',
  created() {
    this.$emit('update:layout', LayoutDefault);
  },
};
</script>
