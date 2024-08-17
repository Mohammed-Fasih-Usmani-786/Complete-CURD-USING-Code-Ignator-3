<style>
    .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
        font-size: 13px;
        font-weight: 500;
        padding: 12px 0;
        position: relative;
        color: #fff;
    }
</style>

<header class="mdl-layout__header">
    <div class="mdl-layout__header-row" style="color:black;">
        <div class="mdl-layout-spacer"></div>
        <!-- Search-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>

            <div class="mdl-textfield__expandable-holder" style="color:red;">
                <input class="mdl-textfield__input" type="text" id="search" />
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
        </div>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification" data-badge="23">
            notifications_none
        </div>
        <!-- Notifications dropdown-->
        <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown" for="notification">
            <li class="mdl-list__item">
                You have 23 new notifications!
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">plus_one</i>
                    </span>
                    <span>You have 3 new orders.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <span class="label">just now</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--secondary">
                        <i class="material-icons">error_outline</i>
                    </span>
                    <span>Database error</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <span class="label">1 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">new_releases</i>
                    </span>
                    <span>The Death Star is built!</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <span class="label">2 hours</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">mail_outline</i>
                    </span>
                    <span>You have 4 new mails.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <span class="label">5 days</span>
                </span>
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
            </li>
        </ul>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="4">
            mail_outline
        </div>
        <!-- Messages dropdown-->

        <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown" for="inbox">
            <li class="mdl-list__item">
                You have 4 new messages!
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">SHOW ALL MESSAGES</button>
            </li>
        </ul>

        <div class="avatar-dropdown" id="icon">
            <span><?= $_SESSION['_admin']['name']; ?></span>

        </div>
        <!-- Account dropdawn-->

        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown" for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content" style="height:auto">
                    <div class="avatar-dropdown" id="icon">
                        <span><?= $_SESSION['_admin']['name']; ?></span>

                    </div>
                </span>
            </li>
            <li class="list__item--border-top"></li>

            <li class="list__item--border-top"></li>

            <a href="Adminpanal/Log-out">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary"></i>
                        Log out
                    </span>
                </li>
            </a>
        </ul>

    </div>
</header>

<div class="mdl-layout__drawer">
    <header>Admin Panel</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="Adminpanal">
                        <i class="material-icons" role="presentation">
                            dashboard
                        </i>
                        Dashboard
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Customer">
                        <i class="material-icons" role="presentation">
                            group
                        </i>
                        All Enquery
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Category">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        Category
                    </a>
                    <a class="mdl-navigation__link" href="Adminpanal/Add-category">
                        <i class="material-icons" role="presentation">

                        </i>
                        Add Category
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Product">
                        <i class="material-icons" role="presentation">
                            Products
                        </i>
                        Products
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Add-product">
                        <i class="material-icons" role="presentation">

                        </i>
                        Add Products
                    </a>
                    <a class="mdl-navigation__link" href="Adminpanal/Blogs">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        Blogs
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Slider">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        SLider
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Brand-icon">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        Brand Icon
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Cities">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        Cities
                    </a>
                    <a class="mdl-navigation__link" href="Adminpanal/Gallery">
                        <i class="material-icons" role="presentation">
                            receipt
                        </i>
                        Gallery
                    </a>

                    <a class="mdl-navigation__link" href="Adminpanal/Log-out">
                        <i class="material-icons" role="presentation">
                            lock
                        </i>
                        Log out
                    </a>

                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link">
                        <i class="material-icons" role="presentation">
                            link
                        </i><br>
                        IDEAL GROUP OF INDUSTRIES
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>