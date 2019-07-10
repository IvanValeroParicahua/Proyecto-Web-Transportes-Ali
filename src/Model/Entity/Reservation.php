<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $client_id
 * @property \Cake\I18n\FrozenTime $date
 * @property \Cake\I18n\FrozenDate $deadline
 * @property int $seat
 * @property int $destiny_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Destiny $destiny
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Sale[] $sales
 */
class Reservation extends Entity
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
        'client_id' => true,
        'date' => true,
        'deadline' => true,
        'seat' => true,
        'destiny_id' => true,
        'user_id' => true,
        'client' => true,
        'destiny' => true,
        'user' => true,
        'sales' => true
    ];
}
