@extends('layouts.master')

@section('title')
Developer's Best Friend
@endsection

@section('content')

<h3> What is Developer's Best Friend?</h3>
<p> Developer's best friend is a helpful online tool that generates Lorem Ipsum text and
    random Users for developers.</p>
<h3> What is Lorem Ipsum?</h3>
<p>
   Lorem Ipsum is a filler text that is visually similar to the
   real text but it has no meaning. It is used by publishers,
   designers, developers to demostrate visual design and  graphical elements.
</p>
<h3> How does Random User Genereator work?</h3>
<p>
  Random User generator can generate up to 99 users at a time.
  You can choose to include a date of birth and/or a brief profile text
  (Lorem Ipsum type text).
</p>
  <p>
    <a href="lorem_ipsum"> Go to Lorem Ipsum Generator</a><br>
    <a href="user_generator"> Go to Random User Generator</a>
  </p>
@endsection
