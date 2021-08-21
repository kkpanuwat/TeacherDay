<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Day | Cs KKU</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/index.js"></script>
</head>

<body onload="setSystem()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F4D160" fill-opacity="1" d="M0,192L40,192C80,192,160,192,240,202.7C320,213,400,235,480,208C560,181,640,107,720,101.3C800,96,880,160,960,176C1040,192,1120,160,1200,138.7C1280,117,1360,107,1400,101.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        <image href="http://cad.kku.ac.th/wp-content/uploads/2018/05/Th_color.png" width="45" x="95%" y="15" />
        <image href="assets/logocs.png" width="75" x="89%" y="12" />
    </svg>

    <div class="container">
        <h1 class="svg-text">พิธีไหว้ครูออนไลน์ค่ะ</h1>
        <div class="form-control">
            <div class="form">
                <div class="form-left">
                    <div class="studentName inputBlog">
                        <label for="fname">รหัสนักศึกษา : </label>
                        <br>
                        <input type="text" name="stdId" id="stdId" class="stdId inputText" placeholder="640000000-1">
                    </div>
                    <div class="firstName inputBlog">
                        <label for="fname">ชื่อ-สกุล : </label>
                        <br>
                        <input type="text" name="fname" id="name" class="fname inputText" placeholder="สมชาย รักเรียน">
                    </div>
                    <div class="major-grade">
                        <div class="major">
                            <label for="majorName">หลักสูตร : </label>
                            <br>
                            <select name="inputmajor" id="inputmajor" onchange="getTeacher()" class="major inputText">
                                <option value="1">วิทยาการคอมพิวเตอร์ (CS)</option>
                                <option value="2">เทคโนโลยีสารสนเทศ (IT)</option>
                                <option value="3">ภูมิสารสนเทศศาสตร์ (GIS)</option>
                            </select>
                        </div>
                        <div class="grade">
                            <label for="gradeName">ระดับการศึกษา : </label>
                            <br>
                            <select name="grade" id="grade" class="grade inputText">
                                <option value="1">ระดับชั้นปริญญาตรี</option>
                                <option value="2">ระดับชั้นปริญญาโท</option>
                                <option value="3">ระดับชั้นปริญญาเอก</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <label for="teacherName">ถึง : </label>
                    <br>
                    <select name="teacher" id="teacher" class="tea inputText">
                    </select>
                    <div class="comment">
                        <label for="commentName">คำอวยพร :</label>
                        <br>
                        <textarea name="comment" id="comment" class="commentInput teacher"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-save" onclick="insertComment()">ส่งคำอวยพร</button>
        </div>
        <hr>
        <div class="show-control">
            <div class="show-item">
                <h2>จำนวนผู้ส่งคำอวยพรทั้งหมด &nbsp;<h2 id="numrows" class="people">&nbsp; 500 คน</h2>
                </h2>
            </div>
            <h3>ผู้ร่วมอวยพรใหม่</h3>
            <div id="result"></div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>