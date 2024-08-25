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
"
SELECT ROUND(LONG_W, 4) FROM STATION WHERE LAT_N = (SELECT MAX(LAT_N) FROM STATION WHERE LAT_N < 137.2345);
"
	///////////////////////////////////// 27-12-2021 \\\\\\\\\\\\\\\\\\\\\\\\\\\
" 
SELECT ROUND(MIN(LAT_N), 4) FROM STATION WHERE LAT_N < 38.7780
"
"
SELECT CASE WHEN GRADES.GRADE > 7 THEN STUDENTS.NAME ELSE 'NULL' END,GRADES.GRADE,STUDENTS.MARKS FROM STUDENTS, GRADES WHERE STUDENTS.MARKS BETWEEN GRADES.MIN_MARK AND GRADES.MAX_MARK ORDER BY GRADES.GRADE DESC, STUDENTS.NAME ASC
"
	///////////// 03-01-2022 \\\\\\\\\\\\\\\\
"
select s.hacker_id, h.name from submissions s inner join challenges c on c.challenge_id = s.challenge_id inner join difficulty d on d.difficulty_level = c.difficulty_level and d.score = s.score inner join hackers h on s.hacker_id = h.hacker_id group by s.hacker_id, h.name having count(s.score) > 1 order by count(s.score) desc, s.hacker_id
"
	////////////////  27-01-2022 \\\\\\\\\\
" ALTER TABLE `registered_students` ADD CONSTRAINT fk_REGISTERED_EXAM_ID_ids FOREIGN KEY (`REGISTERED_EXAM_ID`) REFERENCES registered_exam (`REGISTERED_EXAM_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT "




" ALTER TABLE `registered_students` ADD CONSTRAINT fk_ADMITTED_STUDENT_ID_ids FOREIGN KEY (`ADMITTED_STUDENT_ID`) REFERENCES admitted_student (`ADMITTED_STUDENT_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT "

"ALTER TABLE `selected_courses` ADD  CONSTRAINT `fk_COURSE_CODE_TITLE_ID_ids` FOREIGN KEY (`COURSE_CODE_TITLE_ID`) REFERENCES `course_code_title`(`COURSE_CODE_TITLE_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT";

"ALTER TABLE `selected_courses` ADD  CONSTRAINT `fk_REGISTERED_STUDENTS_ID_ids` FOREIGN KEY (`REGISTERED_STUDENTS_ID`) REFERENCES `registered_students`(`REGISTERED_STUDENTS_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT";

"ALTER TABLE `selected_courses` ADD CONSTRAINT fk_REGISTERED_EXAM_ID_id1s FOREIGN KEY (`REGISTERED_EXAM_ID`) REFERENCES registered_exam (`REGISTERED_EXAM_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT"

// Weather Observation Station 5 HACKRRANK

"SELECT CITY, LENGTH(CITY) FROM (SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY), CITY) WHERE ROWNUM=1";

"SELECT CITY, LENGTH(CITY) FROM (SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY) DESC, CITY) WHERE ROWNUM=1";


"

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 40

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 85

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 44


UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 40

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 40

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 40

UPDATE `course_code_title` SET R1 = 'Written#90', R2 = 'Formative(Written)#10', `R3`= 'Oral#45', R4 = 'Lab./Prac./Assignment#45', R5 = 'Formative Parctical#10', R6 = 'Total#200' WHERE `COURSE_YEAR_ID` = 8 AND COURSE_CODE_TITLE_ID = 40

"


"

UPDATE `selected_courses` JOIN selected_imran ON selected_courses.SELECTED_COURSES_ID = selected_imran.SELECTED_COURSES_ID SET
`selected_courses`.`R1`= selected_imran.`R1`,
`selected_courses`.`R2`= selected_imran.`R2`,
`selected_courses`.`R3`= selected_imran.`R3`,
`selected_courses`.`R4`= selected_imran.`R4`,
`selected_courses`.`R5`= selected_imran.`R5`,
`selected_courses`.`R6`= selected_imran.`R6`,
`selected_courses`.`R7`= selected_imran.`R7`,
`selected_courses`.`R8`= selected_imran.`R8`
WHERE selected_courses.SELECTED_COURSES_ID = selected_imran.SELECTED_COURSES_ID AND selected_courses.`REGISTERED_STUDENTS_ID` = selected_imran.REGISTERED_STUDENTS_ID AND selected_courses.`REGISTERED_EXAM_ID` = selected_imran.`REGISTERED_EXAM_ID`

