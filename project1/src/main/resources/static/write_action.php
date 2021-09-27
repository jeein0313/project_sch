<?php
                $connect = mysqli_connect("localhost", "", "", "") or die("fail");

                $name = $_GET[name];                      //Writer
                $email = $_GET[email];                        //Password
                $title = $_GET[title];                  //Title
                $content = $_GET[content];              //Content

                $URL = './index.php';                   //return URL


                $query = "insert into board (number,name,email,title,content)
                        values(null,'$name','$email', '$title','$content')";


                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>



