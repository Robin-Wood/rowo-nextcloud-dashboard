<?php
script('robinwooddashboard', 'FileSaver');
script('robinwooddashboard', 'script');
style('robinwooddashboard', 'style');
?>

<div id="app">
	<div id="app-content">
		<div id="app-content-images">
			<div class="section" id="overviewPart"></div>
			<div class="section" id="detailPart">
				<div class="imageBox">
					<div class="card-up">
						<canvas class="finalImage">
						</canvas>
					</div>
					<div class="card-down">
						<span class="bezeichnung"></span>
						<button id="downloadMain" class="primary download">Herunterladen</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
