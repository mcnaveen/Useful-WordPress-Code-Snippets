//Checkout Testimonial for Quora Plugin (Desktop)
add_action( 'woocommerce_after_checkout_billing_form', 'quora_plugin_testimonial_desktop', 25 );
function quora_plugin_testimonial_desktop() {
   $product_id = 14;
   $product_cart_id = WC()->cart->generate_cart_id( $product_id );
   $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
   if ( $in_cart ) {
      ?>
<div class="d-test">
<h3>What other experts are saying...</h3>
<div id="testimonials"></div>
</div>

<script>
function shuffle(a) {
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

var arr = [
		"<p><em>'Comment 1'</em> - <strong>Name 1</strong></p>",
        "<p><em>'Comment 2'</em> - <strong>Name 2</strong></p>",
        "<p><em>'Comment 3'</em> - <strong>Name 3</strong></p>",
        "<p><em>'Comment 4'</em> - <strong>Name 4</strong></p>",
        "<p><em>'Comment 5'</em> - <strong>Name 5</strong></p>",
        "<p><em>'Comment 6'</em> - <strong>Name 6</strong></p>",
        "<p><em>'Comment 7'</em> - <strong>Name 7</strong></p>",
        "<p><em>'Comment 8'</em> - <strong>Name 8</strong></p>",
        "<p><em>'Comment 9</em> - <strong>Name 9</strong></p>"
]

/* note: the javascript that updates the div had to be near the end
 * of the body to work (probably just after the div)
 */
shuffle(arr);
document.getElementById("testimonials").innerHTML = arr.slice(0,3).join('');
</script>
   <?php
   }
}

//Checkout Testimonial for Quora Plugin (Mobile)
add_action( 'woocommerce_review_order_after_submit', 'quora_plugin_testimonial_mobile', 25 );
function quora_plugin_testimonial_mobile() {
   $product_id = 14;
   $product_cart_id = WC()->cart->generate_cart_id( $product_id );
   $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
   if ( $in_cart ) {
      ?>
<div class="m-test">
<h3>What other experts are saying...</h3>
<div id="testimonials-m"></div>


<script>
function shuffle(a) {
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

var arr = [
		"<p><em>'Comment 1'</em> - <strong>Name 1</strong></p>",
        "<p><em>'Comment 2'</em> - <strong>Name 2</strong></p>",
        "<p><em>'Comment 3'</em> - <strong>Name 3</strong></p>",
        "<p><em>'Comment 4'</em> - <strong>Name 4</strong></p>",
        "<p><em>'Comment 5'</em> - <strong>Name 5</strong></p>",
        "<p><em>'Comment 6'</em> - <strong>Name 6</strong></p>",
        "<p><em>'Comment 7'</em> - <strong>Name 7</strong></p>",
        "<p><em>'Comment 8'</em> - <strong>Name 8</strong></p>",
        "<p><em>'Comment 9</em> - <strong>Name 9</strong></p>"
]

/* note: the javascript that updates the div had to be near the end
 * of the body to work (probably just after the div)
 */
shuffle(arr);
document.getElementById("testimonials-m").innerHTML = arr.slice(0,3).join('');
</script>
</div>
	<?php
   }
}
