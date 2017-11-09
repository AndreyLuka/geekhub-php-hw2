<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GeekHub PHP HoweWork#2 (Author: Andrey Lukashenko)</title>
</head>
<body>
    <main>
        <?php if (isset($isSubmit)): ?>

            <table>
                <tr>
                    <th>Your info:</th>
                </tr>
                <tr>
                    <td>Browser:</td>
                    <td><?php echo $browserName . ' ' . $browserVer; ?></td>
                </tr>
                <tr>
                    <td>OS:</td>
                    <td><?php echo $osName; ?></td>
                </tr>
                <tr>
                    <td>Language:</td>
                    <td><?php echo $langName; ?></td>
                </tr>
                <tr>
                    <td>Time Zone:</td>
                    <td><?php echo $timeZone; ?></td>
                </tr>
                <tr>
                    <td>IP:</td>
                    <td><?php echo $ip; ?></td>
                </tr>
            </table>

            <br>
            <input type="button" value="Go back" onclick="history.go(-1)">

        <?php else: ?>

            <h1>Detect My..</h1>
            <p>Please click button "Detect" and you will see information about your:</p>
            <ul>
                <li>Browser</li>
                <li>OS</li>
                <li>Language</li>
                <li>Time Zone</li>
                <li>IP</li>
            </ul>

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" name="submit" value="Detect">
            </form>

        <?php endif; ?>
    </main>

    <footer>
        <br>
        <p>Author: Andrey Lukashenko</p>
    </footer>
</body>
</html>