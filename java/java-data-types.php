<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>java data types,Java Strongly Typed Language | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,data,types,integer,float,char,boolean,byte,short,int,long">

    <meta name="Description" content="Java is strongly typed language because unlike other languages java demands for type declaration for every variable, expression etc.Java has several data types-Integer,Floating-point,Character,Boolean and Byte, Short,Int,Long">

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
                <h1>Java Data Types</h1>
                <br>
                <h3>Why java is strongly typed Language ?</h3>
                <br>
                <p>Java is strongly typed language because unlike other languages java demands for type declaration for every variable, expression etc.</p>
                <p>And also in java there is no automatic type conversion so everything has to be explicitly said and every assignment is checked for type compatibility, any mismatch would give error.</p>
                <br>
                <h3>Data Types in java:</h3>
                <p>Java has several data types.</p>
                <ul class="bullets">
                    <li>Integer</li>
                    <li>Floating-point</li>
                    <li>Character</li>
                    <li>Boolean</li>
                </ul>
                <br>

                <h3>Integer:</h3>
                <p>Integers are signed whole numbers( ie. 10,20,-100 etc). Java has four integer types</p>

                <ul class="bullets">
                    <li>Byte</li>
                    <li>Short</li>
                    <li>Int</li>
                    <li>Long</li>
                </ul>
                <br>
                <pre class="code">
 byte   8  bit   -128 to 127
 short  16 bit   -32,768 to 32,767
 int    32 bit   -2,147,483,648 to 2,147,483,647
 long   64 bit   –9,223,372,036,854,775,808 to 9,223,372,036,854,775,807</pre>
                <h4>Ex.</h4>
                <pre class="output">
    byte   a=5;   <span class="comment">// variable declaration</span>
    short  b=10;
    int    c=20;
    long   d=100;   </pre>

                <br>
                <h3>Floating Point:</h3>
                <p>Floating point types holds numbers with fractional parts (ie. 2.5, 0.05, -1.3 etc). Floating points are two types <span class="coral">single precision</span> and <span class="coral">double precision</span>.</p>

                <ul class="bullets">
                    <li>float</li>
                    <li>double</li>
                </ul>
                <pre class="code">
 float     32 bit       1.4e−045   to   3.4e+038
 double    64 bit       4.9e–324   to   1.8e+308 </pre>
                <h4>Ex.</h4>
                <pre class="output">
 float  f = 20.5f;  <span class="comment">//variable declaration</span>
 double pi = 3.14;   </pre>

                <br>
                <h3>Character:</h3>
                <p>character data type in java used to hold single character. It is declared with the <span class="coral">char</span> Keyword. It takes <span class="coral">2 bytes</span> or <span class="coral">16 bits</span> of storage.</p>
                <h4>Ex.</h4>
                <pre class="output">  char ch = 'A';</pre>
                <br>
                <h3>Boolean:</h3>
                <p>Boolean data types has two possible outcomes either <span class="coral">true</span> or <span class="coral">false</span>. All relational operators returns boolean type. </p>
                <h4>Ex.</h4>
                <pre class="output">  Boolean  isDone = true;</pre>
                <br>
                <br>
                <br>







                <div class="next-prev">

                    <a href="./java-tokens.php" class="f-left">prev</a>
                    <a href="./java-variables-and-classification.php" class="f-right">next</a>
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
