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
    <div class="row py-5 justify-content-around">
      <div class="category_container">
        <h2 class="text-center text-black">Lista categorie</h2>
        <div class="card" style="width: 18rem">
          <ul class="list-group list-group-flush">
            <li
              class="list-group-item"
              v-for="category in categories.data"
              :key="category.index"
            >
              {{ category.name }}
            </li>
          </ul>
        </div>
      </div>
      <div class="category_container">
        <h2 class="text-center text-black">Lista tag</h2>
        <div class="card" style="width: 18rem">
          <ul class="list-group list-group-flush">
            <li
              class="list-group-item"
              v-for="tag in tags.data"
              :key="tag.index"
            >
              {{ tag.keyword }}
            </li>
          </ul>
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
      categories: null,
      tags: null,
    };
  },
  mounted() {
    axios
      .all([
        axios.get("../api/post"),
        axios.get("../api/category"),
        axios.get("../api/tag"),
      ])
      .then(
        axios.spread((...responses) => {
          this.posts = responses[0].data;
          this.categories = responses[1].data;
          this.tags = responses[2].data;
        })
      );
  },
};
</script>
