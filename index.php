<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Day | Cs KKU</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="container">
        <div class="form-control">
            <form action="" method="post">
                <div class="form">
                    <div class="form-left">
                        <div class="studentName inputBlog">
                            <label for="fname">รหัสนักศึกษา : </label>
                            <br>
                            <input type="text" name="stdId" class="stdId inputText" placeholder="640000000-1">
                        </div>
                        <div class="firstName inputBlog">
                            <label for="fname">ชื่อ-สกุล : </label>
                            <br>
                            <input type="text" name="fname" class="fname inputText" placeholder="สมชาย รักเรียน">
                        </div>
                        <div class="major-grade">
                            <div class="major">
                                <label for="majorName">สาขาวิชา : </label>
                                <br>
                                <input value="วิทยาการคอมพิวเตอร์ (CS)" list="major" class="major inputText">
                                <datalist id="major">
                                    <option value="วิทยาการคอมพิวเตอร์ (CS)">
                                    <option value="เทคโนโลยีสารสนเทศ (IT)">
                                    <option value="ภูมิสารสนเทศศาสตร์(GIS)">
                                </datalist>
                            </div>
                            <div class="grade">
                                <label for="gradeName">ระดับการศึกษา : </label>
                                <br>
                                <select name="grade" class="grade inputText">
                                    <optgroup label="นักศึกษา">
                                        <option value="1">ระดับชั้นปริญญาตรี</option>
                                        <option value="2">ระดับชั้นปริญญาโท</option>
                                        <option value="3">ระดับชั้นปริญญาเอก</option>
                                    </optgroup>
                                    <optgroup label="บุคลากร">
                                        <option value="teacher">อาจารย์</option>
                                        <option value="staff">บุคลากร</option>
                                    </optgroup>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="comment">
                            <label for="commentName">คำอวยพร :</label>
                            <br>
                            <textarea name="comment" class="commentInput" rows="13"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>