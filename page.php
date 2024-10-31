<div class="icon32" id="icon-themes"><br></div>
<div id="payolee-wp-page" class="wrap">

  <h2>Instructions</h2>

  <p>Accept recurring payments and one-time payments on your WordPress website by embedding Payolee payment forms
    into pages and posts via shortcodes.</p>

  <p>You’ll need a Payolee account to use this plugin.</p>

  <p>Sign Up, here: <a href="http://www.payolee.com/wordpress" target="_blank">http://www.payolee.com/wordpress</a></p>

  <p>Once you’ve created a payment form in your Payolee account, copy the payment form’s short code.</p>

  <p><img src="<?php echo plugin_dir_url(__FILE__); ?>/screenshot-1.png" alt="payolee.com use page"/></p>

  <h2>Adding a Shortcode</h2>

  <p>To add a payment form to your WordPress website using the shortcode: <code>[payolee]</code></p>

  <p>Just copy and paste your shortcode into the WordPress text editor where your blog content goes.</p>

  <p><img src="<?php echo plugin_dir_url(__FILE__); ?>/screenshot-2.png" alt="payolee.com use page"/></p>

  <h2>Developers</h2>

  <p>To add a payment form to your WordPress website using its shortcode:</p>

  <p><code>[payolee id="your_form_id"]</code></p>

  <ol>
    <li>The "id" attribute is for the Payolee form ID.</li>
    <li>The "type" attribute let you choose between button and form. Default is "form". To use button use this <code>type="button"</code></li>
    <li>The "button_content" attribute let you choose content of the button . Default is "Pay now". But you can put any text or image tag you like.
    	<br />
<br />

        <ul>
        	<li><strong>These are few predefined buttons we offer out of the box</strong></li>
        	<li>Pay Now &nbsp;: <code>button_content="pl_pay_now"</code></li>
        	<li>Buy Now &nbsp;: <code>button_content="pl_buy_now"</code></li>
        	<li>Donate  &nbsp;&nbsp;&nbsp;&nbsp;: <code>button_content="pl_donate"</code></li>
        	<li>Subscribe : <code>button_content="pl_subscribe"</code></li>
        </ul>
    </li>
    <li>The "tab" attribute should be set to false to open form on same page. Default is "true" , Which will open form in new tab when using <code>type="button"</code> </li>
  </ol>

</div>