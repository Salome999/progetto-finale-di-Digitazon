<template>
    <div class="contact">
      <div class="container">
        <h2><span>Contact us.</span></h2>
  
        <form id="appform" @submit="checkForm" action="#" method="#" novalidate="true">
          <p v-if="errors.length" class="error-message">
            <b>Avviso: </b>
            <ul>
              <li v-for="error in errors">{{ error }}</li>
            </ul>
          </p>
          <p>
            <input id="name" placeholder="name" v-model="name" type="text" name="name">
          </p>
          <p>
            <input id="lastname" placeholder="lastname" v-model="lastname" type="text" name="lastname">
          </p>
          <p>
            <input id="email" placeholder="Email" v-model="email" type="email" name="email">
          </p>
          <p>
            <textarea placeholder="message" v-model="message" rows="3" ></textarea>
          </p>
          <p class="button-container">
            <input type="submit" value="submit">
          </p>
        </form>
      </div>
    </div>
  </template>
  
  <script>
    export default {
      data(){
        return {
          errors: [],
          name: null,
          email: null,
          message: null,
          lastname: null,
        }
      },
      methods: {
        checkForm: function(e){
          this.errors = [];
          if(!this.name){
            this.errors.push("Il nome è obbligatorio.");
          }
          if(!this.lastname){
            this.errors.push("lastname è obbligatorio.");
          }
          if(!this.email){
            this.errors.push("Email è obbligatorio.");
          }else if(!this.validEmail(this.email)){
            this.errors.push("E-mail inserita non valida.");
          }
          if(!this.errors.length){
            return true;
          }
          e.preventDefault();
        },
        validEmail: function(email){
          let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }
      }
    }
  </script>
  
  <style>
  form {
    width: 100%;
    border: 1px solid rgb(210, 210, 210);
    border-top: none;
    padding-top: 30px;
  }
  .error-message {
    color: #BD0101;
  }
  .error-message li {
    margin-left: 20px;
  }
  input {
    padding: 10px 0;
  }
  input, textarea {
    width: 100%;
    border: none;
    border-bottom: 1px solid rgb(210, 210, 210);
    font-size: 1rem;
    line-height: 1.6rem;
    font-family: Arial, sans-serif;
    color: #333;
  }
  
  form > p {
    padding: 15px 25px;
  }
  .button-container {
    text-align: center;
  }
  .button-container input {
    width: 200px;
    border: 1px solid #da6516;
    background-color: #da6516;
    color: #fff;
    border-radius: 10px;
    padding: 10px 15px;
    font-weight: 700;
    margin: 0px auto;
    font-size: 16px;
  }
  .button-container input:hover {
    background-color: #fff;
    color: #da6516;
  }
  </style>