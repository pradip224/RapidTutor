<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Interface, Creating Interfaces | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,interface,multiple,inheritance,creating">

    <meta name="Description" content="An interface is just like a class but with final variables & all abstract methods.Interfaces are used for multiple inheritance.Interfaces contain 100% abstract methods,all the methods in interfaces are by default with public abstract and variables with public static final.">

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
                <h1>Interfaces in Java</h1>

                <p>An interface is just like a class but with <b>final</b> variables &amp; all abstract methods.</p>
                <br>
                <p>Interfaces are created with the <span class="coral">interface</span> keyword.</p>
                <p>Interfaces are used in java for <b>multiple inheritance.</b></p>
                <br>
                <h4>Notes:</h4>
                <ul class="bullets bg">
                    <li>Interfaces contain 100% abstract methods, ie. methods without implementation.</li>
                    <li>all the methods in interfaces are by default with <span class="coral">public abstract</span> keyword.</li>
                    <li>all the variables are with <span class="coral">public static final</span>.</li>
                    <li>The class implements the interface must provide implementation of all its abstract methods or the class also has to be declared as abstract.</li>
                    <li>A class can implement any number of interfaces separated by commas(,).</li>
                    <li>We can't create <b>object</b> or <b>constructor</b> of interfaces.</li>
                </ul>
                <br>
                <h2>Creating Interface:</h2>
                <br>
                <h4>Syntax:</h4>
                <p>The syntax of a simple interface is:</p>
                <pre class="output">
  interface Interface_Name{
      field declaration;
      method declaration;
  }           </pre>
                <br>
                <h4>Example:</h4>
                <pre class="output">
   interface Test{
     public static final int temperature =100;
     public abstract void display();
     public abstract void add();
   } </pre>
                <br>
                <p>The <b>public static final</b> in case of fields or <b>public abstract </b> in case of methods are optional. If we don't even specify them they are by default there. </p>
                <br>
                <p>So, We can simply write:</p>
                <br>
                <pre class="output">
   int temperature =100;
   void display();
   void add(); </pre>
                <br>
                <br>
                <br>










                <div class="next-prev">

                    <a href="./java-importing-package.php" class="f-left">prev</a>
                    <a href="./java-implementing-and-extending-interfaces.php" class="f-right">next</a>
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
