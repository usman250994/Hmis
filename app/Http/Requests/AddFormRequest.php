<?php namespace app\Http\Requests;

use app\Http\Requests\Request;

class AddFormRequest extends Request {

  public function authorize()
  {
    return false;
  }

  public function rules()
  {
    return [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ];
  }  
}
