<h1>Blog Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <!-- Here's where we loop through our $users array, printing out User info -->

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td><?php echo $user['User']['username']; ?></td>
            <td><?php echo $user['User']['role']; ?></td>
            <td><?php echo $user['User']['created']; ?></td>
            <td><?php echo $user['User']['created']; ?></td>
            <td>
                <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
                ?>
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
                ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>