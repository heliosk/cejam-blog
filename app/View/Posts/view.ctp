<p>
    <?php echo $this->Html->link('<- Voltar', array('controller'=>'posts', 'action'=>'index')); ?>
</p>
<h1>Detalhes do Post:</h1>
<p><b><?php echo $post['Post']['title']; ?></b></p>
<hr>
<p>
    <?php echo $post['Post']['body'] ?>
</p>
<hr>
<br/>
<small><i><?php echo "Autor: ".$author[$post['Post']['author_id']]; ?></i></small>
<br/>
<small><i>Tags:</i></small>
<?php foreach($post['Tag'] as $tag): ?>
<?php echo '<small><i>'.$tag['name'].'&nbsp;&nbsp;&nbsp;</small></i>'; ?>
<?php endforeach; ?>
<hr>
<br/>
<small><i><?php echo "Criado em: ".$post['Post']['created']; ?></i></small>
<br/>
<?php if($post['Post']['modified'] != ""): ?>
    <small><i><?php echo "Modificado em: ".$post['Post']['modified']; ?></i></small>
<?php endif; ?>
