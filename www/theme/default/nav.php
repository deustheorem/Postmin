

        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Postmin</a>
                </div> <!-- navbar-header -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
<?php buildNav($config->getConfig('modules')); ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?p=auth&amp;action=logout">Logout</a></li>
                    </ul>
                </div> <!-- nav-collapse -->
            </div> <!-- container -->
        </div> <!-- navbar -->

