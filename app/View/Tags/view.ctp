<p>
    <?php echo $this->Html->link('<- Voltar', array('controller'=>'tags', 'action'=>'index')); ?>
</p>
<h1>Detalhes da tag:</h1>
<p><b><?php echo $post['Tag']['title']; ?></b></p>
<hr>
<p>
    <?php echo $post['Tag']['body'] ?>
</p>
<hr>
<br/>
<small><i><?php echo "criada em: ".$post['Tag']['created']; ?></i></small>
<br/>
<?php if($post['Tag']['modified'] != ""): ?>
    <small><i><?php echo "modificada em: ".$post['Tag']['modified']; ?></i></small>
<?php endif; ?>
