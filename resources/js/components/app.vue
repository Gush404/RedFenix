<template>
    <div class="flex min-h-screen bg-gray-800">
      <!-- Left panel -->
      <div class="w-48 h-screen bg-gray-200 p-4 text-custom-red border border-2">
      <button @click="$router.push('/dashboard')" class="mb-4">
        <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" fill="red"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" fill="red"></path> </svg>
      </button>
      <div>
        <label for="dropdown-1" class="block mb-2 font-bold">Dropdown 1:</label>
        <select id="dropdown-1" v-model="selectedOption1" class="w-full py-2 px-3 border border-gray-400 rounded-md">
          <option value="option-1">Option 1</option>
          <option value="option-2">Option 2</option>
          <option value="option-3">Option 3</option>
        </select>
      </div>
      <div>
        <label for="dropdown-2" class="block mb-2 font-bold">Dropdown 2:</label>
        <select id="dropdown-2" v-model="selectedOption2" class="w-full py-2 px-3 border border-gray-400 rounded-md">
          <option value="option-1">Option 1</option>
          <option value="option-2">Option 2</option>
          <option value="option-3">Option 3</option>
        </select>
      </div>
    </div>
      <!-- Main content -->
      <div class="flex flex-col w-full">
        <div class="flex border border-2 h-16 gap-4 items-center space-x-5 justify-between text-red-600 px-4">
          <div class="flex h-full items-center space-x-2 justify-start gap-4">
            <router-link :to="{name:'home'}">home</router-link>
            <router-link :to="{name:'about'}">about</router-link>
            <router-link :to="{name:'profile'}">profile</router-link>
            <router-link :to="{name:'table'}">table</router-link>
          </div>
          <form action="/logout" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <button type="submit">Logout</button>
          </form>
        </div>
        <div class="flex-1 overflow-y-auto">
          <router-view></router-view>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data: () => ({
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }),
  };
  </script>
  
  <style>
.text-custom-red {
    --tw-text-opacity: 1;
    color: rgba(239, 68, 68, var(--tw-text-opacity));
  }</style>