UPDATE `selected_courses` JOIN selected_courses_new ON selected_courses.SELECTED_COURSES_ID = selected_courses_new.SELECTED_COURSES_ID SET
`selected_courses`.`R1`= selected_courses_new.`R1`,
`selected_courses`.`R2`= selected_courses_new.`R2`,
`selected_courses`.`R3`= selected_courses_new.`R3`,
`selected_courses`.`R4`= selected_courses_new.`R4`,
`selected_courses`.`R5`= selected_courses_new.`R5`,
`selected_courses`.`R6`= selected_courses_new.`R6`,
`selected_courses`.`R7`= selected_courses_new.`R7`,
`selected_courses`.`R8`= selected_courses_new.`R8`
WHERE selected_courses_new.SELECTED_COURSES_ID = selected_courses.SELECTED_COURSES_ID AND selected_courses_new.REGISTERED_STUDENTS_ID = selected_courses.REGISTERED_STUDENTS_ID AND selected_courses_new.REGISTERED_EXAM_ID = selected_courses.REGISTERED_EXAM_ID AND selected_courses.REGISTERED_EXAM_ID = 11

"


"CREATE TABLE transcripts_exam_data(
    tx_id INT NOT NULL AUTO_INCREMENT,
    ADMITTED_STUDENT_ID BIGINT NOT NULL,
    transcripts_id INT NOT NULL,
    curriculum VARCHAR(255) NULL,
    trs_year_id_im INT NOT NULL,
    trs_program_id_im INT NOT NULL,
    COURSE_CODE_TITLE_ID INT NOT NULL,
    r1 VARCHAR(255) NULL,
    r2 VARCHAR(255) NULL,
    r3 VARCHAR(255) NULL,
    r4 VARCHAR(255) NULL,
    r5 VARCHAR(255) NULL,
    tx_status INT DEFAULT 1,
    PRIMARY KEY (tx_id, ADMITTED_STUDENT_ID, transcripts_id),
    CONSTRAINT ADMITTED_STUDENT_ID_ts4 FOREIGN KEY (ADMITTED_STUDENT_ID) REFERENCES admitted_student (ADMITTED_STUDENT_ID),
    CONSTRAINT trs_year_id_im_ts4 FOREIGN KEY (trs_year_id_im) REFERENCES course_year (COURSE_YEAR_ID),
    CONSTRAINT trs_program_id_im_ts4 FOREIGN KEY (trs_program_id_im) REFERENCES programs (PROGRAMS_ID),
    CONSTRAINT COURSE_CODE_TITLE_ID_ts4 FOREIGN KEY (COURSE_CODE_TITLE_ID) REFERENCES course_code_title (COURSE_CODE_TITLE_ID),
    CONSTRAINT transcripts_id_ts FOREIGN KEY (transcripts_id) REFERENCES transcripts (id)
)"

"UPDATE `registered_students` SET `REGISTERED_STUDENTS_STATUS` = 1 WHERE (`REGISTERED_EXAM_ID` = 38 OR `REGISTERED_EXAM_ID` = 45 OR `REGISTERED_EXAM_ID` = 54 OR `REGISTERED_EXAM_ID` = 55 OR `REGISTERED_EXAM_ID` = 58 OR `REGISTERED_EXAM_ID` = 59 OR `REGISTERED_EXAM_ID` = 60 OR `REGISTERED_EXAM_ID` = 61 OR `REGISTERED_EXAM_ID` = 62 OR `REGISTERED_EXAM_ID` = 63 OR `REGISTERED_EXAM_ID` = 64 OR `REGISTERED_EXAM_ID` = 65 OR `REGISTERED_EXAM_ID` = 66 OR `REGISTERED_EXAM_ID` = 67 OR `REGISTERED_EXAM_ID` = 68 OR `REGISTERED_EXAM_ID` = 69 OR `REGISTERED_EXAM_ID` = 70 OR `REGISTERED_EXAM_ID` = 71 OR `REGISTERED_EXAM_ID` = 72 OR `REGISTERED_EXAM_ID` = 73 OR `REGISTERED_EXAM_ID` = 74 OR `REGISTERED_EXAM_ID` = 75 OR `REGISTERED_EXAM_ID` = 76 OR `REGISTERED_EXAM_ID` = 77 OR `REGISTERED_EXAM_ID` = 78 OR `REGISTERED_EXAM_ID` = 79 OR `REGISTERED_EXAM_ID` = 80 OR `REGISTERED_EXAM_ID` = 81 OR `REGISTERED_EXAM_ID` = 52 OR `REGISTERED_EXAM_ID` = 84 OR `REGISTERED_EXAM_ID` = 85 OR `REGISTERED_EXAM_ID` = 86 OR `REGISTERED_EXAM_ID` = 87 OR `REGISTERED_EXAM_ID` = 88 OR `REGISTERED_EXAM_ID` = 89 OR `REGISTERED_EXAM_ID` = 90 OR `REGISTERED_EXAM_ID` = 91 OR `REGISTERED_EXAM_ID` = 92 OR `REGISTERED_EXAM_ID` = 93 OR `REGISTERED_EXAM_ID` = 94 OR `REGISTERED_EXAM_ID` = 95 OR `REGISTERED_EXAM_ID` = 96 OR `REGISTERED_EXAM_ID` = 97 OR `REGISTERED_EXAM_ID` = 98 OR `REGISTERED_EXAM_ID` = 99 OR `REGISTERED_EXAM_ID` = 100 
) AND `REGISTERED_STUDENTS_STATUS` = 0";



