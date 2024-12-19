<template>
  <nav class="sidebar">
    <ul>
      <li v-for="link in links" :key="link.name">
        <a :href="link.url">{{ link.name }}</a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      links: [
        { name: 'Home', url: '#' },
        { name: 'Relatórios', url: '#' },
        { name: 'Usuários', url: '#' },
        { name: 'Configurações', url: '#' }
      ]
    };
  }
};
</script>
<style scoped>
  .sidebar {
    background-color: #333;
    color: #fff;
    height: 100vh;
    width: 200px;
    padding: 20px;
  }
  .sidebar ul {
    list-style: none;
    padding: 0;
  }
  .sidebar li {
    margin-bottom: 15px;
  }
  .sidebar a {
    color: #fff;
    text-decoration: none;
  }
</style>
