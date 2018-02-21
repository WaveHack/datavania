<?php

namespace App\Models;

class Item extends AbstractModel
{
    protected $casts = [
        'rarity' => 'int',
        'is_starter' => 'bool',
        'is_shoppable' => 'bool',
        'value' => 'int',
        'stat_atk' => 'int',
        'stat_def' => 'int',
        'stat_str' => 'int',
        'stat_con' => 'int',
        'stat_int' => 'int',
        'stat_mnd' => 'int',
        'stat_lck' => 'int',
        'stat_hp' => 'int',
        'stat_mp' => 'int',
        'resistance_strike' => 'int',
        'resistance_slash' => 'int',
        'resistance_pierce' => 'int',
        'resistance_fire' => 'int',
        'resistance_ice' => 'int',
        'resistance_lightning' => 'int',
        'resistance_petrify' => 'int',
        'resistance_holy' => 'int',
        'resistance_darkness' => 'int',
        'resistance_curse' => 'int',
        'resistance_poison' => 'int',
        'is_consumable' => 'bool',
        'is_consumed_over_time' => 'bool',
    ];

    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
}