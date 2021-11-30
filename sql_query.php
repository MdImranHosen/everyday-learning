<?php

/////////////////////////// 1 st ///////////////

"CREATE TABLE students(
    ADMITTED_STUDENT_ID BIGINT NOT NULL AUTO_INCREMENT,
    SESSION_ID INT NOT NULL,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    SUBJECTS_ID mediumint NOT NULL,
    college_program_id INT NOT NULL,
    PROGRAM_ID INT NOT NULL,
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
    PRIMARY KEY (ADMITTED_STUDENT_ID,SUBJECTS_ID,SESSION_ID,REGISTERED_COLLEGE_ID,college_program_id, PROGRAM_ID),
    CONSTRAINT SESSION_ID_FK1 FOREIGN KEY(SESSION_ID) REFERENCES session(SESSION_ID),
    CONSTRAINT REGISTERED_COLLEGE_ID_FK1 FOREIGN KEY(REGISTERED_COLLEGE_ID) REFERENCES registered_college(REGISTERED_COLLEGE_ID),
    CONSTRAINT SUBJECTS_ID_FK1 FOREIGN KEY(SUBJECTS_ID) REFERENCES subjects(SUBJECTS_ID),
    CONSTRAINT college_program_id_FK1 FOREIGN KEY(college_program_id) REFERENCES college_program(college_program_id),
    CONSTRAINT PROGRAM_ID_FK1 FOREIGN KEY(PROGRAM_ID) REFERENCES programs(PROGRAMS_ID)
)"

///////////////  2 nd ///////////////
"INSERT INTO students (ADMITTED_STUDENT_ID,SESSION_ID,REGISTERED_COLLEGE_ID,SUBJECTS_ID,college_program_id,PROGRAM_ID,ADMITTED_STUDENT_REG_NO, ADMITTED_STUDENT_NAME,STUDENT_BANGLA_NAME,ADMITTED_STUDENT_FATHERS_N,ADMITTED_STUDENT_MOTHERS_N,ADMITTED_STUDENT_ADDRESS,post_office,police_station,upa_zilla,district,present_house_road,present_post_office,present_police_station,present_upa_zilla, present_district,ADMITTED_STUDENT_CONTACT_NO,ADMITTED_STUDENT_DOB,NATIONALITY,RELIGION,CASTE_SECT,parents_income,ADMITTED_STUDENT_GENDER,ADMITTED_STUDENT_EMAIL,image_dir,s_signicher,PASSWORD,count_sent_sms,ACCOUNT_CREATE_STATUS,ADMITTED_STUDENT_STATUS)
SELECT `ADMITTED_STUDENT_ID`, `SESSION_ID`, `REGISTERED_COLLEGE_ID`,`SUBJECTS_ID`,`college_program_id`, `PROGRAM_ID`, `ADMITTED_STUDENT_REG_NO`, `ADMITTED_STUDENT_NAME`, `STUDENT_BANGLA_NAME`, `ADMITTED_STUDENT_FATHERS_N`, `ADMITTED_STUDENT_MOTHERS_N`, `ADMITTED_STUDENT_ADDRESS`, `post_office`, `police_station`, `upa_zilla`, `district`, `present_house_road`, `present_post_office`, `present_police_station`, `present_upa_zilla`, `present_district`, `ADMITTED_STUDENT_CONTACT_NO`, `ADMITTED_STUDENT_DOB`, `NATIONALITY`, `RELIGION`, `CASTE_SECT`, `parents_income`, `ADMITTED_STUDENT_GENDER`, `ADMITTED_STUDENT_EMAIL`, `image_dir`, `s_signicher`, `PASSWORD`, `count_sent_sms`, `ACCOUNT_CREATE_STATUS`, `ADMITTED_STUDENT_STATUS` FROM admitted_student";

/////////////// 3 rd /////////////////

