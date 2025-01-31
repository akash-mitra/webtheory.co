<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Crypt;
use Google2FA;
use \ParagonIE\ConstantTime\Base32;

class Google2FAController extends Controller
{
    use ValidatesRequests;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('password.confirm')->only('disable');
    }
    
    /**
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function enable(Request $request)
    {
        // generate new secret
        $secret = $this->generateSecret();

        // get user
        $user = $request->user();

        // encrypt and then save secret
        $user->google2fa_secret = Crypt::encrypt($secret);
        $user->save();

        // generate image for QR barcode
        $imageDataUri = Google2FA::getQRCodeInline(
            $request->getHttpHost(),
            $user->email,
            $secret,
            200
        );

        return view('google2fa/enable', [
            'image' => $imageDataUri,
            'secret' => $secret
        ]);
    }

    /**
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function disable(Request $request)
    {
        $user = $request->user();

        // make secret column blank
        $user->google2fa_secret = null;
        $user->save();

        return view('google2fa/disable');
    }

    /**
     * Generate a secret key in Base32 format
     *
     * @return string
     */
    private function generateSecret()
    {
        $randomBytes = random_bytes(10);

        return Base32::encodeUpper($randomBytes);
    }
}
