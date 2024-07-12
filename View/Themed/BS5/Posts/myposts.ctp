<h1>Blog posts</h1>
<div class="container">
    <p><?php echo $this->Html->link('Home', array('controller' => 'posts', 'action' => 'index')); ?></p>
    <p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
    <p><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></p>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
            <th scope="col">Created</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php
                    echo $this->Html->link(
                        $post['Post']['title'],
                        array('action' => 'view', $post['Post']['id'])
                    );
                    ?>
                </td>
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
                <td>
                    <?php echo $post['Post']['created']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<style>
    .container {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }
</style>