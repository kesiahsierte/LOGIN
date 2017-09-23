
 logo
	
Main Menu▼
Blogs
LINQ
WCF
Windows Service
Angular JS
Online Test
JavaScript
MSMQ
MORE..
Contact Us
DOTNET87
asp.net37
c#.net20
linq4
mvc3
wcf2
xml2
ado.net8
oops2
entity framework2
INTERVIEW QUESTIONS1
angularjs1
SQL SERVER39
joins1
queries24
xml2
functions6
ANGULARJS22
angularjs22
JAVASCRIPT22
basics9
xml1
controls3
validations2
regular expression4
JQUERY59
basics32
controls14
events3
jquery ui9
HTML3
html3
CSS8
css2
css36
FAQS1
c#.net1
MOBILE2
android1
ios1
OTHER19
  



 

Home / blogs / HTML / HTML / Create simple login page in HTML using CSS

Previous Next

Total Views : 2453
Create simple login page in HTML using CSS

This example shows you how to create a simple and sample login page in html using css styles.

Example
html login page code

Source code

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Page</title>
    <style>
        /* Basics */
        html, body
        {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            font-family: "Helvetica Neue" , Helvetica, sans-serif;
            background: #FFFFFF;
        }
        .logincontent
        {
            position: fixed;
            width: 350px;
            height: 300px;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -175px;
            background: #07A8C3;
            padding-top: 10px;
        }
        .loginheading
        {
            border-bottom: solid 1px #ECF2F5;
            padding-left: 18px;
            padding-bottom: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }
        label
        {
            color: #ffffff;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 15px;
        }
        input[type=text], input[type=password]
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 300px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
        }
        input[type=checkbox]
        {
            margin-left: 18px;
            margin-top: 30px;
        }
        .loginremember
        {
            background: #ECF2F5;
            height: 70px;
            margin-top: 20px;
        }
        .check
        {
            font-family: sans-serif;
            position: relative;
            top: -2px;
            margin-left: 2px;
            padding: 0px;
            font-size: 12px;
            color: #321;
        }
        .loginbtn
        {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #07A8C3;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#07A8C3), to(#6EE4E8));
            background-image: -moz-linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            background-image: linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            border-radius: 30px;
            border: 1px solid #07A8C3;
            cursor: pointer;
        }
        .loginbtn:hover
        {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
            background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
            background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
    </style>
</head>
<body>
    <div class="logincontent">
        <div class="loginheading">
            Login
        </div>
        <label for="txtUserName">
            Username:</label>
        <input type="text" id="txtUserName" name="txtUserName" />
        <label for="txtPassword">
            Password:</label>
        <input type="password" id="txtPassword" name="txtPassword" />
        <div class="loginremember">
            <input type="checkbox" id="chbRemember" name="chbRemember" /><label class="check"
                for="chbRemember">Remember me next time</label>
            <input type="submit" class="loginbtn" value="Login" id="btnSubmit" />
        </div>
    </div>
</body>
</html>

Previous Next






SEARCH DOTNETLEARNERS.COM


Custom Search
search



Latest Blogs
Maintain div or panel scroll position after postback in asp.net update panel
Draggable button using jquery ui
Get total number of tables, views, stored procedures and functions count and names in sql server
JavaScript function to get date in mmddyyyy hhmmss ampm format
JavaScript function to get date in mmddyyyy format

Most Viewed Blogs
Create your own captcha image generator in asp.net using c#.net
Asp.net Gridview basic example for insert update and delete the records
JQuery Date Picker example to disable previous dates.
Asp.net Grid view Row command Event
Asp.net GridView RowDataBound example using C#.
Privacy Policy | ® All Rights Reserverd

