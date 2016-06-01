<div id="test-module">
    <div class="content">
    </div>
    <nav>
    	<?php foreach($sections as $section) : ?>
    	<button type="button" value="<?php echo htmlspecialchars($section->id) ?>"><?php echo htmlspecialchars($section->title) ?></button>
    	<?php endforeach ?>
    </nav>
</div>