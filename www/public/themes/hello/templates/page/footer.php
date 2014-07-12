<footer>
<div id="footer">
  <div class="container">

    <ul class="nav nav-justified">
      <?php
        $menu = $data['menu']['footer'];
        if($menu):
          foreach ($menu as $item): ?>
            <li><a href="<?php echo  $item["href"]; ?>"><?php echo  $item["title"]; ?></a></li>
          <?php
          endforeach;
        endif; ?>
    </ul>

    <div class="copyright">
      <p>Copyright &copy; <?php echo date('Y', time());?> All rights reserved. <a href="/"><?php echo $data['site']['full_name']; ?></a><br />
      Powered by <a href="https://github.com/arroyo/Erdiko" target="_blank">Edriko</a>. Code licensed under <a href="https://github.com/arroyo/Erdiko/blob/master/LICENSE" target="_blank">MIT</a></p>
    </div>
  
  </div>
</div>
</footer>