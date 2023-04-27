<template>
  <div class="todoListContainer">
      <div class="mt-100">
          <!-- <h2 class="text-center text-4xl font-bold tracking-tight">TODO LIST</h2> -->
          <Add-Item-Form
          v-on:reloadlist="getList()" 
          />
      </div>
      <List-View 
          :items="items"
          v-on:reloadlist="getList()" />
      
   </div>
</template>

<script>
import AddItemForm from "./AddItemForm.vue";
import ListView from "./ListView.vue";
export default {
  components: {
      AddItemForm,
      ListView,
  },
  data: function() {
      return {
          items: []
      }
  },
  methods: {
      getList () {
          axios.get('api/items')
          .then( response => {
              
              this.items = response.data
              console.log(response.data)
          })
          .catch( error => {
              console.log( error );
          })
      }
  },
  created(){
      this.getList();
  }
};
</script>

<style scoped>
.todoListContainer {
  width: 350px;
  margin: auto;
}

.header {
  padding: 10px;
}




</style>