"select `du_medical`.`programs`.`PROGRAMS_ID` AS `PROGRAMS_ID`,`du_medical`.`programs`.`PROGRAMS_NAME` AS `PROGRAMS_NAME`,`du_medical`.`programs`.`PROGRAMS_STATUS` AS `PROGRAMS_STATUS`,`du_medical`.`course_year`.`COURSE_YEAR_ID` AS `COURSE_YEAR_ID`,`du_medical`.`course_year`.`COURSE_YEAR_CODE` AS `COURSE_YEAR_CODE`,`du_medical`.`course_year`.`COURSE_YEAR_TITLE` AS `COURSE_YEAR_TITLE`,`du_medical`.`course_year`.`COURSE_YEAR_STATUS` AS `COURSE_YEAR_STATUS`,`du_medical`.`registered_exam`.`REGISTERED_EXAM_ID` AS `REGISTERED_EXAM_ID`,`du_medical`.`registered_exam`.`REGISTERED_EXAM_YEAR` AS `REGISTERED_EXAM_YEAR`,`du_medical`.`registered_exam`.`LAST_DATE` AS `LAST_DATE`,`du_medical`.`registered_exam`.`COLLEGE_STUDENT_REGISTRATION` AS `COLLEGE_STUDENT_REGISTRATION`,`du_medical`.`registered_exam`.`STUDENT_FORM_FILL_UP` AS `STUDENT_FORM_FILL_UP`,`du_medical`.`registered_exam`.`curriculum` AS `curriculum`,`du_medical`.`registered_exam`.`REGISTERED_EXAM_LATE_FOR_FILL_UP` AS `REGISTERED_EXAM_LATE_FOR_FILL_UP`,`du_medical`.`registered_exam`.`ADMIT_CARD_ISSUE` AS `ADMIT_CARD_ISSUE`,`du_medical`.`registered_exam`.`EXAM_NAME` AS `EXAM_NAME`,`du_medical`.`registered_exam`.`exam_name_ext` AS `exam_name_ext`,`du_medical`.`registered_exam`.`EXAM_START_DATE` AS `EXAM_START_DATE`,`du_medical`.`registered_exam`.`STUDENTS_RE_EDIT` AS `STUDENTS_RE_EDIT`,`du_medical`.`registered_exam`.`REGISTERED_EXAM_STATUS` AS `REGISTERED_EXAM_STATUS`,`du_medical`.`registered_exam`.`REGISTERED_EXAM_RESULT_PUB` AS `REGISTERED_EXAM_RESULT_PUB`,`du_medical`.`session`.`SESSION_ID` AS `SESSION_ID`,`du_medical`.`session`.`SESSION_NAME` AS `SESSION_NAME`,`du_medical`.`session`.`SESSION_STATUS` AS `SESSION_STATUS` from ((((`du_medical`.`programs` join `du_medical`.`course_year` on((`du_medical`.`course_year`.`PROGRAMS_ID` = `du_medical`.`programs`.`PROGRAMS_ID`))) join `du_medical`.`registered_exam` on((`du_medical`.`registered_exam`.`COURSE_YEAR_ID` = `du_medical`.`course_year`.`COURSE_YEAR_ID`))) join `du_medical`.`allowed_session` on((`du_medical`.`allowed_session`.`REGISTERED_EXAM_ID` = `du_medical`.`registered_exam`.`REGISTERED_EXAM_ID`))) join `du_medical`.`session` on((`du_medical`.`session`.`SESSION_ID` = `du_medical`.`allowed_session`.`SESSION_ID`)))"


