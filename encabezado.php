<?php require("config_main.php");?>
<div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/index.php" class="element"><span class="icon-home"></span> Inicio <sup>System 3.0</sup></a>
        <span class="element-divider"></span>

        <a class="element1 pull-menu" href="/index.php"></a>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">Ingresos</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/ingresos/index.php">
                            <span class="icon-paypal on-left"></span> Caja </a></li>
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/facturacion/index.php">
                            <span class="icon-credit-card on-left"></span> Facturación </a></li>
                    
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/index.php">Caja</a></li>
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/index.php">CxC</a></li>
                    <!--<li>
                        <a href="#" class="dropdown-toggle">General CSS</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="global.html">Global styles</a></li>
                            
                        </ul>
                    </li>-->
                    <li class="divider"></li>
                    <li><a href="ingresos/index.php">Cxp</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle"  href="#">Administración</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="tiles.html">Admisiones</a></li>
                    <li><a href="tiles.html">Configuración</a></li>
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/convenios/">Convenios</a></li>
                    <li><a href="tiles.html">Gestión</a></li>
                    <li><a href="protected/modules/ServiciosInstitucionales/modules/Sistemas/">Sistemas</a></li>
                    <li><a href="tiles.html">Soporte</a></li>
                    <li><a href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/graficas/">
                            <span class="icon-equalizer on-left"></span> 
                            Reportes
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">Operaciones</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="indexpaxcint.php">Pacientes internos</a></li>
                    <li><a href="indexpaxext.php">pacientes externos</a></li>
                </ul>
            </li>
            
            <li>
                <a class="dropdown-toggle"  href="#">Control Interno</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                   <li><a href="tiles.html">Inventarios</a></li>
                   <li><a href="tiles.html">Servicios</a></li>
                    <li><a href="tiles.html">Compras</a></li>
                </ul>
            </li>
            
        </ul>

        <div class="no-tablet-portrait no-phone">
            <a title="Solicitudes Pendientes" href="https://www.nuget.org/packages/Metro.UI.CSS/" class="element place-right"><span class="icon-warning"></span></a>
            <span class="element-divider place-right"></span>
            <a title="GitHub" href="https://github.com/olton/Metro-UI-CSS" class="element place-right"><span class="icon-mail-2"></span></a>
            <span class="element-divider place-right"></span>
            <a title="CSS3 validator" href="http://jigsaw.w3.org/css-validator/validator?uri=metroui.org.ua&profile=css3&usermedium=all&warning=no&vextwarning=" class="element place-right">
                <span class="icon-alarm"></span></a>
            <span class="element-divider place-right"></span>
            
            <div class="element place-right" title="GitHub Stars">
                <span class="icon-user-3"></span> 
                <span class="github-watchers">0</span></div>
            <!--<span class="element-divider place-right"></span>-->
            <!--<div class="element place-right" title="GitHub Forks"><span class="icon-share-2"></span> <span class="github-forks">0</span></div>-->
        </div>
    </div>
</div>
