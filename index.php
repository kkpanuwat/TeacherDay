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

<body>
    <div class="container">
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
                            <label for="majorName">สาขาวิชา : </label>
                            <br>
                            <input value="วิทยาการคอมพิวเตอร์ (CS)" id="inputmajor" list="major" class="major inputText">
                            <datalist id="major">
                                <option value="วิทยาการคอมพิวเตอร์ (CS)">
                                <option value="เทคโนโลยีสารสนเทศ (IT)">
                                <option value="ภูมิสารสนเทศศาสตร์(GIS)">
                            </datalist>
                        </div>
                        <div class="grade">
                            <label for="gradeName">ระดับการศึกษา : </label>
                            <br>
                            <select name="grade" id="grade" class="grade inputText">
                                <optgroup label="นักศึกษา">
                                    <option value="1">ระดับชั้นปริญญาตรี</option>
                                    <option value="2">ระดับชั้นปริญญาโท</option>
                                    <option value="3">ระดับชั้นปริญญาเอก</option>
                                </optgroup>
                                <optgroup label="บุคลากร">
                                    <option value="4">อาจารย์</option>
                                    <option value="5">บุคลากร</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <div class="comment">
                        <label for="commentName">คำอวยพร :</label>
                        <br>
                        <textarea name="comment" id="comment" class="commentInput" rows="13"></textarea>
                    </div>
                    <button class="btn btn-save" onclick="insertComment()">บันทึก</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>