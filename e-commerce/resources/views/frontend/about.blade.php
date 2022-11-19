@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<div class="About-us">
    <div class="row-header" >
        <h1 class="font-weight-light mt-2">
            About Us
        </h1>
    </div>
	<img class="about-img" src="https://woovina.com/images/2020/07/25/best-ecommerce-website-templates.jpg">

	<p class="about-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime itaque ipsa adipisci ab quasi inventore officiis asperiores provident, nihil saepe. Inventore porro maxime animi hic commodi sed maiores explicabo quidem!</p>
	<p class="about-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime itaque ipsa adipisci ab quasi inventore officiis asperiores provident, nihil saepe. Inventore porro maxime animi hic commodi sed maiores explicabo quidem!</p>
   <h3 class="about-h3"> Follow us on </h3>
   <a href="https://www.facebook.com/" class="fa fa-facebook" style="padding: 20px;
   text-align: center;
   text-decoration: none;
   margin: 5px 2px;
   background: #3B5998;
   color: white;
   border-radius: 8px;
  font-size: 20px;"></a>
   <a href="https://www.twitter.com/" class="fa fa-twitter" style="padding: 20px;
   text-align: center;
   text-decoration: none;
   margin: 5px 2px;
   background: #3B5998;
   color: white;
   border-radius: 8px;
  font-size: 20px;"></a>
   <a href="https://www.linkedin.com/" class="fa fa-linkedin" style="padding: 20px;
   text-align: center;
   text-decoration: none;
   margin: 5px 2px;
   background: #3B5998;
   color: white;
   border-radius: 8px;
  font-size: 20px;"></a>
  </div>


  <style>
    .About-us {
	  width: 100%;
	  text-align: center;
	  background-color: #ccc;
      padding-top: 10px;

	}

    img {
	  border-radius: 50%;
      margin-top: 20px;
	}

.row-header{
    display:flex;flex-direction:column;justify-content:center;align-items:center;
}

.row-header h1{
    font-family: 'Montserrat', sans-serif;color: #35373b;font-weight: 500;
}
.about-h3{
    font-family: 'Montserrat', sans-serif;color: #35373b;font-weight: 500;
}
.about-p {
	  font-size: 20px;
      margin-top: 30px;
      margin-bottom: 30px;
	}
</style>

@endsection
