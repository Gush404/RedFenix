<template>
  <div>
      <div v-for="(item, index) in items" :key="index" >
          <List-Item
              :item="item"
              class="item"
              v-on:itemchanged="$emit('reloadlist')"
          />
      </div>
  </div>
</template>

<script>
import ListItem from './ListItem.vue'
export default {
  props: ['items'],
  components: {
      ListItem
  }
};
</script>

<style scoped>

.item {
  padding: 10px;
  margin-top: 5px;
}
</style>