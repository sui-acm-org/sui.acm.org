<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <?php
    include("common/head.html");
    ?>

	<body>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Main -->
			<div id="main">
				<div class="inner">

					<!-- Header -->
				    <?php
                    include("common/header.html");
                    ?>
                    
                    <!-- Content -->
				    <?php
                    include("content/".basename(__FILE__, ".php").".php");
                    ?>

				</div>
			</div>

			<!-- Sidebar -->
            <?php
            include("common/sidebar.html");
            ?>

		</div>

		<!-- Scripts -->
        <?php
        include("common/scripts.html");
        ?>

	</body>
</html>
