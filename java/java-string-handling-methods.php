<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Java String Handling Methods | RapidTutor</title>

    <meta name="Keywords" content="Java,programming,tutorial,rapidtutor,examples,tutor,rapid,learn,syntax,string,handling,method">

    <meta name="Description" content="String class provides set of methods that are very useful to perform different string manipulation operations,like-charAt(),getChars(),getBytes(),equals(),equalsIgnoreCase(),indexOf,trim(),toUpperCase(),toLowerCase()etc.">

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
                <h1>String Handling Methods in Java</h1>

                <p>String class provides set of methods that are very useful to perform different string manipulation operations.</p>
                <br>
                <p>Some of the <b>methods</b> are:</p>
                <div class="table">
                    <table>
                        <tr>
                            <th>Method call</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>s.charAt(n)</td>
                            <td>Returns the char at index n</td>
                        </tr>
                        <tr>
                            <td>s.getChars(start,end,char,0)</td>
                            <td>substring between start &amp; end-1 of s is copied to char[] from starting index 0.</td>
                        </tr>
                        <tr>
                            <td>s.getBytes()</td>
                            <td>Converts char to byte &amp; returns byte[] array.</td>
                        </tr>
                        <tr>
                            <td>s.toCharArray()</td>
                            <td>Returns char[] array representation for entire String</td>
                        </tr>
                        <tr>
                            <td>s1.equals(s2)</td>
                            <td>Returns true if s1 &amp; s2 contains same char in same order</td>
                        </tr>
                        <tr>
                            <td>s1.equalsIgnoreCase(s2)</td>
                            <td>Returns true if s1 &amp; s2 contains same char sequence ignoring the case</td>
                        </tr>
                        <tr>
                            <td>s1.regionMatches(i1,s2,i2,n)</td>
                            <td>Compare specific regions of two strings.</td>
                        </tr>
                        <tr>
                            <td>s1.regionMatches(bool,i1,str2,i2,n)</td>
                            <td>Compare specific regions of two strings ignoring case</td>
                        </tr>
                        <tr>
                            <td>s1.startsWith(s2)</td>
                            <td>Checks if s1 starts with a specified string s2</td>
                        </tr>
                        <tr>
                            <td>s1.endsWith(s2)</td>
                            <td>Checks if s1 ends with a specified string s2</td>
                        </tr>
                        <tr>
                            <td>s1.compareTo(s2)</td>
                            <td>if Returns &gt;0 means s1&gt;s2 <br>if &lt;0 ; s1&lt;s2 <br>
                                if =0 ; s1==s2</td>
                        </tr>
                        <tr>
                            <td>s.indexOf(ch)</td>
                            <td>Returns index of ch in string s</td>
                        </tr>
                        <tr>
                            <td>s.lastIndexOf(ch)</td>
                            <td>Returns index of last Occurrence of ch</td>
                        </tr>
                        <tr>
                            <td>s.indexOf(str)</td>
                            <td>Returns index of first occurrence of substring str</td>
                        </tr>
                        <tr>
                            <td>s.lastIndexOf(str)</td>
                            <td>Returns index of last occurrence of substring str </td>
                        </tr>
                        <tr>
                            <td>s.indexOf(ch,i)</td>
                            <td>Returns index of ch between index i to end</td>
                        </tr>
                        <tr>
                            <td>s.lastIndexOf(ch,i)</td>
                            <td>Returns index of ch between index i to zero</td>
                        </tr>
                        <tr>
                            <td>s.indexOf(str,i)</td>
                            <td>Returns first index of substring str from i to end</td>
                        </tr>
                        <tr>
                            <td>s.lastIndexOf(str,i)</td>
                            <td>Returns last index of substring str from i to zero</td>
                        </tr>
                        <tr>
                            <td>s.substring(st)</td>
                            <td>Returns substring starting from index st to end of string</td>
                        </tr>
                        <tr>
                            <td>s.substring(st,e)</td>
                            <td>Returns substring between indexes st &amp; e</td>
                        </tr>
                        <tr>
                            <td>s1.concat(s2)</td>
                            <td>Concatenates s2 to the end of s1</td>
                        </tr>
                        <tr>
                            <td>s.replace(ch1,ch2)</td>
                            <td>All occurrences of ch1 is replaced with ch2 in string s</td>
                        </tr>
                        <tr>
                            <td>s.trim()</td>
                            <td>Removes white spaces from around the string s</td>
                        </tr>
                        <tr>
                            <td>s.toLowerCase()</td>
                            <td>Converts all characters to lower case</td>
                        </tr>
                        <tr>
                            <td>s.toUpperCase()</td>
                            <td>Converts all characters to upper case</td>
                        </tr>

                    </table>
                </div>
                <br><br>










                <div class="next-prev">

                    <a href="./java-length-method.php" class="f-left">prev</a>
                    <a href="./java-wrapper-classes.php" class="f-right">next</a>
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
