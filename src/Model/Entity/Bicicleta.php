<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bicicleta Entity
 *
 * @property int $id
 * @property string $modelo
 * @property string $marca
 * @property string $usuario
 * @property string $rodado
 * @property string $material
 * @property string $velocidades
 * @property string $color
 * @property float $peso
 * @property string $foto
 */
class Bicicleta extends Entity
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
        'modelo' => true,
        'marca' => true,
        'usuario' => true,
        'rodado' => true,
        'material' => true,
        'velocidades' => true,
        'color' => true,
        'peso' => true,
        'foto' => true
    ];
}
