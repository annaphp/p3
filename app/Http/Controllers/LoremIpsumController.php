<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as Generator;

class LoremIpsumController extends Controller {

  public function displayForm(){
      return view('p3.lorem_ipsum');
}
  //this function generates Lorem Ipsum text using badcow/lorem-ipsum package functionality
  public function generateText(Request $request){
      $this ->validate($request,
      ['number_of_paraghraphs' => 'required|numeric|min:1',]);

      $number = $request->input('number_of_paraghraphs');
      $generator = new Generator();
      $result = $generator->getParagraphs($number);
      return view('p3.lorem_ipsum')->with('result',$result);
    }
  }
