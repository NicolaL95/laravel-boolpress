<template>
  <div class="container">
    <h1 class="text-center text-black">Lista post</h1>
    <div class="row justify-content-around align-items-center">
      <div class="post_container" v-for="post in posts" :key="post.index">
        <div class="card" style="width: 18rem">
          <img :src="post.cover" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p>{{ post.subtitle }}</p>
            <p class="card-text">
              {{ post.body }}
            </p>
            <router-link class="btn btn-primary" :to="'/posts/' + post.slug"
              >View details</router-link
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: null,
      posts_meta: null,
    };
  },
  mounted() {
    axios.get("../api/post").then((r) => {
      console.log(r.data.data);
      this.posts = r.data.data;
      this.posts_meta = r.data.meta;
    });
  },
};
</script>

 