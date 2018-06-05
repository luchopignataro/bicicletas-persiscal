<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicleta $bicicleta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('x Borrar'),
                ['action' => 'delete', $bicicleta->id],
                ['confirm' => __('Estas seguro que deseas borrar la bicicleta {0}?', $bicicleta->modelo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('- Listar bicicletas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bicicletas form large-9 medium-8 columns content">
    <?= $this->Form->create($bicicleta, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Editar bicicleta') ?></legend>
        <?php
            echo $this->Form->control('modelo');
            echo $this->Form->control('marca');
            //echo $this->Form->control('usuario');
            echo '<label>Usuario</label>';
            echo $this->Form->select('usuario', ['unisex'=>'unisex','hombre'=>'hombre','mujer'=>'mujer']);
            //echo $this->Form->control('rodado');
            echo '<label>Rodado</label>';
            echo $this->Form->select('rodado', [24=>24,26=>26,28=>28]);
            //echo $this->Form->control('material');
            echo '<label>Material<label>';
            echo $this->Form->select('material', ['aluminio'=>'aluminio','carbono'=>'carbono']);
            //echo $this->Form->control('velocidades');
            echo '<label>Velocidades</label>';
            echo $this->Form->select('velocidades', [4=>4,6=>6,8=>8]);
            //echo $this->Form->control('color');
            echo '<label>Color</label>';
            echo $this->Form->select('color', ['azul'=>'azul','negro'=>'negro','blanco'=>'blanco']);
            echo $this->Form->control('peso');
            echo $this->Form->control('foto',['type'=>'file', 'accept'=> 'image/*']);
            echo '<i class="atencion">Si desea cambiar la foto de la bicicleta, eliga una, de lo contrario quedará la foto anterior.</i>';
            echo $this->Html->image('bicicletas'.DS.'foto'.DS.$bicicleta->foto_dir.DS.'landscape_'.$bicicleta->foto, ['class'=>'fotoEdit','title'=> $bicicleta->marca.' '.$bicicleta->modelo, 'alt'=> $bicicleta->marca.' '.$bicicleta->modelo]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
