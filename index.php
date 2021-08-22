<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="25x25" href="assets/imgs/icon.PNG">
    <title>Teacher's Day | Cs KKU</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/index.js"></script>
</head>

<body onload="setSystem()">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#F4D160" fill-opacity="1" d="M0,64L80,101.3C160,139,320,213,480,213.3C640,213,800,139,960,112C1120,85,1280,107,1360,117.3L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        <image href="http://cad.kku.ac.th/wp-content/uploads/2018/05/Th_color.png" width="45" x="95%" y="15" />
        <image href="assets/logocs.png" width="75" x="89%" y="12" />
    </svg>

    <div class="container">
        <h1 class="svg-text">พิธีไหว้ครูออนไลน์</h1>
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
            <label style="text-align: center; display:block; margin:20px" for="commentName">เลือกพานดอกไม้</label>
            <div class="form-pan">
                <img class="img-pan" id="pan1" onclick="clickpan('pan1')" src="assets/imgs/pan01.png" alt="">
                <img class="img-pan" id="pan2" onclick="clickpan('pan2')" src="assets/imgs/pan02.png" alt="">
                <img class="img-pan" id="pan3" onclick="clickpan('pan3')" src="assets/imgs/pan03.png" alt="">
            </div>
            <button class="btn btn-save" onclick="insertComment()">ส่งคำอวยพร</button>
        </div>
        <hr>
        <div class="show-control">
            <div class="show-item">
                <h2>จำนวนผู้ส่งคำอวยพรทั้งหมด &nbsp;<h2 id="numrows" class="people"></h2>
                </h2>
            </div>
            <h3 class="newcomment">ผู้ร่วมอวยพรใหม่</h3>
            <div id="result"></div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#233E8B" fill-opacity="1" d="M0,160L80,160C160,160,320,160,480,176C640,192,800,224,960,229.3C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    <text x="35%" y="90%" class="svg-text2">&copy; 2021 สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น</text>
</svg>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>