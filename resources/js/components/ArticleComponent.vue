<template>
    <div class="container">
        <h1>Hello {{fullname}} - {{name}}</h1>
    </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  },
  computed: {
    fullname() {
      return this.$store.getters.getFullName;
    },
    name() {
      return this.$store.state.firstname;
    },
  }
}
</script>

<style scoped>

</style>
