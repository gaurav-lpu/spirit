<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS Box Hover Effect</title>
  <link rel="stylesheet" href="styles.css"> <!-- If your styles are in an external CSS file -->
  <style>
    body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-image: url('path/to/your/image.jpg');
  background-size: cover; /* Cover the entire background */
  background-position: center; /* Center the background image */
}

.quotes .box {
  flex: 0 0 20%;
  position: relative;
  height: 250px; /* Set a fixed height */
  background: #f2f2f2;
  overflow: hidden;
  transition: all 0.5s ease-in;
  z-index: 2;
  box-sizing: border-box;
  padding: 15px;
  margin: 10px;
  box-shadow: -10px 25px 50px rgba(0, 0, 0, 0.3);
  width:520px
}

.quotes {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: flex-start; /* Align items to the start of the container */
  z-index: 2;
}

/* */

.quotes .box::before {
  content: '\201C';
  position: absolute;
  top: -20px;
  left: 5px;
  width: 100%;
  height: 100%;
  font-size: 120px;
  opacity: 0.2;
  background: transparent;
  pointer-events: none;
}

.quotes .box::after {
  content: '\201D';
  position: fixed;
  bottom: -10%;
  right: 5%;
  font-size: 120px;
  opacity: 0.2;
  background: transparent;
  filter: invert(1);
  pointer-events: none;
}

.quotes .box p {
  margin: 0;
  padding: 10px;
  font-size: 1.2rem;
  height: 80px; /* Set height to 100% of the box */
  overflow: hidden; /* Ensure that the content doesn't overflow */
  word-wrap: break-word; /* Break words if they exceed the box width */
}

.quotes .box h2 {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

/* .quotes .box:hover {
  color: #f2f2f2;
  box-shadow: 20px 50px 100px rgba(0, 0, 0, 0.5);
} */

.quotes .bg {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0;
  transition: all 0.5s ease-in;
  pointer-events: none;
  width: 100%;
  height: 200%;
  overflow: hidden;
}

/* .quotes .box.box1:hover,
.quotes .box.box1:hover~.bg {
  opacity: 1;
  background: #e2a9e5;
background: -moz-linear-gradient(-45deg, #e2a9e5 15%, #2b94e5 100%);
background: -webkit-linear-gradient(-45deg, #e2a9e5 15%,#2b94e5 100%);
background: linear-gradient(135deg, #e2a9e5 15%,#2b94e5 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2a9e5', endColorstr='#2b94e5',GradientType=1 );
} */

/* .quotes .box.box2:hover,
.quotes .box.box2:hover~.bg {
  opacity: 1;
  background: #632c65;
background: -moz-linear-gradient(-45deg, #632c65 15%, #56a5e2 100%);
background: -webkit-linear-gradient(-45deg, #632c65 15%,#56a5e2 100%);
background: linear-gradient(135deg, #632c65 15%,#56a5e2 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#632c65', endColorstr='#56a5e2',GradientType=1 );
} */

/* .quotes .box.box3:hover,
.quotes .box.box3:hover~.bg {
  opacity: 1;
  background: #4b384c;
background: -moz-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
background: -webkit-linear-gradient(-45deg, #4b384c 15%,#da5de2 100%);
background: linear-gradient(135deg, #4b384c 15%,#da5de2 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4b384c', endColorstr='#da5de2',GradientType=1 );
} */

  </style>
</head>
<body>
<h1 style="text-align: center;">Courses Overview</h1><br>
  <h3 style="text-align: center;">My Courses</h3><br>
  <div class="quotes">
    <!-- <div class="card">
      <div class="box box3">
        <p>Erasmus + Course on Learning and E-Learning.</p>
        <h2>ERASMUS PLUS</h2>
      </div>
      <div class="bg"></div>
    </div>
    <div class="card">
      <div class="box box3">
        <p>Your smile will give you a positive countenance that will make people feel comfortable around you. </p>
        <h2>Les Brown</h2>
      </div>
      <div class="bg"></div>
    </div>
    <div class="card">
      <div class="box box3">
        <p>Before anything else, preparation is the key to success. </p>
        <h2>Alexander Graham Bell</h2>
      </div>
      <div class="bg"></div>
    </div> -->
	<div class="card">
      <div class="box box1">
        <p style="text-align: center">Erasmus + Course on Learning and E-Learning</p>
        <h2 style="text-align: center">ERASMUS PLUS</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box2">
        <p style="text-align: center">Erasmus+ Playground 1</p>
        <h2 style="text-align: center">ERASMUS PLUS</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box3">
        <p style="text-align: center">Erasmus+ Playground 2</p>
        <h2 style="text-align: center">ERASMUS PLUS</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box4">
        <p style="text-align: center">EU-SPIRIT: Excellence in Managing Fitness and Wellness Center</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box5">
        <p style="text-align: center">EU-SPIRIT: Exercise and Nutrition Management in Cancer</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box6">
        <p style="text-align: center">EU-SPIRIT: Innovative Teaching strategies for Inclusion</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box7">
        <p style="text-align: center">EU-SPIRIT: Marketing and Communication for Sports</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box8">
        <p style="text-align: center">EU-SPIRIT: Nutrition, Exercise and Healthy Lifestyle</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box9">
        <p style="text-align: center">EU-SPIRIT: Sport Technology and Industry</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box10">
        <p style="text-align: center">EU-SPIRIT: Sports – Health , Fitness, Injury & Rehabilitation</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box11">
        <p style="text-align: center">EU-SPIRIT: Traditional Sport and Out door activities</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
	<div class="card">
      <div class="box box12">
        <p style="text-align: center">EU-SPIRIT: Traditional Sports</p>
        <h2 style="text-align: center">EU-SPIRIT Erasmus+ Life Long Learning Courses</h2>
      </div>
      <div class="bg"></div>
    </div>
  </div>
</body>
</html>
