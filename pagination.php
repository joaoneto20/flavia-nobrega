<ul>
    <li>
        <?php if ($this->previous): ?>
        <a href="<?php echo $this->url(array('page' => $this->previous)); ?>">Anterior</a>
        <?php else: ?>
        <a href="javascript:void(0);">Anterior</a>
        <?php endif; ?>
    </li>
    <?php foreach ($this->pagesInRange as $page): ?>
    
        <?php if ($page != $this->current): ?>
        <li>
            <a href="<?php echo $this->url(array('page' => $page)); ?>"><?php echo $page; ?></a>
        </li>
        <?php else: ?>
        <li class="active">
            <a href="javascript:void(0);"><?php echo $page; ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
    
    <li>
        <?php if ($this->next): ?>
        <a href="<?php echo $this->url(array('page' => $this->next)); ?>">Proximo</a>
        <?php else: ?>
        <a href="javascript:void(0);">Proximo</a>
        <?php endif; ?>
    </li>
</ul>
