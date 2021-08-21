if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function insertComment() {
  let std_id = document.getElementById("stdId").value;
  let name = document.getElementById("name").value;
  let major = document.getElementById("inputmajor").value;
  let grade = document.getElementById("grade").value;
  let comment = document.getElementById("comment").value;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xmlhttp.responseText);
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
    comment;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(data);
}

function getTeacher() {
  let teacher_cs = [
    "อาจารย์ทุกท่าน",
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
    "อาจารย์ทุกท่าน",
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
    "อาจารย์ทุกท่าน",
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
    teacher = teacher_cs;
  } else if (teacherId == 2) {
    teacher = teacher_it;
  }
  else {
    teacher = teacher_gis
  }
  let teacherObject = document.getElementById("teacher");
  teacherObject.innerHTML = null;
  let index = 1;
  teacher.forEach((element) => {
    let teacer_item = document.createElement("option");
    teacer_item.value = index;
    teacer_item.innerHTML = element;
    teacherObject.appendChild(teacer_item);
    console.log(index, element);
    index++;
  });
  // ddddd
}
