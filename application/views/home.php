<?php
// var_dump($user);
// echo "<pre>";
// print_r($test);
// echo "</pre>";
//
// echo "<pre>";
// print_r($question);
// echo "</pre>";
//
// echo "<pre>";
// print_r($varinats);
// echo "</pre>";
$this->load->view('partials/header');
if ($tests) {
  echo "<select>";
  foreach($tests as $test) {
    echo "<option value='".$test->ID."'>{$test->name}</option>";
  }
  echo "</select>";
}

foreach ($question as $q) {
  echo "<p>" . $q->name . "</p>";
  echo "<ul>";

  foreach ($varinats as $v) {
    if ($v->questionID == $q->ID) {
      echo "<li>" . $v->value . "</li>";
    }
  }

  echo "</ul>";
}
$this->load->view('partials/footer');
// echo "<div>";
// if ($test) {
//   foreach ($test as $value) {
//     // if ($value->questionID)
//     echo "<ul>";
//     foreach ($variable as $key => $value) {
//       // code...
//     }
//
//   }
// }
// echo "</div>";