"CREATE TABLE admitted_student(
    ADMITTED_STUDENT_ID BIGINT NOT NULL AUTO_INCREMENT,
    SESSION_ID INT NOT NULL,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    SUBJECTS_ID mediumint NOT NULL,
    college_program_id INT NOT NULL,
    PROGRAM_ID INT NOT NULL,
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
    PRIMARY KEY (ADMITTED_STUDENT_ID,SUBJECTS_ID,SESSION_ID,REGISTERED_COLLEGE_ID,college_program_id, PROGRAM_ID),
    CONSTRAINT SESSION_ID_FM1 FOREIGN KEY(SESSION_ID) REFERENCES session(SESSION_ID),
    CONSTRAINT REGISTERED_COLLEGE_ID_FM1 FOREIGN KEY(REGISTERED_COLLEGE_ID) REFERENCES registered_college(REGISTERED_COLLEGE_ID),
    CONSTRAINT SUBJECTS_ID_FM1 FOREIGN KEY(SUBJECTS_ID) REFERENCES subjects(SUBJECTS_ID),
    CONSTRAINT college_program_id_FM1 FOREIGN KEY(college_program_id) REFERENCES college_program(college_program_id),
    CONSTRAINT PROGRAM_ID_FM1 FOREIGN KEY(PROGRAM_ID) REFERENCES programs(PROGRAMS_ID)
)"




/////////////////// 4 \\\\\\\\\\\\\\\\\\\\\

"INSERT INTO admitted_student (ADMITTED_STUDENT_ID,SESSION_ID,REGISTERED_COLLEGE_ID,SUBJECTS_ID,college_program_id,PROGRAM_ID,ADMITTED_STUDENT_REG_NO, ADMITTED_STUDENT_NAME,STUDENT_BANGLA_NAME,ADMITTED_STUDENT_FATHERS_N,ADMITTED_STUDENT_MOTHERS_N,ADMITTED_STUDENT_ADDRESS,post_office,police_station,upa_zilla,district,present_house_road,present_post_office,present_police_station,present_upa_zilla, present_district,ADMITTED_STUDENT_CONTACT_NO,ADMITTED_STUDENT_DOB,NATIONALITY,RELIGION,CASTE_SECT,parents_income,ADMITTED_STUDENT_GENDER,ADMITTED_STUDENT_EMAIL,image_dir,s_signicher,PASSWORD,count_sent_sms,ACCOUNT_CREATE_STATUS,ADMITTED_STUDENT_STATUS)
SELECT `ADMITTED_STUDENT_ID`, `SESSION_ID`, `REGISTERED_COLLEGE_ID`,`SUBJECTS_ID`,`college_program_id`, `PROGRAM_ID`, `ADMITTED_STUDENT_REG_NO`, `ADMITTED_STUDENT_NAME`, `STUDENT_BANGLA_NAME`, `ADMITTED_STUDENT_FATHERS_N`, `ADMITTED_STUDENT_MOTHERS_N`, `ADMITTED_STUDENT_ADDRESS`, `post_office`, `police_station`, `upa_zilla`, `district`, `present_house_road`, `present_post_office`, `present_police_station`, `present_upa_zilla`, `present_district`, `ADMITTED_STUDENT_CONTACT_NO`, `ADMITTED_STUDENT_DOB`, `NATIONALITY`, `RELIGION`, `CASTE_SECT`, `parents_income`, `ADMITTED_STUDENT_GENDER`, `ADMITTED_STUDENT_EMAIL`, `image_dir`, `s_signicher`, `PASSWORD`, `count_sent_sms`, `ACCOUNT_CREATE_STATUS`, `ADMITTED_STUDENT_STATUS` FROM students";


//////////// 4 th ////////////

"CREATE TABLE allowed_session_imran(
    ALLOWED_SESSION_ID INT NOT NULL AUTO_INCREMENT,
    REGISTERED_EXAM_ID BIGINT NOT NULL,
    SESSION_ID INT NOT NULL,
    ALLOWED_SESSION_STATUS INT DEFAULT 1,
    PRIMARY KEY (ALLOWED_SESSION_ID, REGISTERED_EXAM_ID, SESSION_ID),
    CONSTRAINT REGISTERED_EXAM_ID_AS1 FOREIGN KEY (REGISTERED_EXAM_ID) REFERENCES registered_exam (REGISTERED_EXAM_ID),
    CONSTRAINT SESSION_ID_AS1 FOREIGN KEY (SESSION_ID) REFERENCES session(SESSION_ID)
)"