"select `du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ID` AS `ADMITTED_STUDENT_ID`,`du_medical99`.`admitted_student`.`SUBJECTS_ID` AS `SUBJECTS_ID`,(select `du_medical99`.`subjects`.`SUBJECTS_TITLE` from `du_medical99`.`subjects` where `du_medical99`.`subjects`.`SUBJECTS_ID` = `du_medical99`.`admitted_student`.`SUBJECTS_ID`) AS `SUBJECTS_TITLE`,`du_medical99`.`admitted_student`.`REGISTERED_COLLEGE_ID` AS `REGISTERED_COLLEGE_ID`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_ID` AS `REGISTERED_STUDENTS_ID`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_TYPE` AS `REGISTERED_STUDENTS_TYPE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_EXAM_ROLL` AS `REGISTERED_STUDENTS_EXAM_ROLL`,`du_medical99`.`registered_students`.`CENTER_ID` AS `CENTER_ID`,(select `du_medical99`.`registered_college`.`COLLEGE_NAME` from `du_medical99`.`registered_college` where `du_medical99`.`registered_college`.`REGISTERED_COLLEGE_ID` = `du_medical99`.`registered_students`.`CENTER_ID`) AS `CENTER_NAME`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_DATE` AS `REGISTERED_STUDENTS_DATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_COLLEGE_VERIFY` AS `REGISTERED_STUDENTS_COLLEGE_VERIFY`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_MOFIFICATION` AS `REGISTERED_STUDENTS_MOFIFICATION`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_LATE` AS `REGISTERED_STUDENTS_LATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_FORM_FILL_DATE` AS `REGISTERED_STUDENTS_FORM_FILL_DATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_STATUS` AS `REGISTERED_STUDENTS_STATUS`,`du_medical99`.`registered_exam`.`REGISTERED_EXAM_ID` AS `REGISTERED_EXAM_ID`,`du_medical99`.`selected_courses`.`SELECTED_COURSES_ID` AS `SELECTED_COURSES_ID`,`du_medical99`.`selected_courses`.`COURSE_CODE_TITLE_ID` AS `COURSE_CODE_TITLE_ID`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_CODE` AS `COURSE_CODE_TITLE_CODE`,`du_medical99`.`course_code_title`.`COURSE_YEAR_ID` AS `COURSE_YEAR_ID`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE` AS `COURSE_CODE_TITLE`,`du_medical99`.`course_code_title`.`course_code` AS `course_code`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_TYPE` AS `COURSE_CODE_TITLE_TYPE`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_CREDIT` AS `COURSE_CODE_TITLE_CREDIT` from ((((`du_medical99`.`admitted_student` join `du_medical99`.`registered_students` on(`du_medical99`.`registered_students`.`ADMITTED_STUDENT_ID` = `du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ID`)) join `du_medical99`.`registered_exam` on(`du_medical99`.`registered_exam`.`REGISTERED_EXAM_ID` = `du_medical99`.`registered_students`.`REGISTERED_EXAM_ID`)) join `du_medical99`.`selected_courses` on(`du_medical99`.`selected_courses`.`REGISTERED_STUDENTS_ID` = `du_medical99`.`registered_students`.`REGISTERED_STUDENTS_ID`)) join `du_medical99`.`course_code_title` on(`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_ID` = `du_medical99`.`selected_courses`.`COURSE_CODE_TITLE_ID`))"

"

INSERT INTO selected_courses (`REGISTERED_STUDENTS_ID`, `REGISTERED_EXAM_ID`, `COURSE_CODE_TITLE_ID`)
SELECT REGISTERED_STUDENTS_ID, 45, '532'
FROM registered_students
WHERE `REGISTERED_EXAM_ID` = 45

sudo apt-get install nmap

SELECT registered_students.REGISTERED_STUDENTS_ID,registered_students.ADMITTED_STUDENT_ID,admitted_student.ADMITTED_STUDENT_NAME,admitted_student.ADMITTED_STUDENT_REG_NO,registered_students.REGISTERED_STUDENTS_EXAM_ROLL,registered_students.REGISTERED_EXAM_ID,registered_exam.EXAM_NAME, registered_students.result FROM registered_students JOIN admitted_student on admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID JOIN registered_college ON registered_college.REGISTERED_COLLEGE_ID = admitted_student.REGISTERED_COLLEGE_ID JOIN registered_exam ON registered_exam.REGISTERED_EXAM_ID = registered_students.REGISTERED_EXAM_ID WHERE registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1 AND ( registered_students.REGISTERED_EXAM_ID = 27 OR registered_students.REGISTERED_EXAM_ID = 29 OR registered_students.REGISTERED_EXAM_ID = 99 ) 
"

"
SELECT * FROM `registered_students` WHERE (`REGISTERED_EXAM_ID` = 98 OR `REGISTERED_EXAM_ID` = 99 OR `REGISTERED_EXAM_ID` = 100 OR `REGISTERED_EXAM_ID` = 105 OR `REGISTERED_EXAM_ID` = 106) AND `REGISTERED_STUDENTS_COLLEGE_VERIFY` = 1


