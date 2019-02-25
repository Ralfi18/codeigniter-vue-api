var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    count: 0,
    inputs: [],
  },
  methods: {
    formSubmit: function(event){
      event.preventDefault();
      console.log(this.inputs);
      fetch('http://localhost/ci/home/api',{
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: JSON.stringify({
          inputs: this.inputs
        })
      })
      .then(function(response){
        console.log(response)
        return response.json();
      }).
      then(function(data){
        console.log(data)
      })
      .catch(function(error) {
          // This is where you run code if the server returns any errors
          console.log(error)
      });
    },
    addNewInput: function() {
      this.count++;
      this.inputs.push({
        name: 'test' + this.count,
        filedName: 'question' + this.count,
        id: this.count,
      });
    },

    // greet: function (event) {
    //   // `this` inside methods points to the Vue instance
    //   alert('Hello ' + this.name + '!')
    //   // `event` is the native DOM event
    //   if (event) {
    //     alert(event.target.tagName)
    //   }
    // }
  }
});
// Vue.component('button-counter', {
//   data: function () {
//     return {
//       count: 0,
//       inputs: [],
//     }
//   },
//   methods: {
//     addInputs: function(){
//       this.inputs.push({name: 'test'})
//     }
//   },
//   template: '<button v-on:click="addInputs">Test</button>'
// })
//
// new Vue({ el: '#app' });
