<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'button float-right', 'style' => 'margin-right: 10px;']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Mobile Number</th>
                    <th class="actions">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno = 1;
                foreach ($users as $user) :

                ?>
                    <tr>
                        <td><?= $sno++ ?></td>
                        <td><?= $user->name ?></td>

                        <td><?= $user->email ?></td>
                        <td><?= $user->age ?></td>
                        <td><?= $user->mobileno ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>