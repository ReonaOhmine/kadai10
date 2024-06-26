<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="./css_folder/style.css">
</head>

<header>
    <?php
    include('html_folder/indexhead.html');
    ?>

</header>

<body>
    <section class="entry2">
        <div>
            <div class="entry_title">
                <div class="membership">
                    <p>管理者ログイン</p>
                </div>
            </div>

            <form class="form" action="13_1manager_loginact.php" method="post" name="form">
                <label for="lid">
                    <div class="label_title">
                        <p>ID</p>
                        <p id="red">*</p>
                    </div>
                    <input type="text" id="id" size="30" name="lid" required />
                </label>

                <label for="lpw">
                    <div class="label_title">
                        <p>password</p>
                        <p id="red">*</p>
                    </div>
                    <input type="text" id="lpw" size="30" name="lpw" required />
                </label>
                <button>ログイン</button>
            </form>
        </div>
    </section>
</body>


<footer>
    <?php
    include('html_folder/indexfoot.html');

    ?>
</footer>

</html>