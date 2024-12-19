<template>
  <div class="dashboard">

    <Sidebar />
    <div class="content-wrapper">
      <Header />
      <MainContent />
    </div>
  </div>
</template>

<script>

import Sidebar from './Sidebar.vue';
import Header from './Header.vue';
import MainContent from './MainContent.vue';

  export default {
    components: { Sidebar,Header, MainContent },
  };
</script>

<style scoped>
.dashboard {
  display: flex;
}

.content-wrapper {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}
</style>
