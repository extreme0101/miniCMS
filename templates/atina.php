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
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="forms.html">Form elements <span>+</span></a>
                    <ul>
                        <li><a href="forms.html"><span>+</span> Form elements</a></li>
                        <li><a href="forms-wizard.html"><span>+</span> Form wizards</a></li>
                        <li><a href="forms-validate.html"><span>+</span> Form validation</a></li>
                        <li><a href="input-grid.html"><span>+</span> Input grid</a></li>
                    </ul>
                </li>
                <li><a href="charts.html">Charts & Graphs</a></li>
                <li><a href="#">Components <span>+</span></a>
                    <ul>
                        <li><a href="bootstrap-components.html"><span>+</span> Bootstrap elements</a></li>
                        <li><a href="grid.html"><span>+</span> Bootstrap grid</a></li>
                        <li><a href="gallery.html"><span>+</span> Gallery & thumbnails</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Icons</a></li>
                <li><a href="#">UI elements <span>+</span></a>
                    <ul>
                        <li><a href="ui-elements.html"><span>+</span> Main UI elements</a></li>
                        <li><a href="buttons.html"><span>+</span> Buttons</a></li>
                        <li><a href="messages.html"><span>+</span> Messages</a></li>
                        <li><a href="player.html"><span>+</span> UI HTML5 Player</a></li>
                    </ul>
                </li>
                <li><a href="tables.html">Tables</a></li>
                <li><a href="index.html">Error pages <span>+</span></a>
                    <ul>
                        <li><a href="403.html"><span>+</span> 403</a></li>
                        <li><a href="404.html"><span>+</span> 404</a></li>
                        <li><a href="405.html"><span>+</span> 405</a></li>
                        <li><a href="500.html"><span>+</span> 500</a></li>
                        <li><a href="502.html"><span>+</span> 502</a></li>
                        <li><a href="offline.html"><span>+</span> Offline page</a></li>
                    </ul>
                </li>
                <li><a href="index.html">Other pages <span>+</span></a>
                    <ul>
                        <li><a href="inbox.html"><span>+</span> Inbox</a></li>
                        <li><a href="icons.html"><span>+</span> Icons</a></li>
                        <li><a href="invoice.html"><span>+</span> Invoice</a></li>
                        <li><a href="login.html"><span>+</span> Login page</a></li>
                        <li><a href="typography.html"><span>+</span> Typograhpy</a></li>
                        <li><a href="calendar.html"><span>+</span> Calendar</a></li>
                        <li><a href="file-uploader.html"><span>+</span> File manager</a></li>
                    </ul>
                </li>
            </ul>

            <div class="containerNav">
                <ul class="noFluidNav">
                    <li class="active"><a href="index.html">Dashboard</a></li>
                    <li><a href="forms.html">Form elements <span>+</span></a>
                        <ul>
                            <li><a href="forms.html"><span>+</span> Form elements</a></li>
                            <li><a href="forms-wizard.html"><span>+</span> Form wizards</a></li>
                            <li><a href="forms-validate.html"><span>+</span> Form validation</a></li>
                            <li><a href="input-grid.html"><span>+</span> Input grid</a></li>
                        </ul>
                    </li>
                    <li><a href="charts.html">Charts & Graphs</a></li>
                    <li><a href="#">Components <span>+</span></a>
                        <ul>
                            <li><a href="bootstrap-components.html"><span>+</span> Bootstrap elements</a></li>
                            <li><a href="grid.html"><span>+</span> Bootstrap grid</a></li>
                            <li><a href="gallery.html"><span>+</span> Gallery & thumbnails</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html">Icons</a></li>
                    <li><a href="#">UI elements <span>+</span></a>
                        <ul>
                            <li><a href="ui-elements.html"><span>+</span> Main UI elements</a></li>
                            <li><a href="buttons.html"><span>+</span> Buttons</a></li>
                            <li><a href="messages.html"><span>+</span> Messages</a></li>
                            <li><a href="player.html"><span>+</span> UI HTML5 Player</a></li>
                        </ul>
                    </li>
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="#">Error pages <span>+</span></a>
                        <ul>
                            <li><a href="403.html"><span>+</span> 403</a></li>
                            <li><a href="404.html"><span>+</span> 404</a></li>
                            <li><a href="405.html"><span>+</span> 405</a></li>
                            <li><a href="500.html"><span>+</span> 500</a></li>
                            <li><a href="502.html"><span>+</span> 502</a></li>
                            <li><a href="#"><span>+</span> Offline page</a></li>
                        </ul>
                    </li>
                    <li class="last-child"><a href="index.html">Other pages <span>+</span></a>
                        <ul>
                            <li><a href="inbox.html"><span>+</span> Inbox</a></li>
                            <li><a href="icons.html"><span>+</span> Icons</a></li>
                            <li><a href="invoice.html"><span>+</span> Invoice</a></li>
                            <li><a href="login.html"><span>+</span> Login page</a></li>
                            <li><a href="typography.html"><span>+</span> Typograhpy</a></li>
                            <li><a href="calendar.html"><span>+</span> Calendar</a></li>
                            <li><a href="file-uploader.html"><span>+</span> File manager</a></li>
                            <li><a href="#"><span>+</span> Open third level</a>
                                <ul>
                                    <li><a href="#"><span>+</span> Third level</a></li>
                                    <li><a href="#"><span>+</span> Third level</a></li>
                                    <li><a href="#"><span>+</span> Third level</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
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
                        <li class="active"><a href="index.html"><i class="icon-white icon-th-large"></i> Dashboard</a></li>
                        <li><a href="#"><i class="icon-white icon-list"></i> Form elements</a>
                            <ul class="subMenu">
                                <li><a href="forms.html"><span>+</span> Form elements</a></li>
                                <li><a href="forms-wizard.html"><span>+</span> Form wizards</a></li>
                                <li><a href="forms-validate.html"><span>+</span> Form validation</a></li>
                                <li><a href="input-grid.html"><span>+</span> Input grid</a></li>
                            </ul>
                        </li>
                        <li><a href="charts.html"><i class="icon-white icon-signal"></i> Charts & Grahps</a></li>
                        <li><a href="#"><i class="icon-white icon-th"></i>  Components</a>
                            <ul class="subMenu">
                                <li><a href="bootstrap-components.html"><span>+</span> Bootstrap elements</a></li>
                                <li><a href="grid.html"><span>+</span> Bootstrap grid</a></li>
                                <li><a href="gallery.html"><span>+</span> Gallery & thumbnails</a></li>
                            </ul>
                        </li>
                        <li><a href="icons.html"><i class="icon-white icon-leaf"></i> Icons</a></li>
                        <li><a href="#"><i class="icon-white icon-heart"></i> UI elements</a>
                            <ul class="subMenu">
                                <li><a href="ui-elements.html"><span>+</span> Main UI elements</a></li>
                                <li><a href="buttons.html"><span>+</span> Buttons</a></li>
                                <li><a href="messages.html"><span>+</span> Messages</a></li>
                                <li><a href="player.html"><span>+</span> UI HTML5 Player</a></li>
                            </ul>
                        </li>
                        <li><a href="tables.html"><i class="icon-white icon-tasks"></i> Tables</a></li>
                        <li><a href="#"><i class="icon-white icon-ban-circle"></i> Error pages</a>
                            <ul class="subMenu">
                                <li><a href="403.html"><span>+</span> Error 403</a></li>
                                <li><a href="404.html"><span>+</span> Error 404</a></li>
                                <li><a href="405.html"><span>+</span> Error 405</a></li>
                                <li><a href="500.html"><span>+</span> Error 500</a></li>
                                <li><a href="502.html"><span>+</span> Error 502</a></li>
                                <li><a href="offline.html"><span>+</span> Offline page</a></li>
                            </ul>
                        </li>
                        <li><a href="typography.html"><i class="icon-white icon-align-justify"></i> Typograhpy</a></li>
                        <li><a href="calendar.html"><i class="icon-white icon-calendar"></i> Calendar</a></li>
                        <li><a href="file-uploader.html"><i class="icon-white icon-folder-close"></i> File manager</a></li>
                        <li><a href="#"><i class="icon-white icon-asterisk"></i> Other pages</a>
                            <ul class="subMenu">
                                <li><a href="inbox.html"><span>+</span> Inbox</a></li>
                                <li><a href="invoice.html"><span>+</span> Invoice</a></li>
                                <li><a href="login.html"><span>+</span> Login</a></li>
                            </ul>
                        </li>
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

                <div class="topBar">
                    <div class="topBarInner">
                        <ul class="breadcrumbs">
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/home5.png" alt=""></a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">UI elements <span class="arrow"></span></a>
                                <ul class="dropdown-menu pull-left">
                                    <li><a href="#">Main UI elements</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Buttons</a></li>
                        </ul>

                        <ul class="profile barButtons">
                            <li class="profile"><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""> Bernad Delic <span class="arrow"></span></a>
                                <ul>
                                    <div class="profileInfo clearfix">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        <div class="info">
                                            <h5>Bernad Delic</h5>
                                            <a href="#">user@something.com</a>
                                        </div>
                                    </div>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/random.png" alt=""> Basic settings</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/lock3.png" alt=""> User settings</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""> Preferences</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/lock3.png" alt=""> Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="barButtons">
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog.png" alt=""> Settings <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/random.png" alt=""> Basic settings</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/lock3.png" alt=""> User settings</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""> Preferences</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/pad.png" alt=""> New orders <strong>(5)</strong></a></li>
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> Monthly reports <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> <strong>January 2013</strong></a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> December 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> November 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> October 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> September 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> August 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> July 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> June 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> May 2012</a>
                                        <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/random.png" alt=""> View all reports</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/file.png" alt=""> Invoices <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/printer2.png" alt=""> Print latest invoice</li></a>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""> Invoice archive</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/plus.png" alt=""> Create new invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/envlope1.png" alt=""> Messages <strong>(3)</strong> <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/plus.png" alt=""> New message</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""> Inbox <strong>(3)</strong></a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/upload4.png" alt=""> Outbox</a></li>
                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""> Trash</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contentInner">

                    <div class="iWidgets" align="center">
                        <a href="#" rel="tipsyN" title="Add something" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/add.png" alt=""></a>
                        <a href="#" rel="tipsyN" title="Change grid" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/grid.png" alt=""></a>
                        <a href="#" rel="tipsyN" title="Love buttons" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/heart.png" alt=""></a>
                        <a href="#" rel="tipsyN" title="Upload something" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/upload.png" alt=""></a>
                        <a href="#" rel="tipsyN" title="Displal stats" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/graph4.png" alt=""></a>
                        <a href="#" rel="tipsyN" title="Love again" class="iWidget"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/24x24/heart.png" alt=""></a>
                    </div>

                    <div class="divider"><div><span></span></div></div>

                    <div class="sWidgets" align="center">
                        <div class="sWidget">
                            <div class="sparkContainer">
                                <span>Unique visitors</span>
                                <div class="sparklineBar"></div>
                            </div>
                            <span><a href="#">5.342 <i>unique visitors</a></i></span>
                        </div>
                        <div class="sWidget">
                            <div class="sparkContainer">
                                <span><a href="#">Monthly sales</a></span>
                                <div class="sparklineBar02"></div>
                            </div>
                            <span>$13.345,32 <i>earned</i></span>
                        </div>
                        <div class="sWidget">
                            <div class="sparkContainer">
                                <span>Registrations</span>
                                <div class="sparklineBar03"></div>
                            </div>
                            <span><a href="#">2.131 <i>new users</i></a></span>
                        </div>
                    </div>

                    <div class="divider"><div><span></span></div></div>

                    <div class="row-fluid">
                        <div class="span7">
                            <div class="widget">
                                <div class="tabbable">
                                    <div class="wTitle">
                                        <div class="wIcon">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/volume4.png" alt="">
                                        </div> 
                                        <h5>Dashboard chart</h5>
                                        <ul class="nav nav-tabs pull-right" id="dashboard-demo">
                                            <li class="active"><a data-toggle="tab" data-target="#chart01" href="#chart01">Revenue</a></li>
                                            <li><a data-toggle="tab" data-target="#chart02" href="#chart02">Users</a></li>
                                            <li><a data-toggle="tab" data-target="#chart03" href="#chart03">Live</a></li>
                                        </ul>
                                        <ul class="titleButtons">
                                            <li rel="tipsyS" title="Generating report..."><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/ajaxLoader/14x14/loader01.gif" alt=""></li>
                                            <li class="dropdown"><a rel="tipsyS" title="Options" class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""> Download statistic</a></li>
                                                    <li><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/plus.png" alt=""> Make new report</a></li>
                                                    <li class="last-child"><a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""> Delete all</a></li>
                                                </ul>
                                            </li>
                                            <li><a rel="tipsyS" title="Print statistic" href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/printer2.png" alt=""></a></li>
                                        </ul>
                                    </div>

                                    <div class="wContent">
                                        <div class="wContentInner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="chart01">
                                                    <div class="analytic">
                                                        <div class="chart" id="demoCharts01"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="chart02">
                                                    <div class="analytic">
                                                        <div class="chart" id="demoCharts02"></div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="chart03">
                                                    <div class="analytic">
                                                        <div class="chart" id="demoCharts03"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="span5">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt="">
                                    </div>
                                    <h5>Stuff members <span>(using scrollbar plugin)</span></h5>
                                </div>

                                <div class="wContent">
                                    <div class="memberScroll">
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Freddy Adams</a><br> <span>Web administrator</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bOlive">Online</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Olivia James</a><br> <span>Sales manager</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bAutumn">Away</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Mark Johan</a><br> <span>Web designer</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bMuddy">Offline</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Bernad Delic</a><br> <span>Director</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bMuddy">Offline</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Joshua Liebz</a><br> <span>Web designer</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bOlive">Online</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Antony Mark</a><br> <span>Web moderator</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bMuddy">Offline</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Selena Smith</a><br> <span>Web designer</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bOlive">Online</span>
                                            <div class="clearfix"></div>
                                        </div> 
                                        <div class="memberList">
                                            <a class="profileImage" href="#">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Maria Smith</a><br> <span>Web moderator</span></h5>
                                            <div class="doActions">
                                                <div class="btn-group ctrlGroup">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <span class="label bOlive">Online</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="wTitle">
                                    <h5>Gallery with options</h5>
                                </div>

                                <div class="wContent">
                                    <div class="wContentHeader noSearch">
                                        <select class="chosen">
                                            <option>Choose gallery</option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                        </select>

                                        <div class="inline checkPlus fRight">
                                            <a href="#" class="button sButton bAutumn">Some action</a>
                                        </div>
                                    </div>
                                    <div class="wContentInner" align="center">
                                        <ul class="thumbs" align="center">
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item users isotope-item">
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item users isotope-item">
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item users isotope-item">
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item users isotope-item">
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg" alt=""></a>
                                                <div class="actions" align="center">
                                                    <div class="actionsContainer">
                                                        <a href="#" class="ctrlButton removeImage"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                        <a class="ctrlButton fancybox" rel="group" href="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview01.jpg"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/magnifier.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wContentFooter" align="left">
                                        <label for="file" class="formButton"><input class="allImages" type="checkbox"> Select all images</label>
                                        <a href="#" class="button sButton bMuddy">Delete selected images</a>
                                        <div class="fRight noSearch clearfix">
                                            <label for="file" class="inline">Upload image:</label>
                                            <div class="inline">
                                                <input type="file" id="file" name="file">
                                            </div>
                                            <a href="#" class="button noShadow sButton bAtina">Start upload</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/list.png" alt="">
                                    </div>
                                    <h5>To do list <span>(using antiscroll plugin)</span></h5>
                                </div>

                                <div class="wContent">
                                    <div class="box-wrap antiscroll-wrap">
                                        <div class="box">
                                            <div class="antiscroll-inner">
                                                <ul>
                                                    <li class="doListHeader">
                                                        <div class="dateExp">Expire date</div>
                                                        <div class="doTitle">Task title</div>
                                                        <div class="actionTitle">Actions</div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#12643</span>
                                                            <i><strong>21 Jan 2013</strong></i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5><strong>Publish template</strong></h5>
                                                            <span class="label bMuddy">Important</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Preview" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#12647</span>
                                                            <i>23Dec 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5>Check disk space</h5>
                                                            <span class="label bAutumn">In progress</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#13121</span>
                                                            <i>14 Dec 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5 class="done">Ship orders</h5>
                                                            <span class="label bOlive">Finished</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#12625</span>
                                                            <i>05 Nov 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5 class="done">Publish idea</h5>
                                                            <span class="label bOlive">Finished</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#13513</span>
                                                            <i>17 Sep 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5 class="done">Make design</h5>
                                                            <span class="label bOlive">Finished</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#11153</span>
                                                            <i>19 Aug 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5 class="done">Get idea</h5>
                                                            <span class="label bOlive">Finished</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                    <li class="doList">
                                                        <div class="dateExp">
                                                            <span>#15874</span>
                                                            <i>09 July 2012</i>
                                                        </div>
                                                        <div class="doTitle">
                                                            <h5 class="done">Imagine template</h5>
                                                            <span class="label bOlive">Finished</span>
                                                        </div>
                                                        <div class="doActions">
                                                            <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                            <a href="#" rel="tipsyS" title="Options" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="span6">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/box2.png" alt="">
                                    </div>
                                    <h5>Monthly report <span>(without plugins)</span></h5>
                                </div>

                                <div class="wContent">
                                    <ul>
                                        <li class="reportHeader">
                                            <div class="reportID">ID number</div>
                                            <div class="reportMonth">Report date</div>
                                            <div class="actionTitle">Actions</div>
                                        </li>
                                        <li class="reportWidget">
                                            <div class="reportID">
                                                <span><strong>#12643</strong></span>
                                            </div>
                                            <div class="reportMonth">
                                                <h5><strong>January 2013</strong> <span>(01.01.13 - 31.01.13)</span></h5>
                                            </div>
                                            <div class="doActions">
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li class="reportWidget">
                                            <div class="reportID">
                                                <span>#12647</span>
                                            </div>
                                            <div class="reportMonth">
                                                <h5>December 2012 <span>(01.12.12 - 31.12.12)</span></h5>
                                            </div>
                                            <div class="doActions">
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li class="reportWidget">
                                            <div class="reportID">
                                                <span>#13121</span>
                                            </div>
                                            <div class="reportMonth">
                                                <h5>November 2012 <span>(01.11.12 - 30.11.12)</span></h5>
                                            </div>
                                            <div class="doActions">
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a>
                                            </div>
                                        </li>
                                        <li class="reportWidget">
                                            <div class="reportID">
                                                <span>#12711</span>
                                            </div>
                                            <div class="reportMonth">
                                                <h5>September 2012 <span>(01.10.12 - 31.10.12)</span></h5>
                                            </div>
                                            <div class="doActions">
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/download4.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="wContentFooter" align="right">
                                        <a href="#" class="button sButton bAtina">View all tasks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/list.png" alt="">
                                    </div>
                                    <h5>Media table</h5>
                                </div>

                                <div class="wContent">
                                    <table cellpading="0" cellspacing="0" width="100%" class="dTable mediaTable">
                                        <thead>
                                            <tr>
                                                <th align="center" width="40">Image</th>
                                                <th align="left">Username and email</th>
                                                <th align="center" width="60">User role</th>
                                                <th align="center" width="60">R. date</th>
                                                <th align="center" width="90">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center"><img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></td>
                                                <td align="left"><strong>admin</strong> (admin@example.com)</td>
                                                <td align="center">Premium</td>
                                                <td align="center">21.12.2012</td>
                                                <td align="center">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"><img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></td>
                                                <td align="left"><strong>user323</strong> (user323@example.com)</td>
                                                <td align="center">Exclusive</td>
                                                <td align="center">13.10.2011</td>
                                                <td align="center">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"><img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></td>
                                                <td align="left"><strong>guest</strong> (guest@example.com) <span rel="tipsyS" title="Susspended untill 21 February 2013" class="label bMuddy">susspended</span></td>
                                                <td align="center">Normal</td>
                                                <td align="center">15.12.2008</td>
                                                <td align="center">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"><img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></td>
                                                <td align="left"><strong>hell232</strong> (hell232@example.com)</td>
                                                <td align="center">Premium</td>
                                                <td align="center">18.07.2007</td>
                                                <td align="center">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"><img class="avatar" src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt=""></td>
                                                <td align="left"><strong>admin</strong> (admin@example.com)</td>
                                                <td align="center">Premium</td>
                                                <td align="center">21.12.2012</td>
                                                <td align="center">
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/cog2.png" alt=""></a>
                                                    <a href="#" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/calendar.png" alt="">
                                    </div>
                                    <h5>Dashboard calendar</h5>
                                </div>

                                <div class="wContent">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>

                        <div class="span6">
                            <div class="widget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt="">
                                    </div>
                                    <h5>Users with adress lines</h5>
                                </div>

                                <div class="wContent">
                                    <div class="adressScroll">
                                        <div class="formField">
                                            <div class="adressAvatar">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </div>
                                            <div class="adressField">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>

                                                <address>
                                                    <strong>Full Name</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                            </div>
                                            <div class="doActions fRight" align="right">
                                                <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" rel="tipsyS" title="Open profile" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                <div>
                                                    <span class="label bOlive">User online</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="formField">
                                            <div class="adressAvatar">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </div>
                                            <div class="adressField">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>

                                                <address>
                                                    <strong>Full Name</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                            </div>
                                            <div class="doActions fRight" align="right">
                                                <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" rel="tipsyS" title="Open profile" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                <div>
                                                    <span class="label bMuddy">User offline</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="formField">
                                            <div class="adressAvatar">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </div>
                                            <div class="adressField">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>

                                                <address>
                                                    <strong>Full Name</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                            </div>
                                            <div class="doActions fRight" align="right">
                                                <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" rel="tipsyS" title="Open profile" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                <div>
                                                    <span class="label bMuddy">User offline</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="formField">
                                            <div class="adressAvatar">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </div>
                                            <div class="adressField">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>

                                                <address>
                                                    <strong>Full Name</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                            </div>
                                            <div class="doActions fRight" align="right">
                                                <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" rel="tipsyS" title="Open profile" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                <div>
                                                    <span class="label bOlive">User online</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="formField">
                                            <div class="adressAvatar">
                                                <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/preview02.jpg" alt="">
                                            </div>
                                            <div class="adressField">
                                                <address>
                                                    <strong>Twitter, Inc.</strong><br>
                                                    795 Folsom Ave, Suite 600<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>

                                                <address>
                                                    <strong>Full Name</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                            </div>
                                            <div class="doActions fRight" align="right">
                                                <a href="#" rel="tipsyS" title="Remove task" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/trash.png" alt=""></a>
                                                <a href="#" rel="tipsyS" title="Open profile" class="ctrlButton"><img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/member2.png" alt=""></a>
                                                <div>
                                                    <span class="label bMuddy">User offline</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget lastWidget">
                                <div class="wTitle">
                                    <div class="wIcon">
                                        <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/img/icons/14x14/envlope1.png" alt="">
                                    </div>
                                    <h5>Chat box <strong>(Adam Smith)</strong></h5>
                                </div>
                                <div class="wContent noPadding">
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span class="client"><a href="#">Adam Smith</a>, <i>12 December 2012, 21:43</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span><strong>Administrator</strong>, <i>12 December 2012, 21:48</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span class="client"><a href="#">Adam Smith</a>, <i>12 December 2012, 22:03</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span class="client"><a href="#">Adam Smith</a>, <i>12 December 2012, 22:05</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span><strong>Administrator</strong>, <i>12 December 2012, 22:05</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="chatField">
                                        <div class="avatar">
                                            <img src="<?php echo PROTOCOL . DOMAIN . WWW_DIR; ?>/admin_themes/atina/preview/avatar.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <span class="client"><a href="#">Adam Smith</a>, <i>12 December 2012, 22:13</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                    <div class="chatFooter">
                                        <div class="row-fluid">
                                            <div class="span10">
                                                <input type="text" name="message" placeholder="Enter your message here...">
                                            </div>
                                            <div class="span2">
                                                <a href="#" class="sendMessage button sButton bAtina blockButton">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider"><div><span></span></div></div>

                    <div class="row-fluid">
                        <div class="span4">
                            <div class="widget">
                                <div class="wTitle">
                                    <h5>UI HTML5 player</h5>
                                </div>
                                <div class="wContent" align="center">
                                    <!-- Player start -->
                                    <div id="jquery_jplayer_3" class="jp-jplayer"></div>
                                    <div id="jp_container_3" class="jp-audio">
                                        <div class="jp-type-single">
                                            <div class="jp-gui jp-interface">
                                                <ul class="jp-controls">
                                                    <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                                    <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                                    <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                                    <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                                    <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                                    <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                                </ul>
                                                <ul class="jp-toggles">
                                                    <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                                    <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                                </ul>
                                                <div class="jp-progress">
                                                    <div class="jp-seek-bar">
                                                        <div class="jp-play-bar"></div>

                                                    </div>
                                                </div>
                                                <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                                </div>
                                                <div class="jp-current-time"></div>
                                                <div class="jp-duration"></div>
                                            </div>
                                            <div class="jp-title">
                                                <ul>
                                                    <li>Cro Magnon Man</li>
                                                </ul>
                                            </div>
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="../../get.adobe.com/flashplayer/default.htm" target="_blank">Flash plugin</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Player end -->
                                </div>
                            </div>
                        </div>

                        <div class="span8">
                            <div class="widget">
                                <div class="wTitle">
                                    <h5>UI HTML5 player</h5>
                                </div>
                                <div class="wContent">
                                    <!-- Player start -->
                                    <div id="jp_container_2" class="jp-video jp-video-360p">
                                        <div class="jp-type-single">
                                            <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                                            <div class="jp-gui">
                                                <div class="jp-video-play">
                                                    <a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
                                                </div>
                                                <div class="jp-interface">
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar">
                                                            <div class="jp-play-bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="jp-current-time"></div>
                                                    <div class="jp-duration"></div>
                                                    <div class="jp-title">
                                                        <ul>
                                                            <li>Incredibles Teaser</li>
                                                        </ul>
                                                    </div>
                                                    <div class="jp-controls-holder">
                                                        <ul class="jp-controls">
                                                            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                                            <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                                            <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                                            <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                                            <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                                            <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                                        </ul>
                                                        <div class="jp-volume-bar">
                                                            <div class="jp-volume-bar-value"></div>
                                                        </div>

                                                        <ul class="jp-toggles">
                                                            <li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
                                                            <li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
                                                            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                                            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-no-solution">
                                                <span>Update Required</span>
                                                To play the media you will need to either update your browser to a recent version or update your <a href="../../get.adobe.com/flashplayer/default.htm" target="_blank">Flash plugin</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Player end -->
                                </div>
                            </div>
                        </div>
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