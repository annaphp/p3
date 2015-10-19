@extends('layouts.master')
@section('title')
Lorem-Ipsum Generator
@endsection
@section('content')


<a href="/"> Home Page </a>
<a href="user_generator"> User Generator </a>

<h1> Lorem Ipsum Generator </h1>
@if(count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form method='POST' action='lorem_ipsum'>
  <input type='hidden' name='_token' value='{{ csrf_token() }}'><br>
  <label for='paragraphs'># Paragraphs (Max 99):</label>
  <input type='text' name='number_of_paraghraphs' maxlength='2' ><br>
  <input type='submit' value='Generate!'>
</form>

<div class="content">

  @if (isset($result))
  <?php
  for($i=0; $i<count($result); $i++){
    echo "<p>".$result[$i]."</p>";
  }
  ?>
  @endif
</div>
@endsection
