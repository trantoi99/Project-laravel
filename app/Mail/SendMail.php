<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

trait SendMail
{
    public function send_mail($mail)
    {
        $result = file_get_contents(base_path('public\sendmail\sendmail.html'));

        
        try{
            $body = [
                'Messages' => [
                    [
                    'From' => [
                        'Email' => env('tranhungtoi308@gmail.com'),
                        'Name' => env('Default')
                    ],
                    'To' => [
                        [
                        'Email' => $mail['email'],
                        'Name' => $mail['name']
                        ]
                    ],
                    'Subject' => "Cảm ơn bạn đã đặt hàng!",
                    'HTMLPart' => $result
                    ]
                ]
            ];
        
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('MAIL_JET_BASE_URI'),
            ]);
        
            $response = $client->request('POST', 'send', [
                'json' => $body,
                'auth' => [env('MAIL_JET_API_KEY'), env('MAIL_JET_SECRET')]
            ]);
        
            if($response->getStatusCode() == 200) {
                $body = $response->getBody();
                $response = json_decode($body);
                if ($response->Messages[0]->Status == 'success') {
                    return true;
                }
            }
            else{
                return false;
            }
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
