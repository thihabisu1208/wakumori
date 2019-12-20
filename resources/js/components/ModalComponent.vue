<template>
    <transition name="fade">
        <div class="overlay" v-if="showing">
            <slot />
        </div>
  </transition>
</template>

<script>
export default {
  props: {
    showing: {
      required: true,
      type: Boolean
    }
  }
}
</script>

<style>
    .overlay{
      width: 100%;
      height: 100vh;
      z-index: 999;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(151, 151, 151, 0.7);
      }
</style>