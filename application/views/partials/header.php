<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
  </head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <body>
<?php echo base_url() . "css/style.css"; ?>

<div id="app">
  <form @submit="formSubmit" class="" action="index.html" method="post">
    <div v-for="input in inputs">
      <label for="">{{ input.name }}</label>
      <br>
      <input type="text" :name="input.filedName" value="">
      <hr>
    </div>
    <input type="submit" name="submit" value="submit">
  </form>
  <button v-on:click="addNewInput"  type="button" name="button">add</button>
  <!-- <button-counter></button-counter> -->
</div>