SELECT DISTINCT selected_courses.REGISTERED_STUDENTS_ID AS REG_ID, selected_courses.remarks_of FROM selected_courses JOIN registered_students ON selected_courses.REGISTERED_STUDENTS_ID = registered_students.REGISTERED_STUDENTS_ID WHERE (registered_students.REGISTERED_EXAM_ID = 98 OR registered_students.REGISTERED_EXAM_ID = 99 OR registered_students.REGISTERED_EXAM_ID = 100 OR registered_students.REGISTERED_EXAM_ID = 105 OR registered_students.REGISTERED_EXAM_ID = 106) AND registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 0 AND selected_courses.remarks_of != ''


UPDATE selected_courses JOIN registered_students ON selected_courses.REGISTERED_STUDENTS_ID = registered_students.REGISTERED_STUDENTS_ID SET registered_students.`REGISTERED_STUDENTS_COLLEGE_VERIFY` = 1 WHERE (registered_students.REGISTERED_EXAM_ID = 98 OR registered_students.REGISTERED_EXAM_ID = 99 OR registered_students.REGISTERED_EXAM_ID = 100 OR registered_students.REGISTERED_EXAM_ID = 105 OR registered_students.REGISTERED_EXAM_ID = 106) AND registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 0 AND selected_courses.remarks_of != ''


SELECT admitted_student.ADMITTED_STUDENT_REG_NO AS REG_DU, registered_students.REGISTERED_STUDENTS_ID AS REG_ID FROM `registered_students` JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE registered_students.REGISTERED_EXAM_ID = 42 AND admitted_student.REGISTERED_COLLEGE_ID = 145

INSERT INTO selected_courses (REGISTERED_STUDENTS_ID,REGISTERED_EXAM_ID,COURSE_CODE_TITLE_ID)
SELECT registered_students.REGISTERED_STUDENTS_ID,42,264 FROM `registered_students` JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE registered_students.REGISTERED_EXAM_ID = 42 AND admitted_student.REGISTERED_COLLEGE_ID = 145 

INSERT INTO selected_courses (REGISTERED_STUDENTS_ID,REGISTERED_EXAM_ID,COURSE_CODE_TITLE_ID)
SELECT registered_students.REGISTERED_STUDENTS_ID,59,723 FROM `registered_students` JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE registered_students.REGISTERED_EXAM_ID = 59
"

"
CREATE TABLE each_semister_result(
    ID INT NOT NULL AUTO_INCREMENT,
    REGISTERED_STUDENTS_ID INT NOT NULL,
    REGISTERED_EXAM_ID BIGINT NOT NULL,
    semester_I_total_credits VARCHAR(255) NULL,
    semester_I_total_marks VARCHAR(255) NULL,
    semester_I_grade_point VARCHAR(255) NULL,
    semester_II_total_credits VARCHAR(255) NULL,
    semester_II_total_marks VARCHAR(255) NULL,
    semester_II_grade_point VARCHAR(255) NULL,
    semester_III_total_credits VARCHAR(255) NULL,
    semester_III_total_marks VARCHAR(255) NULL,
    semester_III_grade_point VARCHAR(255) NULL,
    semester_IV_total_credits VARCHAR(255) NULL,
    semester_IV_total_marks VARCHAR(255) NULL,
    semester_IV_grade_point VARCHAR(255) NULL,
    semester_V_total_credits VARCHAR(255) NULL,
    semester_V_total_marks VARCHAR(255) NULL,
    semester_V_grade_point VARCHAR(255) NULL,
    semester_VI_total_credits VARCHAR(255) NULL,
    semester_VI_total_marks VARCHAR(255) NULL,
    semester_VI_grade_point VARCHAR(255) NULL,
    semester_VII_total_credits VARCHAR(255) NULL,
    semester_VII_total_marks VARCHAR(255) NULL,
    semester_VII_grade_point VARCHAR(255) NULL,
    semester_VIII_total_credits VARCHAR(255) NULL,
    semester_VIII_total_marks VARCHAR(255) NULL,
    semester_VIII_grade_point VARCHAR(255) NULL, 
    cumulative_grade_point_cgpa VARCHAR(255) NULL,
    final_result VARCHAR(255) NULL,
    result_publish INT DEFAULT 0,
    PRIMARY KEY (ID,REGISTERED_STUDENTS_ID,REGISTERED_EXAM_ID),
    CONSTRAINT fk_REGISTERED_STUDENTS_ID_im1 FOREIGN KEY (REGISTERED_STUDENTS_ID) 
    REFERENCES registered_students (REGISTERED_STUDENTS_ID),
    CONSTRAINT fk_REGISTERED_EXAM_ID_im1 FOREIGN KEY (REGISTERED_EXAM_ID) 
    REFERENCES registered_exam (REGISTERED_EXAM_ID)
)

