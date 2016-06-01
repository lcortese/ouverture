<div id="test-module">
	<h1>Test Module</h1>
    <div class="content">
    	<p>Click a button to verify functionality.</p>
    </div>
    <nav>
    	<?php foreach($sections as $section) : ?>
    	<button type="button" value="<?php echo htmlspecialchars($section->id) ?>"><?php echo htmlspecialchars($section->title) ?></button>
    	<?php endforeach ?>
    </nav>
</div>