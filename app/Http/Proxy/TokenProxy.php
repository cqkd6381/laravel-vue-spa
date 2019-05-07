<?php
namespace App\Http\Proxy;

use GuzzleHttp\Client;

class TokenProxy
{
    /**
     * @var
     */
    protected $http;

    /**
     * TokenProxy constructor.
     * @param $http
     */
    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    /**
     * @param $email
     * @param $password
     * @return \Illuminate\Http\JsonResponse
     */
    public function login($email, $password)
    {
        if (auth()->attempt(['email'=>$email, 'password'=>$password, 'is_active'=>1])){
            return $this->proxy('password', [
                'username' => $email,
                'password' => $password,
                'scope' => '',
            ]);
        }
        return response()->json([
            'status' => 'login false',
            'status_code' => 421,
            'message' => 'Credentials not match'
        ],421);
    }

    /**
     * @param string $grantType
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function proxy(string $grantType, array $data = [])
    {
        $data = array_merge($data, [
            'client_id' => env('PASSPORT_CLIENT_ID'),
            'client_secret' => env('PASSPORT_CLIENT_SECRET'),
            'grant_type' => $grantType
        ]);
//        return $data;

        $website = $_SERVER['HTTP_HOST'];

        $response = $this->http->post('http://' . $website . '/oauth/token', [
            'form_params' => $data
        ]);

        $token = json_decode((string)$response->getBody(), true);

        return response()->json([
            'token' => $token['access_token'],
            'expires_in' => $token['expires_in'],
            'status' => 'success',
            'status_code' => 200
        ])->cookie('refreshToken', $token['refresh_token'], 14400, null, null, false, true);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        $refreshToken = request()->cookie('refreshToken');
        return $this->proxy('refresh_token',
            ['refresh_token' => $refreshToken]
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $user = auth()->guard('api')->user();

        $accessToken = $user->token();

        app('db')->table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked' => true
            ]);

        app('cookie')->queue(app('cookie')->forget('refreshToken'));

        $accessToken->revoke();

        return response()->json([
            'status' => 'success',
            'status_code' => 204,
            'message' => 'logout success'
        ],204);
    }


}
