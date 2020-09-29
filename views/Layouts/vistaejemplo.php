<!DOCTYPE html>

<html>
	<head>

		<meta charset="UTF-8" >
		<title></title>

        <?php echo $css; ?>

	</head>
	<body>

        <div id="preloader">
            <div class="loader"></div>
        </div>

        <!-- Contenedor de la página:
        Widgets y contenido es a partir de este div -->
        <div class="page-container">

            <!-- Sidebar -->
            <div class="sidebar-menu">
                <?php echo $sidebar; ?>
            </div>

            <!-- Contenido de la página -->
            <div class="main-content">

                    <!-- Header -->
                    <div class="header-area">
                         <?php echo $header; ?>
                    </div>

                    
                    <!-- Contenido de la vista es previsto aquí -->            		

                    
                    <div class="offset-area">
                        <?php echo $rightbar?>
                    </div>

                    <footer>
                        <?php echo $footer; ?>
                    </footer>

            </div>

        </div>
        <!-- ./page-container end -->
		
            <?php echo $scripts; ?>

	</body>
</html>