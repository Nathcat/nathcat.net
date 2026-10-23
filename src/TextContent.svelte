<script lang="ts">
  let { children } = $props();
</script>

<div class="column text-content">
  {@render children()}
</div>

<style>
  .text-content {
    border-left: 1px solid var(--quad-color);
    width: 100%;
    padding-left: 25px;
    box-sizing: border-box;
    padding-right: 10%;
  }
</style>
