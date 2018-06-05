<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicleta $bicicleta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('- Listar bicicletas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bicicletas form large-9 medium-8 columns content">
    <?= $this->Form->create($bicicleta, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Agregar bicicleta') ?></legend>
        <?php
            echo $this->Form->control('modelo');
            echo $this->Form->control('marca');
            //echo $this->Form->control('usuario');
            echo 'Usuario';
            echo $this->Form->select('usuario', ['unisex'=>'unisex','hombre'=>'hombre','mujer'=>'mujer']);
            //echo $this->Form->control('rodado');
            echo 'Rodado';
            echo $this->Form->select('rodado', [24=>24,26=>26,28=>28]);
            //echo $this->Form->control('material');
            echo 'Material';
            echo $this->Form->select('material', ['aluminio'=>'aluminio','carbono'=>'carbono']);
            //echo $this->Form->control('velocidades');
            echo 'Velocidades';
            echo $this->Form->select('velocidades', [4=>4,6=>6,8=>8]);
            //echo $this->Form->control('color');
            echo 'Color';
            echo $this->Form->select('color', ['azul'=>'azul','negro'=>'negro','blanco'=>'blanco']);
            echo $this->Form->control('peso',['placeholder' => 'xx,xx']);
            echo $this->Form->control('foto', ['dir'=> 'img/bicicleta','type'=>'file', 'accept'=> 'image/*']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
