<?php
echo "<br>"."Date Functions"."<br><br><hr>";
// date(format,timestamp)
echo "Today Is : ".date("d"); //=>numeric format ma date return karse (01 to 31) 1 thi 9 ma agal 0 avse
echo "<br>";
echo "Today Is : ".date("j"); //=> numeric form ma date return krse but 1 thi 9 ma agal 0 avse nahi  (1 to 31)
echo "<br>";
echo "Today Is : ".date("dS"); // => date ni sathe st,nd,th add karse
echo "<br><hr>";

echo "Month Is : ".date("F"); // => month na name full name ma apse (january,febuary,march...)
echo "<br>";
echo "Month Is : ".date("M"); // => month na name na first 3 character apse (jan,feb,mar..)
echo "<br>";
echo "Month Is : ".date("m"); // => month na name numeric form ma apse (01 to 12) 1 thi 9 ma agal 0 avse.
echo "<br><hr>";

echo "Year Is : ".date("Y"); // => 4 digit ma year return karse (2023);
echo "<br>";
echo "Year Is : ".date("y"); // => year na last 2 digit return karse (23);
echo "<br><hr>";

echo "Full Date Is  : ".date("d/F/Y");  //=> full date apse 
echo "<br>";
echo "Full Date Is  : ".date("Y/F/d"); // =>year/month/date apse
echo "<br><hr>";

echo "Week Day Is : ".date("D");   // => week day return karse first 3 char ma (mon,tue,thu)
echo "<br>";
echo "Week Day Is  : ".date("l");  // => week day return krsr with full name ( monday,tuesday,wednsday)
echo "<br>";
echo "Week Day Is  : ".date("N");  // => week day numeric form ma apse monday=1,tuesday=2,wensday=3,thursday=4
echo "<br>";
echo "Week Day Is  : ".date("w");  // => week day return 1 to 6 (sunday=1,monday=2,tue=3,wed=4..)

echo "<br><br><hr><hr><br><br>";
//1) date_create("date/time",timezon) => this function return new date as datetime object.
//2) date_format(object,format) =>this function will return the date according to the provided format.
$date = date_create("23-06-2030",timezone_open("Asia/Kolkata"));
echo date_format($date,"d/F/Y");
echo "<br>";


//3) mktime(hour,minute,second,month,day,year)
echo "Today's Date : ".date("d/F/Y");
echo "<br>";
echo "Past Date using mktime : ".date("d/F/Y/l",mktime(0,0,0,10,04,1970));
echo "<br>";

//4) date_diff($date1,$date2,absolute) => return the difference between two date
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br>";


// 5) date_modify(object,modify) => use to modify the existing date
$date = date_create("10-03-2023");
date_modify($date,"+15 days");
echo date_format($date,"d,F,Y");    


//6) date_parse(date) => return the date in associative array
date_default_timezone_set("Asia/kolkata");
$date = date_parse("12/09/2023 10:30:20");
echo "<pre>";
print_r($date);
?>