if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function getAllComment() {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url = "../function/comment/commentController.php?allCommentDashboard";
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function getCommentByMajor(majorID) {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url =
    "../function/comment/commentController.php?commentByMajor&major=" + majorID;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function changePage(args) {
  let page = args;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
      console.log(xmlhttp.responseText);
    }
  };
  let url =
    "../function/comment/commentController.php?allCommentDashboard&pagenumber=" +
    page;
  let data = "pagenumber=" + page;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function deleteComment(commentID) {
  if (!confirm("คุณต้องการลบคำอวยพรใช่หรือไม่ ? ")) {
    return;
  }
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      getAllComment();
    }
  };
  let url =
    "../function/comment/commentController.php?allCommentDashboard&deleteComment";
  let data = "deleteComment&comment_id=" + commentID;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(data);
}

function selectType(type) {
  let blog = document.getElementById("searchBlog");
  if (type == 1) {
    getAllComment();
    if (document.getElementById("selectMajorID")) {
      document.getElementById("selectMajorID").remove();
    }
    if (document.getElementById("teacher")) {
      document.getElementById("teacher").remove();
    }
  } else if (type == 2) {
    if (document.getElementById("selectMajorID")) {
      document.getElementById("selectMajorID").remove();
    }
    if (document.getElementById("teacher")) {
      document.getElementById("teacher").remove();
    }
    let selectMajor = document.createElement("select");
    selectMajor.id = "selectMajorID";
    selectMajor.setAttribute("onchange", "getCommentByMajor(this.value);");
    selectMajor.innerHTML =
      '<option value="" disabled selected>สาขาวิชา</option><option value="1">วิทยาการคอมพิวเตอร์ (CS)</option><option value="2">เทคโนโลยีสารสนเทศ (IT)</option><option value="3">ภูมิสารสนเทศศาสตร์ (GIS)</option>';
    blog.appendChild(selectMajor);
  } else if (type == 3) {
    if (document.getElementById("selectMajorID")) {
      document.getElementById("selectMajorID").remove();
    }
    if (document.getElementById("teacher")) {
      document.getElementById("teacher").remove();
    }
    let selectMajor = document.createElement("select");
    selectMajor.id = "selectMajorID";
    selectMajor.setAttribute("onchange", "getTeacher(this.value);");
    selectMajor.innerHTML =
      '<option value="" disabled selected>สาขาวิชา</option><option value="1">วิทยาการคอมพิวเตอร์ (CS)</option><option value="2">เทคโนโลยีสารสนเทศ (IT)</option><option value="3">ภูมิสารสนเทศศาสตร์ (GIS)</option>';
    blog.appendChild(selectMajor);
  }
}

function getTeacher(value) {
  if (document.getElementById("teacher")) {
    document.getElementById("teacher").remove();
  }
  let blog = document.getElementById("searchBlog");
  let index = 1;
  let teacher_cs = [
    "รศ.ดร.ศาสตรา   วงศ์ธนวสุ",
    "รศ.ดร.สิรภัทร   เชี่ยวชาญวัฒนา",
    "รศ.ดร.ปัญญาพล   หอระตะ",
    "ผศ.ดร.พุธษดี   ศิริแสงตระกูล",
    "ผศ.ดร.สันติ   ทินตะนัย",
    "ผศ.ดร.คำรณ   สุนัติ",
    "ผศ.ดร.ชิตสุธา   สุ่มเล็ก",
    "ผศ.ดร.บุญทรัพย์   ไวคำ",
    "ผศ.ดร.สิลดา   อินทรโสธรฉันท์",
    "ผศ.ดร.อุรฉัตร   โคแก้ว",
    "อาจารย์ วชิราวุธ   ธรรมวิเศษ",
    "อาจารย์ ธนพล   ตั้งชูพงศ์",
    "อาจารย์ ไพรสันต์   ผดุงเวียง",
  ];
  let teacher_it = [
    "รศ.ดร.สมจิตร   อาจอินทร์",
    "รศ.ดร.งามนิจ   อาจอินทร์",
    "รศ.ดร.จักรชัย   โสอินทร์",
    "ผศ.ดร.ปวีณา   วันชัย",
    "ผศ.ดร.สายยัญ   สายยศ",
    "ผศ.ดร.สุมณฑา   เกษมวิลาศ",
    "ผศ.ดร.วรารัตน์   สงฆ์แป้น",
    "ผศ.ดร.มัลลิกา   วัฒนะ",
    "อาจารย์ รภัสสิทธิ์   ชินภัทรจีรัสถ์",
    "อาจารย์ วรัญญา   วรรณศรี",
    "อาจารย์ เพชร    อิ่มทองคำ",
    "อาจารย์ ชานนท์   เดชสุภา",
  ];
  let teacher_gis = [
    "รองศาสตราจารย์   ชัยพล   กีรติกสิกร",
    "ผู้ช่วยศาสตราจารย์   รัศมี   สุวรรณวีระกำธร",
    "ผู้ช่วยศาสตราจารย์   พิพัธน์   เรืองแสง",
    "ผู้ช่วยศาสตราจารย์   อุราวรรณ   จันทร์เกษ",
    "ผู้ช่วยศาสตราจารย์   ณกร   วัฒนกิจ",
    "อาจารย์   ศรัณย์   อภิชนตระกูล",
    "อาจารย์   ศักดิ์พจน์   ทองเลี่ยมนาค",
  ];
  let teacherId = value;
  let teacher = Array();
  if (teacherId == 1) {
    index = 2;
    teacher = teacher_cs;
  } else if (teacherId == 2) {
    index = 15;
    teacher = teacher_it;
  } else {
    index = 27;
    teacher = teacher_gis;
  }
  let teacherObject = document.createElement("select");
  teacherObject.id = "teacher";
  teacherObject.innerHTML = null;
  teacherObject.innerHTML = "<option value='' disabled selected>กรุณาเลือกอาจารย์</option>"
  let all_teacher = document.createElement("option");
  teacherObject.setAttribute("onchange", "getCommentByTeacher("+teacherId+",this.value);");
  all_teacher.value = 1;
  all_teacher.innerHTML = "อาจารย์ทุกท่านในสาขาวิชา ฯ";
  teacherObject.appendChild(all_teacher);
  teacher.forEach((element) => {
    let teacer_item = document.createElement("option");
    teacer_item.value = index;
    teacer_item.innerHTML = element;
    teacherObject.appendChild(teacer_item);
    index++;
  });
  blog.appendChild(teacherObject)
}


function getCommentByTeacher(major_id,teacher_id){
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url =
    "../function/comment/commentController.php?commentByTeacher&major=" + major_id+"&teacher_id="+teacher_id;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}
