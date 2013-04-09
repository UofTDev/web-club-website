<?php

class Joinus_Controller extends Base_Controller
{
    public function action_joinus()
    {
    		$name = Input::get('name');
        $email = Input::get('email');
        $year = Input::get('year');
        $major = Input::get('major');
        //$number = Input::get('number');
        $team1 = Input::get('team1');
        $team2 = Input::get('team2');
        $team3 = Input::get('team3');
        $team4 = Input::get('team4');
        $language = Input::get('language');
        $platform = Input::get('platform');
        $about = Input::get('about');
        $joinas = Input::get('joinas');
        
        $input = array(
            'name' => $name,
            'email' => $email,
            'year' => $year,
            'major' => $major,
        		//'number' => $number,
        		'language' => $language,
        		'platform' => $platform,
        		'about' => $about,
        );
        $rules = array(
            'name' => 'required|match:/^([a-z\x20])+$/i',	//custom rule
            'email' => 'required|email',
            'year' => 'required',
            'major' => 'required|match:"/^([a-z\x20\.+_\,#;-])+$/i"',	
        		//'number' => 'required|numeric|min:100000000|max:9999999999',
        		'language' => 'match:"/^([^<])+$/i"',	//prevent agnst XSS
        		'platform' => 'match:"/^([^<])+$/i"',
        		'about' => 'match:"/^([^<])+$/i"',
        );
        $messages = array(
        		'year_required' => 'Please enter your year of study',
        		'major_required' => 'Please enter your field of study',
        		'match' => 'The :attribute must have alphanumeric values',	//alpha + spaces
        		'number_required' => 'Student number is required',
        		'number_numeric' => 'Only numerical values for student number',
        		'number_min' => 'Student number can only be 9 or 10 digits long',
        		'number_max' => 'Student number can only be 9 or 10 digits long',        		
        );
        Input::flash();
        
        $validation = Validator::make($input, $rules, $messages);
        if( $validation->fails() ) {
            return Redirect::to('join')->with_errors($validation);
        }
        
        $message_subj  = "Join Request - ".$joinas;
        $plain_message  = "Hi There! \n\nYou have a join request, details below: \n\n";
        
        $plain_message .= "Name = " . $name . "\n";
        $plain_message .= "Email = " . $email . "\n";
        $plain_message .= "Year of Study = " . $year . "\n";
        $plain_message .= "Field of Study = " . $major . "\n";
        $plain_message .= "Programming Languages = " . $language . "\n";
        $plain_message .= "Development Platforms = " . $platform . "\n";
        $plain_message .= "Team(s) of Interest = " . $team1 . " " . $team2 . " " . $team3 . " " . $team4 . "\n";
        $plain_message .= "Additional Info = " . $about . "\n";
        $plain_message .= "And they wish to join as a " . $joinas . "\n\n";
        $plain_message .= "Thanks! \n\n---This message was auto-generated from uoftdev.ca/join---";
                
        // Send the email
        $numSent = mail('uoftdev@gmail.com', $message_subj, $plain_message);
        if ($numSent == 1) {
        	$status_message = "Thank You!";
        	return Redirect::to('join')->with('success', 1)->with('status_success', $status_message);
        }
        	
        $status_message = "Error occured, we did not receive your submission...";
    	 	return Redirect::to('join')->with('status_error', $status_message);
    }
}

?>