<template>
  <div class="container">
    <div class="error" v-if="error">
      <p class="lead">Nothing to show here</p>
    </div>
    <div class="loading" v-else-if="loading">
      <p class="lead">Loading...</p>
    </div>
    <div class="post_page row justify-content-center">
      <div class="post_details d-flex flex-column">
        <h1 class="text-center">Post: {{ $route.params.slug }}</h1>
        <h2 class="text-center">{{ post.title }}</h2>
        <img :src="post.cover" alt="" />
      </div>
      <div
        v-if="post.category != null"
        class="category_details text-right px-5"
      >
        <h2>{{ post.category.name }}</h2>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      post: null,
    };
  },
  mounted() {
    axios.get("/api/post/" + this.$route.params.slug).then((resp) => {
      console.log(resp.data.data);
      this.post = resp.data.data[0];
    });
  },
};
</script>

<style>
</style>