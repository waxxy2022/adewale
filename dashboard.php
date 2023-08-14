<div class="dashboard">
    <?php
    if (isset($_SESSION['username'])) {
        echo "Welcome  " . $_SESSION['username'];
        
        ?>
        <div style="height: 10px"></div>
    <div>
        <a href="logout.php"><input type="button" class="btn-logout"
            value="Logout"></a>

    </div>
    <div>
        <a href="./save recipes/index.html" > PROCEED TO  SAVE YOUR FAVOURITE RECIPE  </a>
    </div>
        <?php
    }
    ?>
</div>