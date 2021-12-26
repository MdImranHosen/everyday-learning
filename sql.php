<?php
///::::::::::::::::: Mysql two table as tableOne in tableTwo s tbl_tid foreign key and primary key ::::::::::::///////////
$sql = "CREATE TABLE tableOne
(
  tbl_oid  int NOT NULL AUTO_INCREMENT,
  tbl_tid int NOT NULL,
  PRIMARY KEY (tbl_oid, tbl_tid),
  FOREIGN KEY(tbl_tid) REFERENCES tableTwo(tbl_tid)
)";


"SHOW CREATE TABLE vendors_category";



"Aggregate Functions

These functions operate on the multiset of values of a column of
a relation, and return a value
avg:
average value
min:
minimum value
max:
maximum value
sum:
sum of values
count:
number of values
";

////::::::::::::: Database table data type Enum get data :::::php mysqli and ajax ::::::::::: way ////::::::::::::||\\\\\\\
?>
<div class="form-group has-feedback">
          <label class="control-label col-sm-2" for="event_type"> Event Type <span style="color:red;font-size: 20px;">*</span></label>
          <div class="col-sm-10"><div id="event_type_id"></div></div>
        </div> 

script type="text/javascript">
  $(document).ready(function() {
      $.ajax({
            url: "ajax/event_type_ajax.php",
            success: function(event_type_d) {
              $('#event_type_id').html(event_type_d);
            }
      });
  });
</script>
<?php
//-----------ajax file: ajax/event_type_ajax.php ------------
if (class_exists('EventClass')) {
	$event = new EventClass();

	if (method_exists($event, 'eventTypeGet')) {
		$msg = $event->eventTypeGet();
   }
}

