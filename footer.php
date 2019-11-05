<!-- footer -->
<footer class="footer">
  <p class="footer-copyright"><small>&copy; 2019 mrp-style.com</small></p>
</footer>

</div><!-- /wrapper end -->

<?php if (is_home() || is_front_page()): ?>
<script>
function showMessage() {
    document.getElementById('name').value = "";
    document.getElementById('mail').value = "";
    document.getElementById('message').value = "";
    document.getElementById('submit').value = "お問い合わせありがとうございました";
}
</script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>