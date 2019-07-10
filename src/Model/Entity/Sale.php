<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int $reservation_id
 * @property int $people
 * @property float $price
 * @property int $user_id
 * @property int $client_id
 *
 * @property \App\Model\Entity\Reservation $reservation
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 */
class Sale extends Entity
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
        'reservation_id' => true,
        'people' => true,
        'price' => true,
        'user_id' => true,
        'client_id' => true,
        'reservation' => true,
        'user' => true,
        'client' => true
    ];
}
