<template>
  <div>
    <table>
      <thead>
        <tr>
          <th class="text-white">ID</th>
          <th class="text-white">Name</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td class="text-white">{{ item.id }}</td>
          <td class="text-white">{{ item.name }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      items: [],
    };
  },
  created() {
    axios.get('/api/items')
      .then(response => {
        this.items = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>