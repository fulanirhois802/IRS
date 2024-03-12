<?php
include("header.php");
include("index_showcase.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	#about {
  padding: 50px 0;
  background: #f5f5f7;
}

.about-wrapper {
  display: flex;
  flex-wrap: wrap;
}

#about h2 {
  font-size: 2.3rem;
}

#about p {
  font-size: 1.2rem;
  color: #555;
}

#about .small {
  font-size: 1.2rem;
  color: #666;
  font-weight: 600;
}

.about-img {
  flex: 1 1 400px;
  padding: 30px;
  transform: translateX(150%);
  animation: about-img-animation 1s ease-in-out forwards;
}

@keyframes about-img-animation {
  100% {
    transform: translate(0);
  }
}

.about-text {
  flex: 1 1 400px;
  padding: 30px;
  margin: auto;
  transform: translate(-150%);
  animation: about-text-animation 1s ease-in-out forwards;
}

@keyframes about-text-animation {
  100% {
    transform: translate(0);
  }
}

.about-img img {
  display: block;
  height: 400px;
  max-width: 100%;
  margin: auto;
  object-fit: cover;
  object-position: right;
}

#types {
  padding: 5rem 0 10rem 0;
}

#types h2 {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 400;
  margin-bottom: 40px;
  text-transform: uppercase;
  color: #555;
}

.types-container {
  display: flex;
  justify-content: space-between;
}

.types-container img {
  display: block;
  width: 100%;
  margin: auto;
  max-height: 300px;
  object-fit: cover;
  object-position: center;
}

.img-container {
  margin: 0 1rem;
  position: relative;
}

.img-content {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.img-content h3 {
  color: black;
  font-size: 2.2rem;
}

.img-content a {
  font-size: 1.2rem;
}
</style>
<body>
<section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've been  fighting crimes since 2008</h2>
                <p>
                   
                </p>
            </div>
            <div class="about-img">
                <img src="images\Find.png" alt="" />
            </div>
        </div>
    </section>
    <section id="types">
        <h2>Types of Incidents</h2>
        <div class="types-container container">
            <div class="nearmiss">
                <div class="img-container">
                <div class="head_3"><h3>Near Miss Report</h3></div>
                    <img src="images\picture.jpg" alt="error" />
                    <div class="img-content">
                        <!-- <h3>Near miss report</h3> -->
                        <a href="https://www.osha.gov/sites/default/files/2021-07/Template%20for%20Near%20Miss%20Reporting%20Policy.pdf" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="injury">
                <div class="img-container">
                <div class="head_3"><h3>Injury and lost time Report LTI</h3></div>
                    <img src="images\img9.jpg" alt="error" />
                    <div class="img-content">
                        <!-- <h3>Injury Report</h3> -->
                        <a href="https://www.safeopedia.com/definition/156/lost-time-injury-lti" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="sentinel">
                <div class="img-container">
                  <div class="head_3"><h3>Sentinel event Report</h3></div>
                    <img src="images\img9.jpg" alt="error" />
                    <div class="img-content">
                        <!-- <h3>Sentinel report</h3> -->
                        <a href="https://www.jointcommission.org/-/media/tjc/documents/resources/patient-safety-topics/sentinel-event/sentinel-event-policy/camac_22_se_all_current.pdf" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


