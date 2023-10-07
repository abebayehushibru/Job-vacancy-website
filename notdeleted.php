<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<style type="text/css">
.alert {
position:relative;
height:100vh;
margin:0;
width:100%;
display:flex;
align-items:center;
justify-content:center;
background:rgb(0,0,0,0.7);
}
.alert >div {
height:190px;
width:400px;
background-color:blue;
display:flex;
background:white;
align-items:center;
justify-content:center;
flex-direction:column;
border-radius:20px;
box-shadow:10px 10px 5px;
}

.alert >div >div:first-child {
position:relative;
height:40px;
width:100%;
display:flex;
align-items:center;
justify-content:center;

}
.alert >div >div:nth-child(2) {
height:250px;
width:100%;
display:flex;
justify-content:center;
align-items:center;
}
.alert >div >div:nth-child(2)>img{
height:100px;
width:100px;
border-radius:50%;
margin-right:15px;

}
.alert >div >div:nth-child(2)>span{

width:200px;
font-size:18px;
font-weight:bold;
}
.alert >div >div:nth-child(2)>.registerd{

color:green;}

.alert >div >div:nth-child(2)>.notregisterd{

color:green;}
.alert >div >div:nth-child(3) {
height:50px;
width:100%;
margin-bottom: 10px;
display:flex;
align-items:center;
justify-content:center;
}

.alert >div >div:nth-child(3)>button{
height:40px;
width:60px;
font-size:20px;
font-weight:bold;
background:none;
border:1px solid black;
border-radius:3px;

}
</style>
<body>


<div class="alert" >
  <div>
  <div>
  <h2>ethio jobs
  </h2>
  </div>
  
  <div>
 
  <img src="./assert/photos/right.png"> <span class="registerd">  Admin not deleted!</span>
  
  
 
  </div>
  <div>
   <a href="deleteadmin.php"><button onclick="document.querySelector('.alert').style.display='none';">ok</button></a>
   </div>
  </div>
</div>
<script type="text/javascript">


</script>
</body>
</html>
