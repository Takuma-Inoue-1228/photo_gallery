<?php /* Smarty version 2.6.30, created on 2020-12-23 18:54:14
         compiled from inc/env.html */ ?>
<?php $_from = $this->_tpl_vars['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loopname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loopname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
        $this->_foreach['loopname']['iteration']++;
?>
<?php if ($this->_tpl_vars['k'] == 'date'): ?>日付　　<?php elseif ($this->_tpl_vars['k'] == 'host'): ?>ホスト名<?php elseif ($this->_tpl_vars['k'] == 'addr'): ?>IPアドレス<?php elseif ($this->_tpl_vars['k'] == 'agent'): ?>ブラウザ<?php elseif ($this->_tpl_vars['k'] == 'referer'): ?>リファラ<?php endif; ?> : <?php echo $this->_tpl_vars['v']; ?>

<?php endforeach; endif; unset($_from); ?>

--- php mailform econosys system https://econosys-system.com/ ---
