<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java String Builder Class | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,stringbuilder,class">

    <meta name="Description" content="String Builder class used to create strings which can be modified after creation and not immutable as in String Class.StringBuilder-Only can be accessed from one Thread,It is not Synchronized also not Thread-Safe.If you want Synchronous thread-safe object then use StringBuffer instead.">

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
                <h1>StringBuilder Class in Java</h1>
                <p>String Builder class also used to create strings which can be modified after creation and not immutable as in String Class.</p>
                <br>
                <p>Characteristics of StringBuilder:</p>
                <ul class="bullets">
                    <li>Only can be accessed from one Thread</li>
                    <li>It is not Synchronized</li>
                    <li>It is not Thread-Safe</li>
                </ul>

                <p>If you want Synchronous thread-safe object then use StringBuffer Class.</p>
                <br>
                <h3>Constructors:</h3>
                <div class="table">
                    <table>
                        <tr>
                            <th>Constructor</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>StringBuilder()</td>
                            <td>Default Constructor</td>
                        </tr>
                        <tr>
                            <td>StringBuilder(int capacity)</td>
                            <td>StringBuilder with initial capacity specified</td>
                        </tr>
                        <tr>
                            <td>StringBuilder(String s)</td>
                            <td>Creates StringBuilder Object from String</td>
                        </tr>
                        <tr>
                            <td>StringBuilder(CharSequence seq)</td>
                            <td>Constructs a string builder with the specified CharSequence</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h3>Methods:</h3>
                <p><span class="coral">StringBuilder</span> provides several methods which can be used to perform several Operations on String Objects.</p>
                <br>
                <p>Some of the Methods are:</p>
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
                            <td>Returns length of the StringBuilder</td>
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
                            <td> insert(int index,String s)</td>
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
class Test{
  public static void main(String args[]){
      StringBuilder s= new StringBuilder("Java");
      System.out.println("Initial String: "+s);
      System.out.println("capacity: "+s.capacity());
      s.append("Tutorial");
      System.out.println("Modified String: "+s);
      System.out.println("Char at 4: "+s.charAt(4));
      s.delete(9,12);
      System.out.println("After deletion: "+s );
  }
}                </pre>

                <h4>Output:</h4>
                <pre class="output">
    Initial String: Java
    capacity: 20
    Modified String: JavaTutorial
    Char at 4: T
    After Deletion: JavaTutor                </pre>

                <br>


                <h4>Explanation:</h4>
                <p>First printed Initial String s which is <span class="coral">Java</span>.</p>
                <p>Then Printed capacity of String using the <span class="coral">capacity()</span> method.(note: string indexing starts from zero)</p>
                <br>
                <p>After appended String "Tutorial" using the <span class="coral">append()</span> method.</p>
                <p>Then used the <span class="coral">charAt()</span> method &amp; printed the character at index position 4.</p>

                <p>Then deleted the substring from index 9 to index 12 using the <span class="coral">delete()</span> method of the StringBuilder Class.</p>
                <br><br>










                <div class="next-prev">

                    <a href="./java-String-Buffer.php" class="f-left">prev</a>
                    <a href="./java-length-method.php" class="f-right">next</a>
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
