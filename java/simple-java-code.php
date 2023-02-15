<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Writing a Simple Java Program | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,simple,program,code,run,compile">

    <meta name="Description" content="Java is an Object Oriented Programming Language so everything in java is contained inside a class even the main method too.Now to compile the code in cmd by the command javac Hello.java ,Now run the code by command java Hello">

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
                <h1>Writing a Simple Java Program</h1>
                <p>Java is an Object Oriented Programming Language so everything in java is contained inside a class even the main method too. </p>
                <br>
                <p>Let's write a sample <span class="coral">"Hello World"</span> program and try to understand the basics of java programming.</p>


                <pre class="prettyprint code linenums=1">
    class Hello{
    public static void main(String args[]){
        System.out.println("Hello World!");
        
        }
    }
</pre>
                <br>
                <h3>Compile &amp; Run the code:</h3>
                <p>Now we've written the code and saved as <span class="coral">Hello.java</span>. Lets Run it using the CMD(command prompt).</p>
                <br>
                <img src="../images/cmd.png" alt="cmd" width="600">
                <p>Open CMD and go to the directory where the java file you written is located.</p>
                <br><br>
                <h4>Compile:</h4>
                <img src="../images/compile.png" alt="compile" width="600">
                <p>Now compile the code by typing <span class="coral">javac Hello.java</span></p>
                <br><br>
                <h4>Run:</h4>
                <img src="../images/run.png" alt="run" width="600">
                <p>Now run the code by typing <span class="coral">java Hello</span> and below you can see the output of the code.</p>
                <br>
                <h4>Output:</h4>
                <pre class="output"> Hello World
</pre>
                <br>

                <h4>Explanation:</h4>
                <p>In the above code we have a class called "Hello"</p>
                <p>Inside the class we have the main method <span class="coral">"public static void main(String args[])"</span> where the java progam execution starts from. </p>
                <p>Inside the main we've the <span class="coral">println(" ")</span> method of the System class which prints <span class="coral">Hello World!</span> to the console.</p>

                <br><br>








                <div class="next-prev">

                    <a href="./java-setup-environment.php" class="f-left">prev</a>
                    <a href="./java-program-structure.php" class="f-right">next</a>
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
