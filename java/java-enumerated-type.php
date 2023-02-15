<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Enumerated Type | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,enumerated,enum,values,valueOf,ordinal">

    <meta name="Description" content="Enum data type in java used to represent a collection of constants. Enum type is present in both C & C++ but in java it is much more powerful.Enum is created with enum keyword.we can have methods and constructors inside enum in java which was not there in other languages. ">

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
                <h1>Enumerated Type in Java</h1>
                <p>Enum data type in java used to represent a collection of constants. Enum type is present in both C &amp; C++ but in java it is much more powerful. </p>
                <p>Enum is created with <span class="coral">enum </span>keyword.</p>
                <br>
                <h4>Example:</h4>
                <pre class="code prettyprint">
     enum Days{
             SUN,MON,TUE;
              }                </pre>

                <p>Here, SUN,MON,TUE are the constant collections.</p>
                <p>Enum in java more powerful because we can have methods and constructors inside enum in java which was not there in other languages.</p>
                <pre class="output">
        Days.SUN;        </pre>

                <p>To access the values we use dot operator.</p>
                <br>
                <h3>Internally enum represented as class:</h3>
                <br>
                <pre class="code prettyprint">
class Days{
    public static final Days SUN = new Days();
    public static final Days MON = new Days();
    public static final Days TUE = new Days();    
               }          </pre>

                <br>

                <h4>Enum Methods:</h4>
                <p>There are methods available to work on the enum type.</p>

                <span class="coral">values()</span>
                <p>Returns array of enum type containing all the constant collections.</p>
                <span class="coral">valueOf()</span>
                <p>Returns the enum type constant of the String value.</p>
                <span class="coral">ordinal()</span>
                <p>Returns index of the constant element.</p>
                <br>
                <br>
                <h4>Program: <span class="coral">values()</span></h4>
                <p>In this program, we'll store all the elements of enum &amp; store them into array using <b>values()</b> method.</p>
                <pre class="code prettyprint linenums=1">
class Test{
 enum Months{
   jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec;
    }
 public static void main(String args[]){
     Months m[] = Months.values();
     
     for(int i=0;i&lt;m.length;i++){
         System.out.print(m[i]+" ");
     }
 }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
jan feb mar apr may jun jul aug sep oct nov dec </pre>

                <br>
                <br>

                <h4>Program: <span class="coral">valueOf()</span></h4>
                <p>In this program, we'll use the <b>valueOf()</b> method to return enum type of a specified string.</p>
                <pre class="code prettyprint linenums">
class Test{
 enum Months{
   jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec;
    }
   public static void main(String args[]){
       System.out.println(Months.valueOf("may"));
   }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
  may           </pre>
                <p>Here, we got the output <b>may</b> which is a enum type constant of the given string "may" as argument.</p>
                <br>
                <br>

                <h4>Program: <span class="coral">ordinal()</span></h4>
                <p>In this program, we'll use the method <b>ordinal()</b> to find the index position of a enum type element.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  enum Months{
    jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec;
    }
  public static void main(String args[]){
      System.out.println(Months.dec.ordinal());
  }
}                  </pre>

                <h4>Output:</h4>
                <pre class="output">
    11                    </pre>

                <p>Here, the method returns the index of the element <b>dec</b> as 11.</p>
                <br>
                <br>








                <div class="next-prev">

                    <a href="./java-wrapper-classes.php" class="f-left">prev</a>
                    <a href="./java-scanner-class.php" class="f-right">next</a>
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
