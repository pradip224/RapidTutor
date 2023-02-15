<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Tokens | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,token,keyword,identifier,operator,instanceof,separator,literal,escape,sequence">

    <meta name="Description" content="Tokens are the smallest program element meaningful to the compiler,Token include- Keywords, Identifiers,Operators,Seperators,Literals.Java has 50 reserve keywords.Identifiers are the names given to the variables,Operators are symbols used to perform arithmetic or logical operation">

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
                <h1>Java Tokens:</h1>
                <p>Java <span class="coral">Tokens</span> are the smallest program element meaningful to the compiler.</p>
                <p>Token includes - Keywords, Identifiers, Operators, Seperators, Literals.</p>
                <br>
                <h3>Keywords:</h3>
                <p>Java has 50 reserve <span class="coral">keywords</span> which can not be used as names for variables, methods and classes.</p>
                <br>
                <img src="../images/java-keywords.png" alt="keywords" width="500">
                <br><br>

                <h3>Identifiers:</h3>
                <p class="wall"><span class="coral">Identifiers</span> are the names given to the variables, methods and classes by the programmer.</p>
                <p>There are few rules for naming the Identifiers.</p>
                <br>
                <h4>Rule:</h4>
                <p class="wall">1. They must not begin with digits. <br>
                    2. They can contain alphabets, digits, underscore and dollar signs.</p>
                <h4>Ex.</h4>
                <pre class="output">    int number=10;</pre>
                <p>Here <span class="coral">number</span> is an identifier.</p>
                <br><br>
                <h3>Operators:</h3>

                <p class="wall"><span class="coral">Operators</span> are symbols used to perform some sort of arithmetic or logical operations on the data or variables in the program.</p>
                <br>
                <h4>i) Arithmetic Operators:</h4>
                <p>The arithmetic operators are </p>
                <pre class="code">
   <span class="coral">+</span>   Addition or Unary Plus
   <span class="coral">-</span>   Subtraction or Unary minus
   <span class="coral">*</span>   Multiplication
   <span class="coral">/</span>   Division
   <span class="coral">%</span>   Modulo Division Operator </pre>
                <br>

                <h4>ii) Relational Operators:</h4>
                <p>Relational operator returns either <span class="coral">true</span> or <span class="coral">false</span> based on the two operands along the two sides of the operator.</p>
                <pre class="code">
 <span class="coral">&lt;</span>     Less than
 <span class="coral">&lt;=</span>    Less than or equal to
 <span class="coral">&gt;</span>     Greater than
 <span class="coral">&gt;=</span>    Greater than or equal to 
 <span class="coral">==</span>    Equals to
 <span class="coral">!=</span>    Not equals to</pre>
                <br>
                <h4>iii) Logical Operators:</h4>
                <p><span class="coral">Logical</span> operators are used to perform logical <span class="coral">AND , OR &amp; NOT</span> operation between multiple conditions.</p>
                <pre class="code">
 <span class="coral">&amp;&amp;</span>   Logical AND
 <span class="coral">&#124;&#124;</span>   Logical OR
 <span class="coral">&#33;</span>    Logical NOT</pre>
                <br>
                <h4>iv) Assignment Operator:</h4>
                <p><span class="coral">Assignment</span> operator assigns the right side value to the left side variable. Generally the right side maybe a literal or another vaiable but the left side always has to be a variable.</p>
                <pre class="code">
    a=10;
    b+=10; </pre>
                <br>
                <h4>v) Increment and Decrement Operator:</h4>
                <p>This operator used to increment or decrement a variable by one.</p>
                <pre class=" code ">
 a++;     //same as  a=a+1;
 b=++a;   //it increments first then assign to b
 a--;     //same as  a=a-1;
 b=--a;   //it decrements first then assign to b</pre>
                <br>
                <h4>vi) Conditional Operator:</h4>
                <p>Conditional Operator also called <span class="coral">ternary</span> operator used to evaluate between two values based on a given condtion.</p>
                <pre class="code">
    (condition)? exp1:exp2; </pre>
                <p>If condition is <span class="coral">true</span>
                    then returns the value of exp1 but if the condition is <span class="coral">false</span> then returns the value of exp2.</p>
                <br>
                <h4>vii) Bitwise Operator:</h4>
                <p>Bitwise operator used for manipulation of data at bit level.</p>
                <pre class="code">
   <span class="coral">~</span>     bitwise one's complement
   <span class="coral">&amp;</span>     bitwise AND
   <span class="coral">&#124;</span>     bitwise OR
   <span class="coral">^</span>     bitwise XOR
   <span class="coral">&lt;&lt;</span>    Left shift
   <span class="coral">&gt;&gt;</span>    right shift
   <span class="coral">&gt;&gt;&gt;</span>   right shift with zero fill
   <span class="coral">&amp;=</span>    AND Assignment
   <span class="coral">&#124;=</span>    OR Assignment
   <span class="coral">^=</span>    XOR Assignment
   <span class="coral">&gt;&gt;=</span>   shift right Assignment
   <span class="coral">&gt;&gt;&gt;=</span>  shift right zero fill Assignment
   <span class="coral">&lt;&lt;=</span>   shift left Assignment </pre>


                <br>

                <h4>viii) Other Operators:</h4>
                <br><br>
                <h3><span class="coral">Instanceof:</span></h3>
                <p>This operator used to find whether an object is instance of a particular class or not. It returns either <span class="coral">true</span> or <span class="coral">false</span>.</p>
                <pre class="code">
   dog instanceof Animal; </pre>
                <p>This statement returns true if dog is instance of Animal class.</p>
                <br>
                <h3><span class="coral">Dot Operator:</span></h3>
                <p> This operator used to access instance variables and subpackages.</p>

                <br>
                <br>

                <h3>Separators:</h3>
                <br>
                <p class="wall"><span class="coral">Separators</span> are symbols used to structure and arrange the code.</p>
                <pre class="code">
    ()      parentheses
    {}      braces or curly brackets
    []      brackets or square brackets
    ;       semicolons
    ,       comma
    .       period  </pre>

                <br>

                <h3>Literals:</h3>
                <p class="wall"><span class="coral">Literals</span> are fancy name given to the constants in java.</p>
                <pre class="code">
  <span class="coral">10, 20, -100</span>         Integer Literals
  <span class="coral">10.5 , 0.34 ,-2.5</span>    Floating Literals
  <span class="coral">'a','b','10'</span>         Character Literals
  <span class="coral">"java","2019"</span>        String Literals
  <span class="coral">true or false</span>        Boolean Literals
  <span class="coral">null;</span>                Null Literal</pre>
                <br>
                <h3>Java Escape Sequences:</h3>
                <br>
                <p class="wall">Java Escape Sequences are sequence of characters which is often used inside output methods to shape the output or print some special characters.</p>
                <br>
                <pre class="code">
    <span class="coral">\'</span>               Single quote
    <span class="coral">\"</span>               Double quote
    <span class="coral">\\</span>               single Backslash
    <span class="coral">\r</span>               Carriage return
    <span class="coral">\n</span>               New line 
    <span class="coral">\f</span>               Form feed
    <span class="coral">\t</span>               Tab
    <span class="coral">\b</span>               Backspace </pre>


                <br><br>






                <div class="next-prev">

                    <a href="./system.out.println-explained.php" class="f-left">prev</a>
                    <a href="./java-data-types.php" class="f-right">next</a>
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
