@extends('layouts.master')
@section('title')
User Generator
@endsection
@section('content')

<a href="/">Home Page</a>
<a href="lorem_ipsum">Lorem Ipsum Generator</a>

<h1> User Generator  </h1>
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form method='POST' action='user_generator'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <label for='paragraphs'>Users (Max 99): </label>
    <input type='text' name='number_of_users' maxlength='2' ><br>

    <label for='dob'> Date of Birth:</label>
    <input  type='checkbox' name='dob'>

    <label for='profile'>Profile:</label>
    <input type='checkbox' name='profile'><br>
    <input type='submit' value='Generate!'>
</form>



@if (isset($number))
<?php
if($dob == 'on' && $profile=='on'){

    for($i=0; $i<$number; $i++){
        echo "<h4>".$faker->name."</h4>";
        echo "<p>".$faker->date($format = 'Y-m-d', $max = 'now')."</p>";
        echo "<p>".$faker->text."</p>";
    }
}elseif ($dob == 'on') {
  echo "<h4>".$faker->name."</h4>";
  echo "<p>".$faker->date($format = 'Y-m-d', $max = 'now')."</p>";
} elseif($profile == 'on'){
  echo "<h4>".$faker->name."</h4>";
  echo "<p>".$faker->text."</p>";
} else {
  echo "<h4>".$faker->name."</h4>";
}
?>
@endif

@endsection
