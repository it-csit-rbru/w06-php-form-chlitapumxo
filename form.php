<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
    <fieldset id="sect1">
      <legend>ส่วนที่1 ข้อมูลผู้จัดทำโครงงาน </legend>
      <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
      <label for="fname">ชื่อ</label><input type="text" name="fname">
      <label for="lname">นามสกุล</label><input type="text" name="lname">
      <label for="program">สาขาวิชา</label> 
      <select name="program">
        <option value="1">วิทยาการคอมพิวเตอร์</option>
        <option value="2">เทคโนโลยีสารสนเทศ</option>
        <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
        <option value="4">ภูมิสารสนเทศ</option>
        <option value="5">คอมพิวเตอร์ศึกษา</option>
      </select><br>
      <label for="faculty">คณะ</label>
      <select name="faculty">
        <option value="1">วิทยาการคอมพิวเตอร์</option>
        <option value="2">ครุศาสตร์</option>
      </select><br>
      <label for="std_year">ชั้นปี</label><br>
      <input type="radio" name="std_year" value="1"><label>ปี1</label>
      <input type="radio" name="std_year" value="2"><label>ปี2</label>  
      <input type="radio" name="std_year" value="3"><label>ปี3</label>  
      <input type="radio" name="std_year" value="4"><label>ปี4</label>   
      <input type="radio" name="std_year" value="5"><label>ปี5</label>
    </fieldset>
    <fieldset id="sect2">
      <legend>ส่วนที่2 ข้อมูลโครงงาน </legend>
      <label for="prj_name_th">ชื่อโครงงาน(ไทย)</label><input type="textares" name="prj_name_th">
      <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)</label><input type="textares" name="prj_name_en">
      <label for="prj_type">ประเภทโครงงาน</label>
      <select name="prj_type">
        <option value="1">โครงงานประเภทสำรวจ</option>
        <option value="2">โครงงานประเภทศึกษาค้นคว้า</option>
        <option value="3">โครงงานประเภททดลอง</option>
        <option value="4">โครงงานประเภทสิ่งประดิษฐ์</option>
      </select><br>
      <label>เครื่องมือที่ใช้ในการพัฒนา</label><br>
      <input type="checkbox" name="prj_tool[]"  value="1"><label>HTML</label>
      <input type="checkbox" name="prj_tool[]"  value="2"><label>CSS</label>  
      <input type="checkbox" name="prj_tool[]"  value="3"><label>JavaScript</label>  
      <input type="checkbox" name="prj_tool[]"  value="4"><label>Bootstrap</label> 
      <input type="checkbox" name="prj_tool[]"  value="5"><label>Materiai</label>  
      <input type="checkbox" name="prj_tool[]"  value="6"><label>Angular</label>   
      <input type="checkbox" name="prj_tool[]"  value="7"><label>React</label>    
      <input type="checkbox" name="prj_tool[]"  value="8"><label>PHP</label> 
      <input type="checkbox" name="prj_tool[]"  value="9"><label>MySQL</label> 
      <input type="checkbox" name="prj_tool[]"  value="10"><label>ChartJS</label><br>  
      <label>อาจารย์ที่ปรึกษา</label>
      <select name="prj_advisor">
        <option value="1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
        <option value="2">ผศ.ทิพย์วรรณ ฟู่เฟือง</option>
      </select>
      </fieldset><br>
      <input type="submit" value="Go...">
    </form>    
</body>
</html>