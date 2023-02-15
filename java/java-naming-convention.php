<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Naming Conventions, Camel Case | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,naming,convention,camel,case,variables,constant,methods,class,interface,packages">

    <meta name="Description" content="Camel case writing where the first letter is small and after that each word is capitalised.Naming convention improve readability of code,Variables follow camel case notation.Constants-should be UPPERCASE.methods should be verb,class interfaces-follow uppercamelcase,packages all lowercase.">

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
                <h1>Java Naming Conventions</h1>
                <h2>camel case:</h2>
                <p>Java follows camel case writing where the first letter is small and after that first letter of each word is capitalised.</p>
                <br>
                <p>Naming convention is recommended to improve the readability of the code.</p>
                <h3>Variables</h3>
                <ul class="bullets wall">
                    <li>white spaces are not allowed.</li>
                    <li>must not start with a digit and underscore.</li>
                    <li>name cannot be same as keywords.</li>
                    <li>should follow camel case notation.</li>
                    <li>should use meaningful names instead of single character.</li>
                </ul>
                <br>
                <pre class="code">
    int firstName;
    int roll_no;                </pre>
                <br>
                <p>To improve the readability even further <span class="coral">Underscore</span> can be used in between a large number.</p>
                <pre class="code"> int data = 1_000_000; </pre>
                <br>
                <h3>Constant Variables</h3>
                <ul class="bullets wall">
                    <li>All characters should be <span class="coral">Uppercase</span>.</li>
                    <li>Words are separated by underscore.</li>
                </ul>
                <pre class="code">
    static final int FULL_MARKS=100;                </pre>

                <br>

                <h3>Methods</h3>
                <ul class="bullets wall">
                    <li>first letter should be lowercase and after that each internal word's first letter is <span class="coral">capitalised</span>.</li>
                    <li>should be a <span class="coral">verb</span>.</li>
                </ul>
                <br>
                <pre class="code">
  void displayName(String s);
  void processData(int data);                </pre>

                <br>

                <h3>Class &amp; Interfaces</h3>
                <ul class="bullets wall">
                    <li>First letter of each word should be capitalised or in <span class="coral">UpperCamelCase</span>.</li>
                    <li>Names should be a <span class="coral">Noun</span>.</li>
                </ul>
                <pre class="code">
    public class Student
    public interface book                    </pre>

                <br>

                <h3>Packages</h3>
                <ul class="bullets wall">
                    <li>Contains all lowercase characters.</li>
                </ul>
                <pre class="code">   java.util or java.lang</pre>
                <br><br>









                <div class="next-prev">

                    <a href="./java-variables-and-classification.php" class="f-left">prev</a>
                    <a href="./java-type-casting.php" class="f-right">next</a>
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
