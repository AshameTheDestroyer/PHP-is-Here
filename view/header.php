<header>
    <h1 id="logo">
        <a href="./">Home</a>
    </h1>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="hidden" name="theme" value="<?php echo $theme == "light" ? "dark" : "light" ?>" />
        <button>
            Toggle to
            <?php echo $theme == "light" ? "Dark" : "Light" ?>
        </button>
    </form>

    <nav>
        <ul>
            <?php
            foreach ($pages as $i => $page) {
                ?>
                <li onclick="this.querySelector('a').click()">
                    <a href="./<?php echo $page ?>">
                        <?php echo $page ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>