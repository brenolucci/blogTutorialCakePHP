<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<h1>Blog posts</h1>
<div class="container">
    <?php if (CakeSession::read('Auth.User')): ?>
        <p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
        <p><?php echo $this->Html->link('My Posts', array('controller' => 'posts', 'action' => 'myposts')); ?></p>
        <p><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></p>
    <?php else: ?>
        <p><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></p>
    <?php endif ?>
</div>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- Here's where we loop through our $posts array, printing out post info -->

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

</table>

<style>
    .container {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }
</style>