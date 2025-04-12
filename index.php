<?php include 'includes/header.php'; ?>
<?php include 'includes/expression.php'; ?>

    <div class="container border mt-5" style="max-width: fit-content; background: black; padding: 10px">
        <div class="container mb-2" style="background: black; height: 50px; color: white; text-align: right; font-size: 40px; font-weight: bolder; display: flex; justify-content: flex-end; align-items: center;" name="expression">
            <?php echo htmlspecialchars($expression); ?>
        </div>

        <form method="POST">
            <input type="hidden" name="expression" value="<?php echo htmlspecialchars($expression); ?>">

            <div class="d-grid gap-2 d-md-flex">
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: black; font-weight: 500; font-size: 25px; background:#a5a5a5;" name="button" value="C">C</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: black; font-weight: 500; font-size: 20px; background:#a5a5a5;" name="button" value="DEL">DEL</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: black; font-weight: 500; font-size: 25px; background:#a5a5a5;" name="button" value="%">%</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#ff9a00;" name="button" value="÷">÷</button>
            </div>

            <div class="d-grid gap-2 d-md-flex mt-2">
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="7">7</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="8">8</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="9">9</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#ff9a00;" name="button" value="*">x</button>
            </div>

            <div class="d-grid gap-2 d-md-flex mt-2">
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="4">4</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="5">5</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="6">6</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#ff9a00;" name="button" value="-">-</button>
            </div>

            <div class="d-grid gap-2 d-md-flex mt-2">
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="1">1</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="2">2</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value="3">3</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#ff9a00;" name="button" value="+">+</button>
            </div>
            
            <div class="d-grid gap-2 d-md-flex mt-2">
                <button class="btn" style="border-radius: 50px; width: 130px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232; text-align: left; padding-left: 8%" name="button" value="0">0</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#323232;" name="button" value=".">.</button>
                <button class="btn rounded-circle" style="width: 60px; height: 60px; color: white; font-weight: 500; font-size: 25px; background:#ff9a00;" name="button" value="=">=</button>
            </div>
        </div>
    </form>


<?php include 'includes/footer.php'; ?>