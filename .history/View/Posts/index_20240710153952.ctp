<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post['Post']['id']; ?></td>
            <td>
                <a href="/posts/view/<?= $post['Post']['id'] ?>"><?= $post['Post']['title'] ?></a>
                <?= $this->Html->link(
                    $post['Post']['title'],
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
                ); ?>
            </td>
            <td><?= CakeText::truncate($post['Post']['created'], 10, '***') ?></td>
            <td><?= $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>