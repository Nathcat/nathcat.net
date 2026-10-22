<script lang="ts">
  import Footer from "../Footer.svelte";
  import Header from "../Header.svelte";

  let { children } = $props();
</script>

<svelte:head>
  <title>Nathan Baines</title>
</svelte:head>

<div class="content">
  <Header></Header>
  <div class="main align-center">
    {@render children()}
  </div>
  <Footer></Footer>
</div>
