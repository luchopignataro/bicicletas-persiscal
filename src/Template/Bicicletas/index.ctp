<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicleta[]|\Cake\Collection\CollectionInterface $bicicletas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('+ Nueva bicicleta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bicicletas index large-9 medium-8 columns content">
    <h3><?= __('Bicicletas') ?></h3>
    <table id='listado' cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rodado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material') ?></th>
                <th scope="col"><?= $this->Paginator->sort('velocidades') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bicicletas as $bicicleta):?>
            <tr>
                <td><?= h($bicicleta->modelo) ?></td>
                <td><?= h($bicicleta->marca) ?></td>
                <td><?= h($bicicleta->usuario) ?></td>
                <td><?= h($bicicleta->rodado) ?></td>
                <td><?= h($bicicleta->material) ?></td>
                <td><?= h($bicicleta->velocidades) ?></td>
                <td><?= h($bicicleta->color) ?></td>
                <td><?= $this->Number->format($bicicleta->peso).'kg' ?></td>
                <td><?= $this->Html->image('bicicletas'.DS.'foto'.DS.$bicicleta->foto_dir.DS.'landscape_'.$bicicleta->foto, ['class'=>'fotoList','title'=> $bicicleta->marca.' '.$bicicleta->modelo, 'alt'=> $bicicleta->marca.' '.$bicicleta->modelo]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('ver'), ['action' => 'view', $bicicleta->id]) ?>
                    <?= $this->Html->link(__('editar'), ['action' => 'edit', $bicicleta->id]) ?>
                    <?= $this->Form->postLink(__('borrar'), ['action' => 'delete', $bicicleta->id], ['confirm' => __('Estas seguro que deseas borrar la bicicleta {0}?', $bicicleta->modelo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p class="i"><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, viendo {{current}} elementos de {{count}} totales')]) ?></p>
    </div>
</div>
