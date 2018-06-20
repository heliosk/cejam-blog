<p>
    <?php echo $this->Html->link('<- Voltar', array('controller'=>'authors', 'action'=>'index')); ?>
</p>
<h1>Detalhes do Autor:</h1>
<p><b><?php echo $author['Author']['name']; ?></b></p>
<hr>
<br/>
<small><i><?php echo "criado em: ".$author['Author']['created']; ?></i></small>
<br/>
<?php if($author['Author']['modified'] != ""): ?>
    <small><i><?php echo "modificado em: ".$author['Author']['modified']; ?></i></small>
<?php endif; ?>
