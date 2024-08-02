<template>
  <div class="video-container">
    <iframe 
      width="100%" 
      src="https://www.youtube.com/embed/TSbotayndTw" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
  </div>
</template>

<script>
export default {
  name: 'MyYouTubeVideo'
}
</script>

<style scoped>
.video-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
  overflow: hidden;
  max-width: 100%;
  background: #000;
  margin: 0 auto;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