?>
<?php
//------------- class php EventClass.php ------------
public function eventTypeGet() {

    $column_name = 'event_type';

    $selectd = "<select class='form-control' id='".$column_name."' name='".$column_name."'>";

    $result = mysqli_query($this->db->link, "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
       WHERE TABLE_NAME = 'event_list' AND COLUMN_NAME = 'event_type'");
    $row = $result->fetch_array();
    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

    foreach($enumList as $value){
       $selectd .= "<option value='".$value."'>".$value."</option>";
    }  

    $selectd .= "</select>";
       
   echo $selectd;
  }

/////////:::::::::::::::::::::::::: duplicate check roll ::::::::::::::::::\\\\\\\\\\\\
SELECT `REGISTERED_STUDENTS_EXAM_ROLL`, COUNT(`REGISTERED_STUDENTS_EXAM_ROLL`) FROM registered_students GROUP BY `REGISTERED_STUDENTS_EXAM_ROLL` HAVING COUNT(`REGISTERED_STUDENTS_EXAM_ROLL`) > 1


////////////::::::::::::::::::::end enum  type get type :::::::::::::\\\\\\\\\\\\\\\

SELECT `hr_fourth_year_final_2018_paper_marks`.* FROM `hr_fourth_year_final_2018_paper_marks` JOIN temp_roll  on temp_roll.du_reg=hr_fourth_year_final_2018_paper_marks.reg 



SELECT * FROM `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode



UPDATE `hr_fourth_year_final_2017_paper_marks`  JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg SET `hr_fourth_year_final_2017_paper_marks`.`tmark`=(),`hr_fourth_year_final_2017_paper_marks`.`lg`=(),`hr_fourth_year_final_2017_paper_marks`.`gpa`=(),`hr_fourth_year_final_2017_paper_marks`.`creadit`=() WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode



UPDATE `hr_fourth_year_final_2017_paper_marks`  JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg SET `hr_fourth_year_final_2017_paper_marks`.`tmark`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`tmark` else hr_fourth_year_final_2018_paper_marks_improve.tmark end),`hr_fourth_year_final_2017_paper_marks`.`lg`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`lg` else hr_fourth_year_final_2018_paper_marks_improve.lg end),`hr_fourth_year_final_2017_paper_marks`.`gpa`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`gpa` else hr_fourth_year_final_2018_paper_marks_improve.gpa end),`hr_fourth_year_final_2017_paper_marks`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`creadit` else hr_fourth_year_final_2018_paper_marks_improve.creadit end) WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode
//Update count subquery
UPDATE `registered_students` SET `registered_students`.`sub_count`= (SELECT COUNT(selected_courses.SELECTED_COURSES_ID) FROM selected_courses WHERE selected_courses.REGISTERED_STUDENTS_ID = registered_students.REGISTERED_STUDENTS_ID GROUP BY selected_courses.REGISTERED_STUDENTS_ID) WHERE registered_students.REGISTERED_EXAM_ID = 3

///////////////////////////|||||||||||||||||||||||||||||\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
"CREATE TABLE students(
    ADMITTED_STUDENT_ID INT NOT NULL AUTO_INCREMENT,
    SESSION_ID INT NOT NULL,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    college_program_id INT NOT NULL,
    PROGRAMS_ID INT NOT NULL,
    ADMITTED_STUDENT_REG_NO BIGINT,
    ADMITTED_STUDENT_NAME VARCHAR(255) NULL,
    STUDENT_BANGLA_NAME VARCHAR(255) NULL,
    ADMITTED_STUDENT_FATHERS_N VARCHAR(255) NULL,
    ADMITTED_STUDENT_MOTHERS_N VARCHAR(255) NULL,
    ADMITTED_STUDENT_ADDRESS TEXT NULL,
    post_office VARCHAR(255) NULL,
    police_station VARCHAR(255) NULL,
    upa_zilla VARCHAR(255) NULL,
    district VARCHAR(255) NULL,
    present_house_road VARCHAR(255) NULL,
    present_post_office VARCHAR(255) NULL,
    present_police_station VARCHAR(255) NULL,
    present_upa_zilla VARCHAR(255) NULL,
    present_district VARCHAR(255) NULL,
    ADMITTED_STUDENT_CONTACT_NO VARCHAR(255) NULL,
    ADMITTED_STUDENT_DOB DATE NULL,
    NATIONALITY VARCHAR(255) NULL,
    RELIGION VARCHAR(255) NULL,
    CASTE_SECT VARCHAR(255) NULL,
    parents_income VARCHAR(255) NULL,
    ADMITTED_STUDENT_GENDER VARCHAR(255) NULL,
    ADMITTED_STUDENT_EMAIL VARCHAR(255) NULL,
    image_dir VARCHAR(255) NULL,
    s_signicher VARCHAR(255) NULL,
    PASSWORD VARCHAR(255) NULL,
    count_sent_sms TEXT NULL,
    ACCOUNT_CREATE_STATUS INT DEFAULT 1,
    ADMITTED_STUDENT_STATUS INT DEFAULT 1,
    PRIMARY KEY (ADMITTED_STUDENT_ID),
    FOREIGN KEY(SESSION_ID) REFERENCES session(SESSION_ID),
    FOREIGN KEY(REGISTERED_COLLEGE_ID) REFERENCES registered_college(REGISTERED_COLLEGE_ID),
    FOREIGN KEY(college_program_id) REFERENCES college_program(college_program_id),
    FOREIGN KEY(PROGRAMS_ID) REFERENCES programs(PROGRAMS_ID)
)";

"
SELECT COLLEGE_NAME FROM registered_college WHERE substr(COLLEGE_NAME, 1, 1) IN ('A','E','I','O','U') 


SELECT CITY FROM STATION WHERE LOWER(substr(CITY, 1, 1)) IN ('A','E','I','O','U')

/*Query the list of CITY names from STATION which have vowels (i.e., a, e, i, o, and u) as both their first and last characters. Your result cannot contain duplicates.*/

SELECT DISTINCT CITY FROM STATION WHERE (CITY LIKE 'a%' OR CITY LIKE 'e%' OR CITY LIKE 'i%' OR CITY LIKE 'o%' OR CITY LIKE 'u%') AND (CITY LIKE '%a' OR CITY LIKE '%e' OR CITY LIKE '%i' OR CITY LIKE '%o' OR CITY LIKE '%u');


/*Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates.*/

SELECT DISTINCT CITY FROM STATION WHERE NOT (CITY LIKE 'a%' OR CITY LIKE 'e%' OR CITY LIKE 'i%' OR CITY LIKE 'o%' OR CITY LIKE 'u%');

/*Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.*/

SELECT DISTINCT CITY FROM STATION WHERE NOT (CITY LIKE '%a' OR CITY LIKE '%e' OR CITY LIKE '%i' OR CITY LIKE '%o' OR CITY LIKE '%u');


/*Query the list of CITY names from STATION that either do not start with vowels or do not end with vowels. Your result cannot contain duplicates.*/

SELECT DISTINCT CITY FROM STATION WHERE ( NOT (CITY LIKE 'a%' OR CITY LIKE 'e%' OR CITY LIKE 'i%' OR CITY LIKE 'o%' OR CITY LIKE 'u%')) OR (NOT (CITY LIKE '%a' OR CITY LIKE '%e' OR CITY LIKE '%i' OR CITY LIKE '%o' OR CITY LIKE '%u'));

";

/*Equilateral: It's a triangle with  sides of equal length.
Isosceles: It's a triangle with  sides of equal length.
Scalene: It's a triangle with  sides of differing lengths.
Not A Triangle: The given values of A, B, and C don't form a triangle.*/

"
SELECT CASE WHEN A + B <= C OR A + C <= B OR B + C <= A THEN 'Not A Triangle'
WHEN A = B AND B = C THEN 'Equilateral'
WHEN A = B OR B = C OR A = C THEN 'Isosceles'
ELSE 'Scalene' END FROM TRIANGLES;

"
/*Generate the following two result sets:

Query an alphabetically ordered list of all names in OCCUPATIONS, immediately followed by the first letter of each profession as a parenthetical (i.e.: enclosed in parentheses). For example: AnActorName(A), ADoctorName(D), AProfessorName(P), and ASingerName(S).
Query the number of ocurrences of each occupation in OCCUPATIONS. Sort the occurrences in ascending order, and output them in the following format:

There are a total of [occupation_count] [occupation]s.
where [occupation_count] is the number of occurrences of an occupation in OCCUPATIONS and [occupation] is the lowercase occupation name. If more than one Occupation has the same [occupation_count], they should be ordered alphabetically.

Note: There will be at least two entries in the table for each type of oc*/

"
SELECT CONCAT(NAME, '(', SUBSTR(OCCUPATION,1,1),')') AS N
FROM OCCUPATIONS ORDER BY N;

SELECT CONCAT('There are a total of ',COUNT(OCCUPATION), ' ',LOWER(OCCUPATION), 's.') FROM OCCUPATIONS GROUP BY OCCUPATION ORDER BY COUNT(OCCUPATION), OCCUPATION;
"
/*Pivot the Occupation column in OCCUPATIONS so that each Name is sorted alphabetically and displayed underneath its corresponding Occupation. The output column headers should be Doctor, Professor, Singer, and Actor, respectively.*/

"
SET @d=0, @a=0, @p=0, @s=0;
SELECT MIN(Doctor),MIN(Professor),MIN(SINGER),MIN(Actor)
FROM
(SELECT IF(OCCUPATION='Actor',NAME,NULL) AS Actor,
        IF(OCCUPATION='Doctor',NAME,NULL) AS Doctor,
        IF(OCCUPATION='Professor',NAME,NULL) AS Professor,
        IF(OCCUPATION='Singer',NAME,NULL) AS SINGER,
 CASE OCCUPATION
    WHEN 'Actor' THEN @a:=@a+1
    WHEN 'Doctor' THEN @d:=@d+1
    WHEN 'Professor' THEN @p:=@p+1
    WHEN 'Singer' THEN @s:=@s+1
 END
 AS idn FROM OCCUPATIONS ORDER BY NAME)
 AS temp GROUP BY temp.idn;
 
"
	
"
SELECT b.N, CASE WHEN b.P is not null THEN CASE when (SELECT COUNT(*) FROM bst WHERE P = b.N) = 0 THEN 'Leaf' else 'Inner' END ELSE 'Root' END FROM bst b ORDER BY b.N;
"
"
SELECT company_code, founder, 
(SELECT COUNT(DISTINCT lead_manager_code) FROM lead_manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT senior_manager_code) FROM senior_manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT manager_code) FROM manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT employee_code) FROM employee WHERE company_code = c.company_code) FROM company c  ORDER BY company_code;
"
// Aggregations The Blunder sql 
"
SELECT ROUND(AVG(salary)) - ROUND(AVG(REPLACE(salary, '0',''))) FROM `employees`
"
"
SELECT MAX(salary*months), COUNT(*) FROM employee WHERE (salary*months) = (SELECT MAX(salary*months) FROM employee);
"

?>
