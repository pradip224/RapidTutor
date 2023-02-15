<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java Access Specifiers or Modifiers | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,access specifier,access modifier,public,protected,default,friendly,private">

    <meta name="Description" content="Access specifiers or access modifiers are used to control the visibility of class, constructor, variable & methods,like- public,protected,default,private-protected,private etc.">

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
                <h1>Access Specifier in Java</h1>
                <p>Sometimes it is necessary to have access restrictions to stop misuse and improve security of members.</p>
                <p><b>Access specifiers</b> are used to control the visibility of class, constructor , variable &amp; methods. </p>
                <br>
                <p>Java has five types of access specifiers:</p>
                <ul class="bullets">
                    <li>public</li>
                    <li>protected</li>
                    <li>default or friendly</li>
                    <li>private protected</li>
                    <li>private</li>
                </ul>
                <br>
                <p>The scope of these modifiers shown in table-</p>

                <div class="table">
                    <table>
                        <tr>
                            <th>Location</th>
                            <th>public</th>
                            <th>protected</th>
                            <th>default</th>
                            <th>private-protected</th>
                            <th>private</th>
                        </tr>
                        <tr>
                            <td>same class</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td>sub-class in same package</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td>other class in same package</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>no</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td>sub class in other package</td>
                            <td>yes</td>
                            <td>yes</td>
                            <td>no</td>
                            <td>yes</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td>non-subclass in other package</td>
                            <td>yes</td>
                            <td>no</td>
                            <td>no</td>
                            <td>no</td>
                            <td>no</td>
                        </tr>
                    </table>
                </div>
                <br>

                <h3><b>public:</b></h3>
                <p><span class="coral">public</span> access specifier has the widest visibility among all the specifiers.</p>
                <p>Members with public visibility is accessible from everywhere.</p>
                <br>
                <h4>Syntax:</h4>
                <pre class="output">
  public int number;
  public void display(){...} </pre>
                <br>

                <h3><b>protected:</b></h3>
                <p>Members with <span class="coral">protected</span> visibility can be accessed from within the same package &amp; also from subclass of other packages.</p>
                <h4>Syntax:</h4>
                <pre class="output">
  protected int number;
  protected void display(){...} </pre>

                <br>

                <h3><b>default:</b></h3>
                <p>When no access specifiers are specified that is taken as <b>default</b> specifier.</p>
                <p>The visibility of default specifier lies within the same package so, it is also known as <b>package friendly</b> or <b>friendly</b> access specifier.</p>
                <h4>Syntax:</h4>
                <pre class="output">
   int number;
   void display(){...}   </pre>

                <br>

                <h3><b>private protected:</b></h3>
                <p>A specifier with both the keyword <span class="coral">private</span> &amp; <span class="coral">protected</span> can be used together to have a visibility in between the private &amp; protected visibility.</p>
                <p>Members with this visibility can be accessible within same class &amp; also in all the sub-classes.</p>
                <br>

                <h3><b>Private:</b></h3>
                <p><span class="coral">private</span> is the most restricted specifier among all of them.</p>
                <p>Members with <b>private</b> visibility can only be accessed from within the class.</p>
                <h4>Syntax:</h4>
                <pre class="output">
  private int Id;
  private void show(){...}  </pre>
                <br><br>









                <div class="next-prev">

                    <a href="./java-abstract-method-classes.php" class="f-left">prev</a>
                    <a href="./java-package-basics.php" class="f-right">next</a>
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
