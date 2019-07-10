<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int $document
 * @property \Cake\I18n\FrozenTime $output
 * @property int $destiny_id
 * @property int $seat
 * @property int $user_id
 * @property int $client_id
 * @property int $bus_id
 *
 * @property \App\Model\Entity\Destiny $destiny
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Bus $bus
 */
class Ticket extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'document' => true,
        'output' => true,
        'destiny_id' => true,
        'seat' => true,
        'user_id' => true,
        'client_id' => true,
        'bus_id' => true,
        'destiny' => true,
        'user' => true,
        'client' => true,
        'bus' => true
    ];
}
