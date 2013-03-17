<!-- admin01 application//-->
<html>
    <head>
        <title>miniCMS v3 Administration</title>
        <?php http_load_file('css'); ?>
        <?php http_load_file('js'); ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <link href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/css/ie8.css" rel="stylesheet">
          <script src="/js/html5shiv.js"></script>
          <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/respond/respond.min.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/ico/favicon.png">

        <script>
            //* hide all elements & show preloader
            document.documentElement.className += 'loader';
        </script>
    </head>
    <body>
        <div class="loading"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/ajaxLoader/loader01.gif" alt=""></div>

        <div class="mainContainer">

            <ul class="responsiveNav">
                <?php require_once TEMPLATE_DIR . 'admin/atina/admin_menu1.mbm'; ?>
            </ul>

            <div class="containerNav">
                <ul class="noFluidNav">
                    <?php require_once TEMPLATE_DIR . 'admin/atina/admin_menu2.mbm'; ?>
                </ul>
            </div>

            <header>
                <div>
                    <a href="#" class="logo"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/logo.png" alt=""></a>

                    <ul class="headerButtons">
                        <li class="respNav"><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/light/list.png" alt=""></a></a></li>
                        <li class="conta"><a href="#" class="changeContainer"><span class="container"></span></a></li>
                        <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/light/cog.png" alt=""></a></li>
                        <li class="layout"><a href="#" class="layoutChange"><span class="layoutLeft"></span></a></li>
                        <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/light/lock3.png" alt=""></a></li>
                    </ul>
                </div>
            </header>

            <div class="widgetBar">
                <div class="barInner">
                    <ul class="navigation">
                        <?php require_once TEMPLATE_DIR . 'admin/atina/admin_menu3.mbm'; ?>
                    </ul>

                    <div class="widgetBarContent">
                        <div class="divider"><div><span></span></div></div>
                        <div align="center">
                            <div class="pieChart">
                                <div class="percentage" data-percent="55"><span>55</span>%</div>
                                <span>New visits</span>
                            </div>
                            <div class="pieChart">
                                <div class="percentage02" data-percent="32"><span>32</span>%</div>
                                <span>New orders</span>
                            </div>
                        </div>
                    </div>

                    <div class="widgetBarContent">
                        <div class="divider"><div><span></span></div></div>

                        <div class="progressBox">
                            <span class="widgetBarTitle">Diskspace usage:</span>
                            <div class="green-progress spaceProgress"></div>
                            <span class="value vSpace"></span>
                        </div>

                        <div class="progressBox">
                            <span class="widgetBarTitle">File count:</span>
                            <div class="red-progress fileProgress"></div>
                            <span class="value fSpace"></span>
                        </div>

                        <div class="progressBox">
                            <span class="widgetBarTitle">Bandwidth limit:</span>
                            <div class="orange-progress bandwidthProgress"></div>
                            <span class="value bSpace"></span>
                        </div>

                        <div class="divider"><div><span></span></div></div>
                    </div>
                    <div class="widgetBarContent">
                        <span class="widgetBarTitle">Chat windows:</span>
                    </div>
                    <ul class="chatBar">
                        <li>
                            <a href="#" class="online">
                                <img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                <span class="name">Adam Smith</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="offline">
                                <img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                <span class="name">June Marry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="online">
                                <img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                <span class="name">Joshua Josh</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="away">
                                <img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                <span class="name">Mark Johan</span>
                            </a>
                        </li>
                    </ul>
                    <div class="widgetBarContent">
                        <div class="divider"><div><span></span></div></div>
                        <div id="date"></div>
                        <div class="divider"><div><span></span></div></div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="styleChoose">
                    <a href="#" class="pullStyle"><span><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></span></a>
                    <div class="colors">
                        <ul id="styling">
                            <li><a href="javascript:void(0)" title="noise-black" id="noise-black"></a></li>
                            <li><a href="javascript:void(0)" title="noise-red" id="noise-red"></a></li>
                            <li><a href="javascript:void(0)" title="noise-green" id="noise-green"></a></li>
                            <li><a href="javascript:void(0)" title="noise-orange" id="noise-orange"></a></li>
                            <li><a href="javascript:void(0)" title="noise-blue" id="noise-blue"></a></li>
                            <li><a href="javascript:void(0)" title="noise-purple" id="noise-purple"></a></li>
                            <li><a href="javascript:void(0)" title="noise-yellow" id="noise-yellow"></a></li>
                        </ul>
                    </div>
                    <div class="settings">
                        <div class="navStyle">
                            <label class="formButton"><input type="radio" name="check" id="lnav" checked="checked"> <span>Left navigation</span></label>
                            <label class="formButton"><input type="radio" name="check" id="tnav"> <span>Top navigation</span></label>
                        </div>
                        <div class="patternchange">
                            <span>Container pattern:</span>
                            <ul class="containerPattern">
                                <li><a href="#" id="pattern01"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern01.png" alt=""></a></li>
                                <li><a href="#" id="pattern02"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern02.png" alt=""></a></li>
                                <li><a href="#" id="pattern03"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern03.png" alt=""></a></li>
                                <li><a href="#" id="pattern04"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern04.png" alt=""></a></li>
                                <li><a href="#" id="pattern05"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern05.png" alt=""></a></li>
                                <li><a href="#" id="pattern06"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern06.png" alt=""></a></li>
                                <li><a href="#" id="pattern07"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern07.png" alt=""></a></li>
                                <li><a href="#" id="pattern08"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern08.png" alt=""></a></li>
                                <li><a href="#" id="pattern09"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/patterns/pattern09.png" alt=""></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <!--                huudasnii zam uzuuleh bolon busad tuslah menu nuud-->
                <?php require_once TEMPLATE_DIR . 'admin/atina/content_nav1.mbm'; ?>

                <div class="contentInner">

                    <div class="row-fluid">
                            <?php load_template('body'); ?>
                    </div>

                </div>

            </div>
        </div>

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/jquery-1.8.3.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/ui/jquery-ui-1.9.2.custom.js"></script>

        <!-- flot plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/flot/excanvas.min.js"></script>    
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/flot/jquery.flot.js"></script>    
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/flot/jquery.flot.orderBars.js"></script>

        <!-- Jquery form wizard -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/formWizard/jquery.form.js"></script>    
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/formWizard/jquery.validate.js"></script>    
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/formWizard/bbq.js"></script>  
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/formWizard/jquery.form.wizard.js"></script>

        <!-- antiscroll plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/scrollbar/jquery.mCustomScrollbar.js"></script>

        <!-- fullcalendar plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/fullcalendar/fullcalendar.js"></script>

        <!-- tipsyS plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/tipsy/jquery.tipsy.js"></script>

        <!-- fancybox plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/fancybox/jquery.fancybox.pack.js"></script>

        <!-- uniform plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/uniform/jquery.uniform.js"></script>

        <!-- Jquery dataTable -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/dataTable/jquery.dataTables.js"></script>

        <!-- uniform plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/sparklines/jquery.sparkline.js"></script>

        <!-- chosen plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/chosen/chosen.jquery.js"></script>

        <!-- cookie plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/cookie/jquery.cookie.js"></script>

        <!-- jplayer plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/jplayer/jquery.jplayer.min.js"></script>

        <!-- mask plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/mask/jquery.maskedinput-1.3.js"></script>

        <!-- easypiechart plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/easypiechart/jquery.easy-pie-chart.js"></script>

        <!-- globalize plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/globalize/globalize.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/globalize/cultures/globalize.culture.de.js"></script>

        <!-- jplayer plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/jplayer/jquery.jplayer.min.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/jplayer/jplayer.playlist.min.js"></script>

        <!-- ibutton plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/ibutton/jquery.ibutton.js"></script>

        <!-- daterangepicker plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/dateRangepicker/date.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/dateRangepicker/daterangepicker.jQuery.js"></script>

        <!-- antiscroll plugin -->
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/antiscroll/jquery-mousewheel.js"></script>    
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/antiscroll/antiscroll.js"></script>    

        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/bootstrap.min.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/application.js"></script>      

        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/general.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/forms.js"></script>
        <script src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/js/dashboard.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout('$("html").removeClass("loader")', 1000);
            });
        </script>

        <?php load_template('body'); ?>
    </body>
</html>