UPDATE `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN programs ON programs.PROGRAMS_ID = course_year.PROGRAMS_ID SET registered_exam.course_code_on_of = 'SHOW' WHERE ( programs.PROGRAMS_ID = 12 OR programs.PROGRAMS_ID = 13 OR programs.PROGRAMS_ID = 14 OR programs.PROGRAMS_ID = 17 OR programs.PROGRAMS_ID = 18 OR programs.PROGRAMS_ID = 19)

SELECT * FROM course_code_title ORDER BY CHAR_LENGTH(`course_code`) DESC

1 'or' 1 '=' 1

"

"
CREATE TABLE payment_by_college_exam(
    id INT NOT NULL AUTO_INCREMENT,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    REGISTERED_EXAM_ID BIGINT NOT NULL,
    total_amount VARCHAR(255) NULL,
    description longtext NULL,
    pay_status INT DEFAULT 0,
    PRIMARY KEY (id,REGISTERED_COLLEGE_ID,REGISTERED_EXAM_ID),
    CONSTRAINT REGISTERED_COLLEGE_ID_pay1 FOREIGN KEY (REGISTERED_COLLEGE_ID) REFERENCES registered_college (REGISTERED_COLLEGE_ID),
    CONSTRAINT REGISTERED_EXAM_ID_pay1 FOREIGN KEY (REGISTERED_EXAM_ID) REFERENCES registered_exam (REGISTERED_EXAM_ID)
)


id,exam_id,college_name,du_reg,session,roll,name,L1,G1,L2,G2,L3,G3,L4,G4,L5,G5,L6,G6,L7,G7,L8,G8,L9,G9,TM,L3T1,L2T2,L2T1,L1T2,L1T1,cgpa,result

exam_id,college_name,du_reg,session,roll,name,L1,G1,L2,G2,L3,G3,L4,G4,L5,G5,L6,G6,L7,G7,L8,G8,L9,G9,TM,L4T1,L3T2,L3T1,L2T2,L2T1,L1T2,L1T1,cgpa,result

exam_id,college_name,du_reg,session,roll,name,L1,G1,L2,G2,L3,G3,L4,G4,L5,G5,L6,G6,L7,G7,L8,G8,L9,G9,L10,G10,TM,L3T1,L2T2,L2T1,L1T2,L1T1,cgpa,result

B.Sc. In Textile Engineering Level-4, Term-I Examination of 2020

UPDATE `txe_l3_t1` SET `exam_name_new` = "B.Sc. in Textile Engineering Level-4 <br style='padding:0;margin:0;'>Term-I Retake Examination of 2020"  WHERE `exam_id` = 4

UPDATE `txe_l3_t1` SET `exam_name_new` = "B.Sc. in Textile Engineering Level-4 <br style='padding:0;margin:0;'>Term-I Examination of 2020", held_in = "B.Sc. In Textile Engineering Level-4, Term-I Examination of 2020, <span style='font-weight: bold;'> held in July, 2021</span>"   WHERE `exam_id` = 7

UPDATE `txe_l3_t1` SET `exam_name_new` = "B.Sc. in Fashion Design & Apparel Engineering Level-3, Term-1 <br style='padding:0;margin:0;'>Examination of 2020"  WHERE `exam_id` = 6

UPDATE txe_l3_t1 SET held_in = "B.Sc. in FDAE Level-3, Term-1 Examination of 2020, <span style='font-weight: bold;'> held in August 2021</span>"  WHERE exam_id = 6

UPDATE txe_l3_t1 SET exam_id = 5
SELECT * FROM txe_l3_t1 WHERE ROLL = 1101
OR ROLL = 1102
OR ROLL = 1103
OR ROLL = 1104
OR ROLL = 1105
OR ROLL = 1106
OR ROLL = 1107
OR ROLL = 1108
OR ROLL = 1109
OR ROLL = 1110
OR ROLL = 1111
OR ROLL = 1112
OR ROLL = 1113
OR ROLL = 1114
OR ROLL = 1115
OR ROLL = 1116
OR ROLL = 1117
OR ROLL = 1118
OR ROLL = 1119
OR ROLL = 1120
OR ROLL = 1121
OR ROLL = 1122
OR ROLL = 1123
OR ROLL = 1124
OR ROLL = 1125
OR ROLL = 1126
OR ROLL = 1127
OR ROLL = 1128
OR ROLL = 1129
OR ROLL = 1130
OR ROLL = 1131
OR ROLL = 1132
OR ROLL = 1133
OR ROLL = 1134
OR ROLL = 1135
OR ROLL = 1136
OR ROLL = 1137
OR ROLL = 1138
OR ROLL = 1139
OR ROLL = 1140
OR ROLL = 1141
OR ROLL = 1142
OR ROLL = 1143
OR ROLL = 1144
OR ROLL = 1145
OR ROLL = 1146
OR ROLL = 1147
OR ROLL = 1148
OR ROLL = 1149
OR ROLL = 1150
OR ROLL = 1151
OR ROLL = 1152
OR ROLL = 1153
OR ROLL = 1154
OR ROLL = 1155
OR ROLL = 1357
OR ROLL = 1358
OR ROLL = 1359
OR ROLL = 1360
OR ROLL = 1361
OR ROLL = 1362
OR ROLL = 1363
WHERE exam_id = 3

"

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



"

"
CREATE TABLE departmet_by_login(
    dep_id INT NOT NULL AUTO_INCREMENT,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    PROGRAMS_ID INT NOT NULL,
    college_program_id INT NOT NULL,
    DEP_PASSWORD VARCHAR(255) NULL,
    RED_PASSWORD VARCHAR(255) NULL,
    dep_status INT DEFAULT 1,
    PRIMARY KEY (dep_id,REGISTERED_COLLEGE_ID,PROGRAMS_ID,college_program_id),
    CONSTRAINT REGISTERED_COLLEGE_ID_dep1 FOREIGN KEY (REGISTERED_COLLEGE_ID) REFERENCES registered_college (REGISTERED_COLLEGE_ID),
    CONSTRAINT PROGRAMS_ID_dep1 FOREIGN KEY (PROGRAMS_ID) REFERENCES programs(PROGRAMS_ID),
    CONSTRAINT college_program_id_dep1 FOREIGN KEY (college_program_id) REFERENCES college_program(college_program_id)
)

INSERT INTO departmet_by_login(REGISTERED_COLLEGE_ID,PROGRAMS_ID,college_program_id,DEP_PASSWORD,RED_PASSWORD)
SELECT registered_college.REGISTERED_COLLEGE_ID,programs.PROGRAMS_ID,registered_college.college_program, MD5(registered_college.REGISTERED_COLLEGE_PASSWORD),registered_college.REGISTERED_COLLEGE_PASSWORD FROM registered_college JOIN programs ON registered_college.college_program = programs.college_program_id WHERE registered_college.college_program = programs.college_program_id ORDER BY programs.college_program_id ASC

";

/*Query the list of CITY names from STATION that do not start with vowels and do not end with vowels. Your result cannot contain duplicates.*/


"

SELECT DISTINCT CITY FROM STATION WHERE ( NOT (CITY LIKE 'a%' OR CITY LIKE 'e%' OR CITY LIKE 'i%' OR CITY LIKE 'o%' OR CITY LIKE 'u%')) AND (NOT (CITY LIKE '%a' OR CITY LIKE '%e' OR CITY LIKE '%i' OR CITY LIKE '%o' OR CITY LIKE '%u'));

"

/*Query the Name of any student in STUDENTS who scored higher than 75 Marks. Order your output by the last three characters of each name. If two or more students both have names ending in the same last three characters (i.e.: Bobby, Robby, etc.), secondary sort them by ascending ID.*/

"
 SELECT Name FROM STUDENTS WHERE Marks > 75 ORDER BY RIGHT(Name, 3), ID ASC
"

/*Write a query that prints a list of employee names (i.e.: the name attribute) from the Employee table in alphabetical order.*/

"
SELECT name FROM Employee ORDER BY name ASC

"
/*Write a query that prints a list of employee names (i.e.: the name attribute) for employees in Employee having a salary greater than $2000 per month who have been employees for less than 10 months. Sort your result by ascending employee_id.*/

"
SELECT name FROM Employee WHERE salary > 2000 AND months < 10 ORDER BY employee_id ASC
"

Write a query identifying the type of each record in the TRIANGLES table using its three side lengths. Output one of the following statements for each record in the table:

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
SELECT company_code, founder, 
(SELECT COUNT(DISTINCT lead_manager_code) FROM lead_manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT senior_manager_code) FROM senior_manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT manager_code) FROM manager WHERE company_code = c.company_code), 
(SELECT COUNT(DISTINCT employee_code) FROM employee WHERE company_code = c.company_code) FROM company c;  


"

"
SELECT * FROM registered_exam WHERE COURSE_YEAR_ID = 69 OR COURSE_YEAR_ID = 70 OR COURSE_YEAR_ID = 71 OR COURSE_YEAR_ID = 72 OR COURSE_YEAR_ID = 73 OR COURSE_YEAR_ID = 74 OR COURSE_YEAR_ID = 75 OR COURSE_YEAR_ID = 76  
"
/// Database Tables Column value with in string replice 	
"
UPDATE 
    admitted_student 
SET
    `ADMITTED_STUDENT_NAME` = REPLACE(`ADMITTED_STUDENT_NAME`, 'MdImranH','&')
WHERE
    `ADMITTED_STUDENT_STATUS` = 1;
    
"
	
//////////////////// 14- 03 -2023 ////////////////////
	"
	DELETE selected_courses 
FROM selected_courses
INNER JOIN registered_students
  ON registered_students.REGISTERED_STUDENTS_ID = selected_courses.REGISTERED_STUDENTS_ID
WHERE registered_students.REGISTERED_STUDENTS_EXAM_ROLL BETWEEN 1201 AND 1207


INSERT INTO selected_courses (`REGISTERED_STUDENTS_ID`, `REGISTERED_EXAM_ID`, `COURSE_CODE_TITLE_ID`)
SELECT REGISTERED_STUDENTS_ID, 1821, '6307'
FROM registered_students
WHERE REGISTERED_EXAM_ID = 1821 AND REGISTERED_STUDENTS_EXAM_ROLL BETWEEN 16801 AND 16850
	
	"

"

SELECT registered_exam.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID WHERE course_year.PROGRAMS_ID = 1 AND RIGHT(`RESULT_PUBLISH_DATE`, 2) = '23'

///   mbbs total students count ///   

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

///   MBBS TOTAL PASSED STUDENTS //

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (registered_students.result = 'Passed') AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

/// MBBS TOTAL MALE STUDENTS ///

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (admitted_student.ADMITTED_STUDENT_GENDER = 'Male') AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

/// MBBS TOTAL MALE PASSED STUDENTS ///

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (admitted_student.ADMITTED_STUDENT_GENDER = 'Male') AND (registered_students.result = 'Passed') AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

/// MBBS TOTAL FEMALE STUDENTS ///

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (admitted_student.ADMITTED_STUDENT_GENDER = 'Female') AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

/// MBBS TOTAL FEMALE PASSED STUDENTS ///

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (admitted_student.ADMITTED_STUDENT_GENDER = 'Female') AND (registered_students.result = 'Passed') AND (course_year.PROGRAMS_ID = 1) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

---------------------------------

course_year.PROGRAMS_ID = 2 OR course_year.PROGRAMS_ID = 3 OR course_year.PROGRAMS_ID = 5 OR course_year.PROGRAMS_ID = 6 OR course_year.PROGRAMS_ID = 7 OR course_year.PROGRAMS_ID = 10 OR course_year.PROGRAMS_ID = 15 OR course_year.PROGRAMS_ID = 16 OR course_year.PROGRAMS_ID = 19 OR course_year.PROGRAMS_ID = 21 OR course_year.PROGRAMS_ID = 22 OR course_year.PROGRAMS_ID = 23 

course_year.PROGRAMS_ID = 8 OR course_year.PROGRAMS_ID = 9 OR course_year.PROGRAMS_ID = 27  OR course_year.PROGRAMS_ID = 53 

SELECT registered_students.* FROM `registered_exam` JOIN course_year ON course_year.COURSE_YEAR_ID = registered_exam.COURSE_YEAR_ID JOIN registered_students ON registered_students.REGISTERED_EXAM_ID = registered_exam.REGISTERED_EXAM_ID WHERE (registered_students.REGISTERED_STUDENTS_COLLEGE_VERIFY = 1) AND (course_year.PROGRAMS_ID = 2 OR course_year.PROGRAMS_ID = 3 OR course_year.PROGRAMS_ID = 5 OR course_year.PROGRAMS_ID = 6 OR course_year.PROGRAMS_ID = 7 OR course_year.PROGRAMS_ID = 10 OR course_year.PROGRAMS_ID = 15 OR course_year.PROGRAMS_ID = 16 OR course_year.PROGRAMS_ID = 19 OR course_year.PROGRAMS_ID = 21 OR course_year.PROGRAMS_ID = 22 OR course_year.PROGRAMS_ID = 23 ) AND RIGHT(registered_exam.RESULT_PUBLISH_DATE, 2) = '23'

/////////////////

UPDATE `registered_students` SET sub_honrs = REPLACE(sub_honrs, 'Honours:', '') WHERE `sub_honrs` LIKE "%Honours:%"



"
	
	
?>
