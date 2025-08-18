<?php

namespace App\Console\Commands;

use App\AmocrmIntegration;
use App\AmocrmToken;
use App\Http\Controllers\amoCrm\services\AmoCrm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AccessTokenExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:accessTokenExpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Log::info('Cron AccessToken start');

        try {
            $integrations = AmocrmIntegration::where('is_active', true)
            ->groupBy('client_id')
            ->get();

            Log::info('Cron AccessToken. Refresh token start to integration id =' . $integrations);
            if (!$integrations) {
                return false;
            }

            foreach ($integrations as $integration) {
                Log::info('Cron AccessToken. Refresh token start to integration id =' . $integration->id);
                $this->refreshToken($integration);
//                if (strtotime("now") >= $integration->token->expired_time) {
//                    Log::info('Cron AccessToken. Refresh token start to integration id =' . $integration->id);
//                } else {
//                    Log::info('Cron AccessToken. Token is ok Integration id =' . $integration->id);
//                }
            }
        } catch (\Exception $e) {
            Log::error('Cron AccessTokenExpired -> handle. Error happened', ['exception' => $e]);
        }
        Log::info('Cron AccessToken end');
    }

    protected function refreshToken(AmocrmIntegration $integration): void {
        try {

            $intNew = AmoCrm::refreshAccessToken($integration);
            AmocrmIntegration::where('client_id', $integration->client_id)
                ->where('send_status', '!=', 1)
                ->update([
                    'send_status' => 0,
                ]);
//            AmocrmToken::where('refresh_token', $integration->token->refresh_token)
//                ->update([
//                    'access_token' => $intNew->token->access_token,
//                    'refresh_token' => $intNew->token->refresh_token,
//                    'expires_in' => $intNew->token->expires_in,
//                    'expired_time' => $intNew->token->expired_time,
//                ]);
            Log::info('Cron Token refreshed successfully', ['newToken' => $intNew]);
        } catch (\Exception $e) {
            AmocrmIntegration::where('client_id', $integration->client_id)
                ->update([
                    'send_status' => 2
                ]);
            Log::error('Cron AccessTokenExpired -> refreshToken. Get refresh token error', ['exception' => $e]);
        }
    }
}

