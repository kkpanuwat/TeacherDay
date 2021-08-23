let numrow = 0;
let tray = 1

if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function setSystem() {
  getTeacher();
  setInterval(getAllComment, 1000);
}

function insertComment() {
  let std_id = document.getElementById("stdId").value;
  let name = document.getElementById("name").value;
  let major = document.getElementById("inputmajor").value;
  let grade = document.getElementById("grade").value;
  let comment = document.getElementById("comment").value;
  let teacher = document.getElementById("teacher").value;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("stdId").value = ''
      document.getElementById("name").value = ''
      document.getElementById("inputmajor").value = 1
      document.getElementById("comment").value = ''
      document.getElementById("teacher").value = 0
      location.href = '#result'
    }
  };

  let url = "./function/comment/commentController.php";
  let data =
    "insertComment&std_id=" +
    std_id +
    "&name=" +
    name +
    "&major=" +
    major +
    "&grade=" +
    grade +
    "&comment=" +
    comment +
    "&tray=" +
    tray +
    "&teacher_id=" +
    teacher;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(data);
}

function getTeacher() {
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
  let teacherId = document.getElementById("inputmajor").value;
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
  let teacherObject = document.getElementById("teacher");
  teacherObject.innerHTML = null;
  let all_teacher = document.createElement("option");
  all_teacher.value = 1;
  all_teacher.innerHTML = "อาจารย์ทุกท่าน";
  teacherObject.appendChild(all_teacher);
  teacher.forEach((element) => {
    let teacer_item = document.createElement("option");
    teacer_item.value = index;
    teacer_item.innerHTML = element;
    teacherObject.appendChild(teacer_item);
    // console.log(index, element);
    index++;
  });
}

function getAllComment() {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("numrows").innerHTML = xmlhttp.responseText + " คน";
        }
      };
      let url = "./function/comment/commentController.php?getNumRow";
      xmlhttp.open("GET", url, true);
      xmlhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      xmlhttp.send();
    }
  };
  let url = "./function/comment/commentController.php?allComment";
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function clickpan(args){
  let id  = args
  let pan = document.getElementById(id)
  pan.className = 'img-pan click'
  if(id == 'pan1'){
    tray = 1
    document.getElementById('pan2').className = 'img-pan'
    document.getElementById('pan3').className = 'img-pan'
  }
  else if(id == 'pan2'){
    tray = 2
    document.getElementById('pan1').className = 'img-pan'
    document.getElementById('pan3').className = 'img-pan'
  }
  else if(id == 'pan3'){
    tray = 3
    document.getElementById('pan1').className = 'img-pan'
    document.getElementById('pan2').className = 'img-pan'
  }
}
