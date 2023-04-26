<template>
  <div class="min-h-screen w-screen bg-gray-800">
      <div class="border border-2 flex h-16 items-center justify-between text-red-600 px-4">
          <div class="flex h-full items-center space-x-2 justify-start">
              <router-link :to="{name:'home'}">home</router-link>
              <router-link :to="{name:'about'}">about</router-link>
          </div>
          <router-link to="" tag="button">logout</router-link>
      </div>
      <router-view></router-view>
  </div>
</template>

<script>
</script>

<style>
</style>
