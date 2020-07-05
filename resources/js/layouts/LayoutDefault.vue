<template>
  <div class="LayoutDefault">
    <nav class="LayoutDefault__nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/user-list">List User</router-link>
      <router-link to="/user-detail">Detail User</router-link>
    </nav>
    <main class="LayoutDefault__main">
      <slot/>
    </main>
    <footer class="LayoutDefault__footer">
      &copy; Awesome Company
    </footer>
  </div>
</template>