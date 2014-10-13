<?php
class CustomerController extends BaseController
{

	public function getRegister()
	{
		return View ::make('Customer.Register');
		//return View ::make('Register');

	}

	public function getLogin()
	{
		return "Login Page";
	}

	public function postRegister()
	{
		/*$validate =  Validator::make(Input::all(), array
			{
				'Firstname' =>'required',
				'Lastname' =>'required',
				'Address' =>'required',
				'DOB' =>'required',
				'Phone' =>'required',
				'Email' =>'required|unique:Customer',
				'Password1' =>'required | min:6',
				'Password2' =>'required|same:Password1',
			});
		*/
		$inputValues = array(
			
				'Firstname' =>Input::get('Firstname'),
				'last name' =>Input::get('Lastname'),
				'Address' =>Input::get('Address'),
				'Date of Birth' =>Input::get('DOB'),
				'Email' =>Input::get('Email'),
				'Phone' =>Input::get('Phone'),
				'Password' =>Hash::make(Input::get('Password'))
				
				);

		$rules = array(
                'Firstname'=>'required|alpha|min:2',
                'Lastname'=>'required|alpha|min:2',
                'Email'=>'required',//|email',//|unique:customer,email,',//.Input::get('id').',id',
                'Password1'=>'min:1',
                'Password2'=>'same:Password1',
                //'Address'=>'regex:/^[a-z0-9- ]+$/i|min:2',
                //'city'=>'alpha|min:2',
                //'state'=>'alpha|min:2|max:2',
                //'zip'=>'numeric|min:5|max:5',
                //'Phone'=>'regex:/^\d{3}\-\d{3}\-\d{4}$/',
                );
         $messages = array(
                'unique' => 'The :attribute already been registered.',
                'Phone.regex' => 'The :attribute number is invalid , accepted format: xxx-xxx-xxxx',
                'Address.regex' => 'The :attribute format is invalid.',
                );
                         


   

        //$validate = Validator::make($inputValues,$rules);
        $validate = Validator::make(Input::all(),$rules);
       
        

      if ($validate->fails())
		{

			
			return Redirect::route('getRegister')->withErrors($validate)->withInput(); //still need to work for with input part

		}
		else
		{
			
			//$customer = Customer::create(  $inputValues);
			$customer = new Customer;
			$customer->Firstname = 'john';
			$customer->save();
			dd($inputValues);

			if($customer)
			{

				return Redirect::route('home')->with('success','Registered successfully.');
			}
			else
			{
				return Redirect::route('home')->with('fail','Registration failed. Try again.');
			}
		}		
	}

	public function postLogin()
	{
		return "Login Page";
	}

	public function validateData()
	{

	}
}