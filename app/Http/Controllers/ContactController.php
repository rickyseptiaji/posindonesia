<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }
    private $receiving_email_address = 'contact@example.com';

    public function sendEmail(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if (!file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
            return response()->json(['error' => 'Unable to load the "PHP Email Form" Library!'], 500);
        }

        include($php_email_form);

        $contact = new PHP_Email_Form;
        $contact->ajax = true;

        $contact->to = $this->receiving_email_address;
        $contact->from_name = $request->input('name');
        $contact->from_email = $request->input('email');
        $contact->subject = $request->input('subject');

        // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
        /*
        $contact->smtp = array(
            'host' => 'example.com',
            'username' => 'example',
            'password' => 'pass',
            'port' => '587'
        );
        */

        $contact->add_message($request->input('name'), 'From');
        $contact->add_message($request->input('email'), 'Email');
        $contact->add_message($request->input('message'), 'Message', 10);

        if ($contact->send()) {
            return response()->json(['success' => 'Email sent successfully.']);
        } else {
            return response()->json(['error' => 'Failed to send email.'], 500);
        }
    }
}