<template>
    <div >
    <md-tabs class="md-transparent" md-alignment="fixed">
      <md-tab id="tab-home" md-label="Home"> <h1>Home Page </h1></md-tab>
      <md-tab id="tab-pages" md-label="Avenue">     


      </md-tab>
      <md-tab id="tab-posts" md-label="Vendors">  <h1>Vendor </h1></md-tab>
      <md-tab id="tab-favorites" md-label="Ideas"> <h1>Ideas</h1></md-tab>
    </md-tabs>


    
  <div class="container">
  
    <md-card>
      <md-card-media>
        <img :src="'img/back-top.png'" alt="People" id='card-img'>
      </md-card-media>

      <md-card-content>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque ea nostrum.
      </md-card-content>
    </md-card>
  
  </div>
      
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
h1{
    text-align: center;
}
#card-img{
  height:150px;
  width: 150px;
}
</style>

