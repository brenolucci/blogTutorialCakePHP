<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <a href="/posts/view/<?= $post['Post']['id'] ?>"><?= $post['Post']['title'] ?></a>
                <?= $this->Form->input('ds_nome', [
                    'label' => __('Título'),
                    'type' => 'text',
                    'maxlength' => 100,
                    'required' => true,
                    'div' => [
                        'class' => 'form-control'
                    ]
                ]) ?>
                <br>
                <?php echo $this->Html->link(
                    $post['Post']['title'],
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
                ); ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>