<template>
  <div>
    <h3>{{ title }}</h3>
    <hr>
    <h4>sve radi tebrice...</h4>



    <button v-on:click="activateButton" v-bind:disabled="btnState">Pali!</button>
    <button v-on:click="deactivateButton" v-bind:disabled="btnState">Gasi!</button>
    <br>
      {{ btnState ? 'disabled' : 'enabled'}}
    <br>

    <div class="holder">
      <ul>
        <li v-for="(data, index) in content" :key='index'>{{index}} . {{data.item}}</li>
      </ul>


      <p v-if="content.length >=1">Ima da se radi!</p>
      <p v-else>Laganitza...</p>

      <hr>
      <div v-bind:class="{ alert: showAlert }"></div>
      <br>
      <transition name="alert-in">
        <p class="alert" v-if="this.showAlert">govno</p>
      </transition>


      <!-- ovdi sad -->

      <form @submit.prevent="addText">
      <input type="text" placeholder="Pisi nesto" v-model="tekst">
      <input type="checkbox" id="checkbox" v-model="peder">peder?
      </form>
     
      <!-- <form v-on:submit="funxija"></form> -->
     
      <button v-on:click="removeText" v-bind:disabled="btnState">brisi govno</button>

      <p> {{ ajme }}</p>

      <hr>

      <button v-on:click="importShiet" v-bind:disabled="btnState">uvezi govna</button>

      <br>

      <ul>
        <li v-for="(data, index) in govna" :key='index'>{{index}} . {{data.email}} - {{data.username}}</li>
      </ul>
      <br>

      <button v-on:click="emptyShiet" v-bind:disabled="btnState">brishi govna</button>

    </div>
  </div>
  
</template>

<script>
export default {
  name: 'Main',
  
  data(){
    return {
      title: 'Vue app tebra',
      btnState: false,
      content:[
        {"item": "pivo"},
        {"item": "panja"},
        {"item": "bleja"},
        {"item": "racq"},
      ],
      showAlert: false,
      peder: false,
      ajme: '',
      tekst: '',
      govna:[]


    }
  },

  methods: {
    activateButton() {
       // let vm = this;
         this.showAlert = true;
    },

    deactivateButton() {
       // let vm = this;
         this.showAlert = false;
    },

    addText(){
      this.content.push({item: this.tekst});
      this.tekst = '';
      this.ajme ='ovaj mladic je peder:'+this.peder; 
      console.log(this.ajme);
    },

    removeText(){
      this.content.pop();
    },

    importShiet(){
     fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    //.then(json => console.log(json))
    .then(json => this.govna = json); // ovo radi radi radica :)
    },

    emptyShiet(){
      this.govna = [];
    }



  }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}


.alert {
  background-color:yellow;
  width:100%;
  height:25px;
}

.alert-in-enter-active {
  animation: bounce-in .5s;
}

.alert-in-leave-active {
  animation: bounce-in .5s reverse;
}

@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}

</style>
