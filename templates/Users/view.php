<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= ucfirst($user->name);  ?></h3>
            <table>
                <tr>
                    <th>Name</th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td><?= h($user->mobileno) ?></td>
                </tr>

                <tr>
                    <th>Age</th>
                    <td><?= $user->age === null ? '' : $this->Number->format($user->age) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('CreatedAt') ?></th>
                    <td><?= h($user->createdAt) ?></td>
                </tr>
                <tr>
                    <th><?= __('UpdatedAt') ?></th>
                    <td><?= h($user->updatedAt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $user->is_active ? __('Yes') : __('No'); ?></td>
                </tr> -->
            </table>
        </div>
    </div>
</div>