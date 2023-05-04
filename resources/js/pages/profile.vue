<template>
    <div class="mt-8 mb-4 flex justify-center items-center">
        <input type="text" v-model="newName" class="block mr-1 rounded-md border-0 py-1.5 pl-2 pr-5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <button class="ml-1 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-1.5 pl-5 pr-5" @click="changeName()">
            <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16"> 
                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" fill="white"></path> 
            </svg>
        </button>
    </div>
</template>

<script>
    export default {
        data: function() {
      return {
          newName: []
      }
  },
        methods: {
            changeName() {
                axios.post('/api/user/change-name', {
                    name: this.newName
                })
                .then(response => {
                    
                })
                .catch(error => {
                    
                });
            }
        }
    }
</script>