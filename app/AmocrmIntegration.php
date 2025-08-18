<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class AmocrmIntegration
 * @var string $ame
 * @var string $client_id
 * @var string $client_secret
 * @var string $code
 * @var string $redirect_url
 * @var string $domain
 * @var integer $city_id
 * @var integer $city_id
 * @var integer $send_status
 * @package App
 */
class AmocrmIntegration extends Model
{
    protected $fillable = [
        'name', 'client_id', 'client_secret', 'code', 'redirect_url', 'domain', 'city_id', 'send_status', 'is_active'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function token()
    {
        return $this->hasOne(AmocrmToken::class, 'integration_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class, 'city_id', 'id');
    }
}
