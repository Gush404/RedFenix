<template>
  <div class="mt-8 flex justify-center items-center space-x-2">
      <input v-model="item.name" type="text" class="block rounded-md border-0 py-1.5 pl-2 pr-5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="name"  />
      
      <button class="bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-1.5 pl-5 pr-5" @click="addItem()"><svg class="w-8 h-8" fill="white" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
</button>

</div>
</template>

<script>
export default {
  data: function () {
      return {
          item: {
              name: ""
          }
      }
  }, 
  methods: {
      addItem() {
          //validação
          if (this.item.name == '') {
              return;
          }

          axios
              .post("api/item/save", {
                  item: this.item,
              })
              .then(response => {
                  console.log(response);
                  this.item.name = "";
                  this.$emit('reloadlist');
              })
              .catch(error => {
                  console.log( error );
              });
      },
  },
};
</script>

<style scoped>

.addItem {
  display: flex;
  justify-content: center;
  align-items: center;
}

#input {
  background: #f7f7f7;
  border: 0px;
  outline: none;
  padding: 5px;
  margin-right: 10px;
  width: 100%;
}




</style> 