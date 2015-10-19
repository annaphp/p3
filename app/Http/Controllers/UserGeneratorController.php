<?php
namespace app\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class UserGeneratorController extends Controller {
  public function displayForm(){
    return view('p3.user_generator');
  }

//this function generates random users using  fzaninotto/faker package functionality
  public function generateUser(Request $request){

    $this ->validate($request,
    ['number_of_users' => 'required|numeric|min:1',]);

      $number = $request->input('number_of_users');
      $dob = $request->input('dob');
      $profile = $request->input('profile');
      $faker = Faker::create();
      return view('p3.user_generator', compact('faker','number','dob','profile'));
    }
  }
