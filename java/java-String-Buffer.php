<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java String Buffer Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,stringBuffer,class">

    <meta name="Description" content="String Buffer class used to create strings which can be modified after creation and not immutable as in String Class.Characteristics of StringBuffer-it Can be Accessed from multiple threads,Synchronous,It is Thread-Safe.">

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
                <h1>StringBuffer Class in Java</h1>
                <p>String Buffer class used to create strings which can be modified after creation and not immutable as in String Class.</p>
                <br>
                <p>Characteristics of StringBuffer:</p>
                <ul class="bullets">
                    <li>Can be Accessed from multiple threads</li>
                    <li>Synchronous</li>
                    <li>It is Thread-Safe</li>
                </ul>
                <br>
                <h4>Constructors:</h4>
                <div class="table">
                    <table>
                        <tr>
                            <th>Constructor</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>StringBuffer()</td>
                            <td>Default Constructor</td>
                        </tr>
                        <tr>
                            <td>StringBuffer(int size)</td>
                            <td>StringBuffer with initial size specified</td>
                        </tr>
                        <tr>
                            <td>StringBuffer(String s)</td>
                            <td>Creates StringBuffer Object from normal String</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h3>Methods:</h3>

                <p><span class="coral">StringBuffer</span> provides several methods which can be used to perform several Operations on String Objects.</p>
                <br>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>int capacity()</td>
                            <td>Returns allocated capacity</td>
                        </tr>
                        <tr>

                            <td>ensureCapacity(int capacity)</td>
                            <td>Preallocate the buffer capacity</td>
                        </tr>
                        <tr>
                            <td>setLength(int len)</td>
                            <td>Sets length of buffer to len</td>
                        </tr>
                        <tr>
                            <td>length()</td>
                            <td>Returns length of the StringBuffer</td>
                        </tr>
                        <tr>
                            <td>charAt(int index)</td>
                            <td>Returns the char at index</td>
                        </tr>
                        <tr>
                            <td>setCharAt(int index,char ch)</td>
                            <td>char ch inserted at index position</td>
                        </tr>
                        <tr>
                            <td>append(String s)</td>
                            <td>String s appended end of invoking object</td>
                        </tr>
                        <tr>
                            <td>append(int n)</td>
                            <td>int n appended end of invoking object</td>

                        </tr>
                        <tr>
                            <td>append(Object ob)</td>
                            <td>Object ob appended end of invoking object</td>

                        </tr>
                        <tr>
                            <td>insert(int index,String s)</td>
                            <td>Inserts String s at index position of invoking object</td>
                        </tr>
                        <tr>
                            <td>insert(int index,char ch)</td>
                            <td>Inserts char ch at index position of invoking object</td>
                        </tr>
                        <tr>
                            <td>insert(int index,Object ob)</td>
                            <td>Inserts Object ob at index position of invoking object</td>
                        </tr>
                        <tr>
                            <td>reverse()</td>
                            <td>Reverse the char sequence of invoking object</td>
                        </tr>
                        <tr>
                            <td>delete(int stIndex,int endIndex)</td>
                            <td>Deletes substring between stIndex &amp; endIndex-1 of the invoking object</td>
                        </tr>
                        <tr>
                            <td>deleteCharAt(int index)</td>
                            <td>Deletes char at the index position</td>
                        </tr>
                        <tr>
                            <td>replace(int stIndex,int endIndex,String s)</td>
                            <td>Replaces substring between stIndex &amp; endIndex-1 with the String s</td>
                        </tr>
                        <tr>
                            <td>substring(int stIndex)</td>
                            <td>Returns substring from stIndex to end of invoking object</td>
                        </tr>
                        <tr>
                            <td>substring(int stIndex,int endIndex)</td>
                            <td>Returns substring between stIndex &amp; endIndex of invoking object</td>
                        </tr>

                    </table>
                </div>
                <br>
                <h4>Program:</h4>
                <pre class="code prettyprint linenums=1">
class Test {
  public static void main(String args[]) {
      StringBuffer s = new StringBuffer("Java");
      System.out.println("Capacity is: "+s.capacity());
      s.append(" Tutorial");
      System.out.println("After append String is: "+s);
      String sub = s.substring(5,10);
      System.out.println("Substring is : "+sub);
  }
}                </pre>
                <h4>Output:</h4>
                <pre class="output">
    Capacity is: 20
    After append String is: Java Tutorial
    Substring is : Tutor                </pre>

                <br>

                <h4>Explanation:</h4>
                <p>The <span class="coral">capacity()</span> method returns the initial capacity of the Buffer Object.</p>
                <br>
                <p>Then appended the String <span class="coral">"Tutorial"</span> at the end of initial String using the <span class="coral">append()</span> method of Buffer Class.</p>
                <br>
                <p>At the end we created substring of the Buffer object with starting and ending indexes which returns <span class="coral">Tutor</span> and printed the same to the console.</p>
                <br><br>








                <div class="next-prev">

                    <a href="./java-strings.php" class="f-left">prev</a>
                    <a href="./java-string-builder.php" class="f-right">next</a>
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
