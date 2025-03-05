<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
*{
    margin: 0px;
    padding: 0px;
}

.header {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative; /* Ensures proper alignment for logout */
    height: 100px; /* Adjust as needed */
    background-color:#9c169589; /* Optional: Background color */
}

.header a {
    text-decoration: none;
    font-size: 24px;
    font-weight: bold;
    color: #000; /* Adjust color as needed */
}

.logout {
    position: absolute;
    right: 20px; /* Adjust as needed */
    top: 50%;
    transform: translateY(-50%);
}



ul
{
	background-color:rgba(0,0,0,.7);
	width: 16%;
	height: 100%;
	position: fixed;
	padding-top: 5%;
	text-align: center;
}

ul li 
{
	list-style: none;
	padding-bottom: 30px;
	font-size: 15px;
}

ul li a 
{
	color: white;
	font-weight: bold;
}

ul li a:hover
{
	color:black;
	text-decoration: none;
}

.content
{
	margin-left: 20%;
	margin-top: 5%;
}

</style>