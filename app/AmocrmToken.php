<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AmocrmToken
 * @var string $access_token
 * @var string $refresh_token
 * @var integer $expires_in
 * @var integer $expired_time
 */
class AmocrmToken extends Model
{
    protected $fillable = [
        'integration_id', 'access_token', 'refresh_token', 'expires_in', 'expired_time',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function integration()
    {
        return $this->belongsTo(AmocrmIntegration::class);
    }
}
