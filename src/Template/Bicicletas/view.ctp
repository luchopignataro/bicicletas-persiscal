<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicleta $bicicleta
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('- Editar bicicleta'), ['action' => 'edit', $bicicleta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('x Borrar bicicleta'), ['action' => 'delete', $bicicleta->id], ['confirm' => __('Estas seguro que deseas borrar la bicicleta {0}?', $bicicleta->modelo)]) ?> </li>
        <li><?= $this->Html->link(__('- Listar bicicletas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('+ Nueva bicicleta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bicicletas view large-9 medium-8 columns content">
    <h3><?= h($bicicleta->marca.' - '.$bicicleta->modelo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($bicicleta->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($bicicleta->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($bicicleta->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rodado') ?></th>
            <td><?= h($bicicleta->rodado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= h($bicicleta->material) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidades') ?></th>
            <td><?= h($bicicleta->velocidades) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($bicicleta->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($bicicleta->peso).'kg' ?></td>
        </tr>
        <tr>
          <th scope="row"><?= __('Foto') ?></th>
          <td><?= $this->Html->image('bicicletas'.DS.'foto'.DS.$bicicleta->foto_dir.DS.'landscape_'.$bicicleta->foto, ['class'=>'fotoVer','title'=> $bicicleta->marca.' '.$bicicleta->modelo, 'alt'=> $bicicleta->marca.' '.$bicicleta->modelo]) ?></td>
        </tr>
    </table>
</div>
