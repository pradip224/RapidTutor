<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Type Casting | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,type,casting,automatic,explicit,no loss">

    <meta name="Description" content="Type casting refers to casting a data type to another data type for compatibility.Automatic casting where java automatically does the conversion without explicitly specifying that.casting with no loss of data when source type is smaller than target type">

    <?php include '../modules/head-links.php'; ?>

</head>

<body>
    <!--    SIDE-NAV   -->
    <?php include './j-module/side-nav.php'; ?>


    <!--    OPAQUE  -->
    <?php include '../modules/opaque.php'; ?>


    <!--    TOP-NAV-FIXED-->
    <?php include '../modules/top-nav.php'; ?>


    <!--MAIN-WRAPPER-->
    <div class="main-wrapper">

        <!--        BRAND-TOP         -->
        <?php include '../modules/brand-top.php'; ?>




        <!--WRAPPER-->
        <div class="wrapper">


            <!--MAIN-->

            <div class="main">
                <br>
                <h1>Java Type Casting</h1>
                <p>Type casting refers to casting a data type to another data type for compatibility.</p>
                <br>
                <h3>Automatic casting</h3>
                <p>Automatic type casting is where java automatically does the conversion without the need of explicitly specifying that.</p>
                <br>
                <p>for automatic type conversion they need to be</p>
                <ul class="bullets wall">
                    <li>type compatible</li>
                    <li>target type is larger than source type.</li>
                </ul>
                <pre class="code">
    byte b=10;             //automatic casting
    int x=b;                </pre>

                <br>

                <h3>Explicit Casting</h3>
                <p>Here we Explicitly specify to cast between incompatible types.</p>
                <pre class="code">
    double weight = 60.5;    //Explicit casting
    int wt = (int)weight;   </pre>
                <br>

                <h3>No Loss Casting</h3>
                <p>We can achieve casting with no loss of data when source type is smaller than target type.</p>
                <pre class="output">byte =&gt;short =&gt;int =&gt;long =&gt;float =&gt;double</pre>
                <p>If we cast from left data types to the right side data types then there will be no loss of data.</p>
                <br><br>









                <div class="next-prev">

                    <a href="./java-naming-convention.php" class="f-left">prev</a>
                    <a href="./java-if-statement.php" class="f-right">next</a>
                </div>

                <div class="main-bottom">
                </div>

            </div>



            <!--RIGHT-SIDE-->
            <div class="right-side">Right Side</div>
        </div>


        <!--        FOOTER-->
        <?php include '../modules/footer.php'; ?>




    </div>



</body>

</html>
