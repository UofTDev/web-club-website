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
        		'language' => 'match:"/^([a-z\x20\.+_\,#;-])+$/i"',
        		'platform' => 'match:"/^([a-z\x20\.+_\,#;-])+$/i"',
        		'about' => 'match:"/^([a-z\x20\.+_\,#;-])+$/i"'
        );
        $messages = array(
        		'year_required' => 'Please enter your year of study',
        		'major_required' => 'Please enter your field of study',
        		'match' => 'The :attribute must have alphabetical values',	//alpha + spaces
        		'number_required' => 'Student number is required',
        		'number_numeric' => 'Only numerical values for student number',
        		'number_min' => 'Student number can only be 9 or 10 digits long',
        		'number_max' => 'Student number can only be 9 or 10 digits long',        		
        );
        
        $validation = Validator::make($input, $rules, $messages);
        if( $validation->fails() ) {
            return Redirect::to('join')->with_errors($validation);
        }

        $username = "uoftdev@gmail.com";
        $password = "password";
        $from_address   = "uoftdev@gmail.com";
        $from_name     = "JoinUs";
        $to_address   = "uoftdev@gmail.com"; //uoftdev@gmail.com 
        $to_name    = "Join Request";
        
        $message_subj  = "Join Request - ".$joinas;
        $plain_message  = "Hi There! \n\nYou have a join request, details below: \n\n";
        
        $plain_message .= "Name = \t\t\t\t\t" . $name . "\n";
        $plain_message .= "Email = \t\t\t\t" . $email . "\n";
        $plain_message .= "Year of Study = \t\t\t" . $year . "\n";
        $plain_message .= "Field of Study = \t\t\t" . $major . "\n";
        $plain_message .= "Programming Languages = \t" . $language . "\n";
        $plain_message .= "Development Platforms = \t" . $platform . "\n";
        $plain_message .= "Team(s) of Interest = \t\t\t" . $team1 . " " . $team2 . " " . $team3 . " " . $team4 . "\n";
        $plain_message .= "Additional Info = \t\t\t" . $about . "\n";
        $plain_message .= "And they wish to join as a " . $joinas . "\n\n";
        $plain_message .= "Thanks! \n\n---This message was auto-generated from uoftdev.ca/join---";
        
        //$html_message  = "<a href='http://maxoffsky.com'>Maxoffsky!</a>";
        $mailer = IoC::resolve('mailer');
        $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
        ->setUsername($username)
        ->setPassword($password);
        $mailer = Swift_Mailer::newInstance($transporter);
        
        // Construct the message
        $message = Swift_Message::newInstance('Join Request - '.$joinas)
        ->setFrom(array($from_address=>$from_name))
        ->setTo(array($to_address=>$to_name))
        ->addPart($plain_message,'text/plain')
        ->setBody($plain_message,'text/plain');
        
        // Send the email
        $numSent = $mailer->send($message);
        if ($numSent == 1) {
        	$status_message = "Thank You!";
        	return Redirect::to('join')->with('success', 1)->with('status_success', $status_message);
        }
        	
        $status_message = "Error occured, we did not receive your submission...";
    	 	return Redirect::to('join')->with('status_error', $status_message);
    }
}

?>