<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Wrapper Classes | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,wrapper,class">

    <meta name="Description" content="Wrapper classes are the set of classes located in java.lang package which are used to convert the primitive data types to object types.They are called wrapper because they wrap around the primitive type and returns object representation of primitive type.">

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
                <h1>What is wrapper class &#63;</h1>
                <p>Wrapper classes are the set of classes located in java.lang package which are used to convert the primitive data types to object types.</p>
                <p>They are called <b>wrapper</b> because they wrap around the primitive type &amp; returns object representation of primitive type.</p>
                <p>Wrapper Classes are easier to remember as they named a lot like the primitive types.</p>
                <br>
                <p>Here are some wrapper classes corresponding to their primitive types.</p>

                <div class="table">
                    <table>
                        <tr>
                            <th>Wrapper Class</th>
                            <th>Primitive Type</th>
                        </tr>
                        <tr>
                            <td>Boolean</td>
                            <td>boolean</td>
                        </tr>
                        <tr>
                            <td>Character</td>
                            <td>char</td>
                        </tr>
                        <tr>
                            <td>Integer</td>
                            <td>int</td>
                        </tr>
                        <tr>
                            <td>Long</td>
                            <td>long</td>
                        </tr>
                        <tr>
                            <td>Float</td>
                            <td>float</td>
                        </tr>
                        <tr>
                            <td>Double</td>
                            <td>double</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h3>Primitive to Object Conversion:</h3>
                <p>Creates object of primitive types using Wrapper Class Constructors.</p>
                <pre class="output">
Integer iobj = new Integer(i);
Long lobj = new Long(l);
Float fobj = new Float(f);
Double dobj = new Double(d); </pre>
                <p>Here, The primitive value passed as argument to the constructor which returns the object reference of that value.</p>
                <br><br>


                <h3>Primitive to String using toString() method:</h3>
                <pre class="output">
Integer.toString(i);<span class="comment">//int i converted to string</span>
Long.toString(l);
Float.toString(f);
Double.toString(d); </pre>

                <p>Here, primitive value is converted to string using <span class="coral">toString()</span> method.</p><br>


                <h3>String to Object using valueOf() method:</h3>
                <pre class="output">
Integer.valueOf(str);
Long.valueOf(str);
Float.valueOf(str);
Double.valueOf(str);            </pre>
                <p>Here, String value is converted to Object type using the <span class="coral">valueOf()</span> method of that particular class.</p>
                <br>
                <h3>String to Primitive Type:</h3>
                <pre class="output">
Integer.parseInt(str);                  
Long.parseLong(str);                    
Float.parseFloat(str);                    
Double.parseDouble(str);</pre>
                <p>Here, String is converted to primitive type using the <span class="coral">parse*()</span> method &#40; * represents the primitive class type &#41;.</p><br>


                <h3>Object to Primitive type:</h3>
                <pre class="output">
iobj.intValue();<span class="comment">//Object iobj to primitive int</span>
lobj.longValue();
fobj.floatValue();
dobj.doubleValue();               </pre>
                <p>Here, Object is converted to primitive type using the <span class="coral">*value()</span> method, which returns the primitive value of that calling object.</p>
                <p> ( * represents the primitive class type ).</p><br><br>

                <h4>Program:</h4>
                <p>Let's create one example program where we convert primitive to object and vice versa.</p>
                <pre class="code prettyprint linenums=1">
class Test{
  public static void main(String args[]){
      Integer iobj = new Integer(10);
      System.out.println("Object Value : "+iobj);
      int i = iobj.intValue();
      System.out.println("Primitive Value: "+i);
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
Object Value : 10
Primitive Value: 10                </pre>

                <br><br>










                <div class="next-prev">

                    <a href="./java-string-handling-methods.php" class="f-left">prev</a>
                    <a href="./java-enumerated-type.php" class="f-right">next</a>
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
