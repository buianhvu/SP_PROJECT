<html>
    <button onclick="location.href='index.php?controller=product&action=display';">Back to products page</button>
    <div id="product-ict" style="display:none;">
        <?PHP echo htmlspecialchars($result);?>
    </div>
    <div class="row">

		<a class="cart-icon">
			<span id="totalItems">0</span>
			<ul class="cart"></ul>
		</a>
	

		<div class="productosWrapper large-12 columns">
		</div>

	</div>
</html>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?ver=1.11.2'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/spin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.js'></script>
<script src="view/js/myscript.js"></script>

