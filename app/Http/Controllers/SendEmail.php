<?php

namespace App\Http\Controllers;

use App\Models\BadanUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\MyTestMail;

class SendEmail extends Controller
{
    public function sendEmail(Request $request)
    {
        $badanUsaha = BadanUsaha::whereNull('last_send_email')
            ->where('status_email', true)
            ->take(200)
            ->get();
        foreach ($badanUsaha as $key => $value) {
            $data = [
                'nama' => $value->nama,

            ];
            try {
                // if ($request->from == 'adit') {
                //     Mail::mailer('smtp2')->to($value->email)->send(new MyTestMail($data));
                // }
                // if ($request->from == 'lukman') {
                //     Mail::mailer('smtp3')->to($value->email)->send(new MyTestMail($data));
                // }

                Mail::mailer('smtp')->to($value->email)->send(new MyTestMail($data));
                BadanUsaha::where('id', $value->id)->update([
                    'last_send_email' => date('Y-m-d H:i:s'),
                ]);
            } catch (\Exception  $e) {
                BadanUsaha::where('id', $value->id)->update(['status_email' => false]);
            }
        }
        return redirect()->route('home')->with('success', 'Email berhasil dikirim');
    }

    public function resetEmail()
    {
        BadanUsaha::where('status_email', true)->update(['last_send_email' => null]);
        return redirect()->route('home')->with('success', 'Email berhasil direset');
    }
}
