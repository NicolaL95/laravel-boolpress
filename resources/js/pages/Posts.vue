<template>
  <div class="container">
    <h2 class="text-center text-black">Lista post</h2>
    <div class="row justify-content-around align-items-center">
      <div class="post_container" v-for="post in posts.data" :key="post.index">
        <div class="card" style="width: 18rem">
          <img :src="post.cover" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
    };
  },
  mounted() {
    axios.get("../api/post").then((r) => {
      this.posts = r.data;
    });
  },
};
</script>

 