"CREATE TABLE teachers(
    teachers_id INT NOT NULL AUTO_INCREMENT,
    REGISTERED_COLLEGE_ID INT NOT NULL,
    college_program_id INT NOT NULL,
    teacher_name VARCHAR(255) NULL,
    phone_number VARCHAR(255) NULL,
    teacher_email VARCHAR(255) NULL,
    teachter_designation TEXT NULL,
    teacher_department TEXT NULL,
    t_status INT DEFAULT 0,
    PRIMARY KEY (teachers_id, REGISTERED_COLLEGE_ID, college_program_id),
    CONSTRAINT REGISTERED_COLLEGE_ID_ts1 FOREIGN KEY (REGISTERED_COLLEGE_ID) REFERENCES registered_college (REGISTERED_COLLEGE_ID),
    CONSTRAINT te_college_program_ts1 FOREIGN KEY (college_program_id) REFERENCES college_program(college_program_id)
)"

////////////////////// ********** students_view ******** \\\\\\\\\\\\\\\\\\\\\

"CREATE VIEW students_view AS 
select `du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ID` AS `ADMITTED_STUDENT_ID`,`du_medical99`.`admitted_student`.`SESSION_ID` AS `SESSION_ID`,`du_medical99`.`session`.`SESSION_NAME` AS `SESSION_NAME`,`du_medical99`.`admitted_student`.`count_sent_sms` AS `count_sent_sms`,`du_medical99`.`admitted_student`.`REGISTERED_COLLEGE_ID` AS `REGISTERED_COLLEGE_ID`,`du_medical99`.`registered_college`.`COLLEGE_NAME` AS `COLLEGE_NAME`,`du_medical99`.`admitted_student`.`SUBJECTS_ID` AS `SUBJECTS_ID`,`du_medical99`.`subjects`.`SUBJECTS_TITLE` AS `SUBJECTS_TITLE`,`du_medical99`.`subjects`.`PROGRAMS_ID` AS `PROGRAMS_ID`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_REG_NO` AS `ADMITTED_STUDENT_REG_NO`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_NAME` AS `ADMITTED_STUDENT_NAME`,`du_medical99`.`admitted_student`.`STUDENT_BANGLA_NAME` AS `STUDENT_BANGLA_NAME`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_FATHERS_N` AS `ADMITTED_STUDENT_FATHERS_N`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_MOTHERS_N` AS `ADMITTED_STUDENT_MOTHERS_N`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ADDRESS` AS `ADMITTED_STUDENT_ADDRESS`,`du_medical99`.`admitted_student`.`post_office` AS `post_office`,`du_medical99`.`admitted_student`.`police_station` AS `police_station`,`du_medical99`.`admitted_student`.`upa_zilla` AS `upa_zilla`,`du_medical99`.`admitted_student`.`district` AS `district`,`du_medical99`.`admitted_student`.`NATIONALITY` AS `NATIONALITY`,`du_medical99`.`admitted_student`.`RELIGION` AS `RELIGION`,`du_medical99`.`admitted_student`.`CASTE_SECT` AS `CASTE_SECT`,`du_medical99`.`admitted_student`.`parents_income` AS `parents_income`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_DOB` AS `ADMITTED_STUDENT_DOB`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_CONTACT_NO` AS `ADMITTED_STUDENT_CONTACT_NO`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_GENDER` AS `ADMITTED_STUDENT_GENDER`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_EMAIL` AS `ADMITTED_STUDENT_EMAIL`,`du_medical99`.`admitted_student`.`ADMITTED_STUDENT_STATUS` AS `ADMITTED_STUDENT_STATUS`,`du_medical99`.`admitted_student`.`ACCOUNT_CREATE_STATUS` AS `ACCOUNT_CREATE_STATUS`,`du_medical99`.`admitted_student`.`PASSWORD` AS `PASSWORD` from (((`du_medical99`.`admitted_student` join `du_medical99`.`session` on((`du_medical99`.`session`.`SESSION_ID` = `du_medical99`.`admitted_student`.`SESSION_ID`))) join `du_medical99`.`registered_college` on((`du_medical99`.`registered_college`.`REGISTERED_COLLEGE_ID` = `du_medical99`.`admitted_student`.`REGISTERED_COLLEGE_ID`))) join `du_medical99`.`subjects` on((`du_medical99`.`subjects`.`SUBJECTS_ID` = `du_medical99`.`admitted_student`.`SUBJECTS_ID`)))"


////////////////////// ********** selected_course_view ******** \\\\\\\\\\\\\\\\\\\\\

" CREATE VIEW selected_course_view AS
  select `du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ID` AS `ADMITTED_STUDENT_ID`,`du_medical99`.`admitted_student`.`SUBJECTS_ID` AS `SUBJECTS_ID`,(select `du_medical99`.`subjects`.`SUBJECTS_TITLE` from `du_medical99`.`subjects` where `du_medical99`.`subjects`.`SUBJECTS_ID` = `du_medical99`.`admitted_student`.`SUBJECTS_ID`) AS `SUBJECTS_TITLE`,`du_medical99`.`admitted_student`.`REGISTERED_COLLEGE_ID` AS `REGISTERED_COLLEGE_ID`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_ID` AS `REGISTERED_STUDENTS_ID`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_TYPE` AS `REGISTERED_STUDENTS_TYPE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_EXAM_ROLL` AS `REGISTERED_STUDENTS_EXAM_ROLL`,`du_medical99`.`registered_students`.`CENTER_ID` AS `CENTER_ID`,(select `du_medical99`.`registered_college`.`COLLEGE_NAME` from `du_medical99`.`registered_college` where `du_medical99`.`registered_college`.`REGISTERED_COLLEGE_ID` = `du_medical99`.`registered_students`.`CENTER_ID`) AS `CENTER_NAME`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_DATE` AS `REGISTERED_STUDENTS_DATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_COLLEGE_VERIFY` AS `REGISTERED_STUDENTS_COLLEGE_VERIFY`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_MOFIFICATION` AS `REGISTERED_STUDENTS_MOFIFICATION`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_LATE` AS `REGISTERED_STUDENTS_LATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_FORM_FILL_DATE` AS `REGISTERED_STUDENTS_FORM_FILL_DATE`,`du_medical99`.`registered_students`.`REGISTERED_STUDENTS_STATUS` AS `REGISTERED_STUDENTS_STATUS`,`du_medical99`.`registered_exam`.`REGISTERED_EXAM_ID` AS `REGISTERED_EXAM_ID`,`du_medical99`.`selected_courses`.`SELECTED_COURSES_ID` AS `SELECTED_COURSES_ID`,`du_medical99`.`selected_courses`.`COURSE_CODE_TITLE_ID` AS `COURSE_CODE_TITLE_ID`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_CODE` AS `COURSE_CODE_TITLE_CODE`,`du_medical99`.`course_code_title`.`COURSE_YEAR_ID` AS `COURSE_YEAR_ID`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE` AS `COURSE_CODE_TITLE`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_TYPE` AS `COURSE_CODE_TITLE_TYPE`,`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_CREDIT` AS `COURSE_CODE_TITLE_CREDIT` from ((((`du_medical99`.`admitted_student` join `du_medical99`.`registered_students` on(`du_medical99`.`registered_students`.`ADMITTED_STUDENT_ID` = `du_medical99`.`admitted_student`.`ADMITTED_STUDENT_ID`)) join `du_medical99`.`registered_exam` on(`du_medical99`.`registered_exam`.`REGISTERED_EXAM_ID` = `du_medical99`.`registered_students`.`REGISTERED_EXAM_ID`)) join `du_medical99`.`selected_courses` on(`du_medical99`.`selected_courses`.`REGISTERED_STUDENTS_ID` = `du_medical99`.`registered_students`.`REGISTERED_STUDENTS_ID`)) join `du_medical99`.`course_code_title` on(`du_medical99`.`course_code_title`.`COURSE_CODE_TITLE_ID` = `du_medical99`.`selected_courses`.`COURSE_CODE_TITLE_ID`))"


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


SELECT admitted_student.ADMITTED_STUDENT_REG_NO AS REG_DU, registered_students.REGISTERED_STUDENTS_ID AS REG_ID FROM `registered_students` JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE registered_students.REGISTERED_EXAM_ID = 58 AND admitted_student.REGISTERED_COLLEGE_ID = 147

INSERT INTO selected_courses (REGISTERED_STUDENTS_ID,REGISTERED_EXAM_ID,COURSE_CODE_TITLE_ID)
SELECT registered_students.REGISTERED_STUDENTS_ID,39,604 FROM `registered_students` JOIN admitted_student ON admitted_student.ADMITTED_STUDENT_ID = registered_students.ADMITTED_STUDENT_ID WHERE registered_students.REGISTERED_EXAM_ID = 39 AND admitted_student.REGISTERED_COLLEGE_ID = 145 


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

"
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
