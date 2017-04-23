<footer>
	
	<p class="text-center">
		&copy; Todos los derechos reservados <?=date('Y');?>
	</p>

</footer>
<script src="<?=$assets_js?>jquery-3.1.1.js"></script>
<script src="<?=$assets_js?>bootstrap.min.js"></script>
<script src="<?=$assets_js?>jquery.form-validator.min.js"></script>
<script src="<?=$assets_js?>jquery.form_validator.es.js"></script>
<script src="<?=$assets_js?>material.min.js"></script>
<script src="<?=$assets_js?>material-kit.js"></script>
<script>
	$(document).ready(function(){
		$('.btn-upload').click(function() {
			$('#upload').click();
		});
        $.validate({
          form: '#frm',
          language: es
        });
        $('.btn-delete').click(function(event) {
          if (confirm('Realmente desea eliminar este elemento?')) {
            $id = $(this).attr('data-delete');
            window.location.replace('delete.php?id='+$id);
          }
        });
        $('.shopping-nav').click(function(event) {
          $('.panel.panel-default').toggleClass('cart-show fadeInRight');
        });
        $('.add-to-cart').click(function(event) {
          $('.shopping-nav').children().children().addClass('shake');
          setTimeout(function(){
            $('.shopping-nav').children().children().removeClass('shake');            
          },1000);
        });

        // Shopping Cart
        var addToCartBtn = $('.add-to-cart');
        var shoppingList = $('#shopping-list');
        var cartTotal    = $('#total');

        addToCartBtn.on('click', function(event){
          event.preventDefault();
          addToCart($(this));
        });

        shoppingList.on('click', '.delete-item', function(event){
          event.preventDefault();
          removeProduct($(event.target).parents('.item'));
        });

        function addToCart(trigger) {
          addProduct(trigger);

          updateCartTotal(trigger.data('price'), true);
        }

        function addProduct(trigger) {
          var productName = trigger.parent().prev().prev().prev().text();
          var productId   = trigger.parent().prev().prev().text();
          var productPrice   = trigger.data('price');
          
          var productAdded  = $('<li class="item animated slideInRight" data-itemp="'+productPrice+'" data-product="'+productId+'">'+productName+'<span></span><span class="delete-item">Borrar</span></li>');
          shoppingList.prepend(productAdded);
        }

        function removeProduct(item) {
          item.remove();
          var p = Number(item.data('itemp'));
          updateCartTotal(p, false);
        }

        function updateCartTotal(price, bool) {
          bool ? cartTotal.text( Number(cartTotal.text()) + Number(price) ) : cartTotal.text( Number(cartTotal.text()) - Number(price) );
        }

        // Add to 'compras' table
        $('.btn-buy').click(function(event) {
            var items = [];
            $(".item").each(function(index, item) { 
              items.push($(this).attr('data-product'));
            });
            alert(items);
            $.post('customer/shopping.php', {
              data: JSON.stringify(items),
              contentType: 'application/json',
            });            
        });


    });
</script>
	
</body>
</html>