<!--START OF FOOTER -->
<nav class="footer">

        <p class="pull-right"> © 2014 <a href="http://www.magnusvaughan.com">Magnus Vaughan</a></p>
	<?php wp_footer(); ?>

</nav>
</div> <!-- /Full Page Container -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script>
    $(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
</script>
   </body>
</html>
<!--END OF FOOTER -->