<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"  />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DMC</title>
   <style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden;
}

body {
  font-family: Arial, sans-serif;
  background-color: black;
  background-image: url('bg.jpg');
}

h1, h2, h3, h4, h5, h6 {
  font-weight: bold;
}

a {
  color: #f5f5f5;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
.header{
  display: flex;
  justify-content: space-between;
  padding: 0.5rem;
  background-color: #007bff;
  color: #f5f5f5;
  /* position: fixed; */
  width: 100%;
}

.header h1{
  font-size: 1.2rem;
}
.nav-link{
  display: flex;
  justify-content: space-between;
  color: #f5f5f5;

}

.nav-link li{
  list-style: none;
  margin-right: 0.7rem;
}



.section {
  height: auto;
}

#home{
  display: flex;
  justify-content: space-around;
  gap: 1rem;
  /* width: 100%; */
  margin: 1rem;

}

.home-prag{
  flex-grow: 2;
  width: 60%;
  padding: 0.3rem;
  
}

.home-prag div{
  text-align: left;
}

.home-prag button{
  margin-top: 0.4rem;
  background-color: #007bff;
  color: #f5f5f5;
  border: #007bff;
  border-radius: 0.3rem;
  font-size: 1.5rem;
  padding: 0.4rem;
  cursor: pointer;
}

.home-prag button:hover{
  background-color: #175ae9;
  color: #f5f5f5;
  border-color: #007bff;
}

.home-fig{
  flex-grow: 1;
  width: 40%;
  position: relative;
}

.home-fig img{
 width:100%;
 height: 100%;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
  
}
/* #home img{
  width: 3rem;
  height: auto;
} */

/* #home figure{
 flex: 1; 
}

*/
#About{
  margin: 1rem;
}

#About h1{
  text-align: center;
  margin-bottom: 0.8rem;
}
.info-card{
  display: flex;
  justify-content: space-between;

}

#contact h3{
  text-align: center;
  text-transform: uppercase;
}

footer{
  background-color: #007bff;
}

@media screen and (max-width:800px) {
  #home{
    display: flex;
    margin: 1rem;
  }
  
  .home-prag{
    flex-wrap: wrap;
  }
  .home-fig img{
   width: 100%;
   height: 100%;
  }
}

@media screen and(max-width:768x) {
  
}

@media screen and(max-width:922px) {
  
}
@media screen and(max-width:1200px) {
  
}

.welcome {
  
  height: 100vh;
  background-image: url('./bg.jpg');
  background-size: cover;
  background-position: center;
  color: #f5f5f5;
  text-align: center;
  padding: 1.5rem;
  position: relative;
}

.dmc-Pragragraphy{
  margin-top: 3rem;
  margin-bottom:4rem;
}

.homeLog{
  font-size: 4rem;
  font-weight: bolder;
  margin-bottom: 1rem;
  box-shadow: #007bff;
}

.homeTitle{
  margin-bottom: 0.5rem;
  font-family: 'Times New Roman', Times, serif;
  font-size: 2rem;
}
.dmc-Pragragraphy p{
  font-size: 1.2rem;
}

.dmc-Pragragraphy form {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0;
  margin-top: 1.2rem;
}

input[type="email"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px; /* Rounded left edge */
}

input[type="submit"] {
  padding: 10px 15px;
  border: 1px solid #007bff;
  background-color: #007bff; /* Button background color */
  color: #fff; /* Button text color */
  border-radius: 0 5px 5px 0; /* Rounded right edge */
  cursor: pointer;
}


.navLink ul{
  display: flex;
  justify-content: center;
  gap: 0.3rem;
  font-size: 1.2;
  font-weight: bold;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  margin-bottom: 0.2rem;
}

/* Tablet and PC styles - Adjust as needed */
@media screen and (min-width: 768px) {
  .welcome {
  height: 100vh;
  }
}

   </style>
  </head>
  <body>
    <section class="welcome">
     <div class="dmc-Pragragraphy">
        <h1 class="homeLog">E-HC</h1>
        <h1 class="homeTitle">E-HealthChecks</h1>
      <p>
        🌟 Welcome to E-Health Checks, your personal companion for mental well-being. We're here to support you on your journey to better mental health. 🧠💪
       📧 Enter your email below to subscribe and receive your daily mental health check-in and a weekly report tailored to your well-being. 📈📆
       🚀 Let's embark on this path to a healthier, happier you together. Subscribe now and start your mental health journey with us! 🌈💻💌🌻
      </p>
      <form action="/test" method="post">
         @csrf
        <input type="email" required name="email" id="email" placeholder="Enter your email">
        <input type="submit"  value="Subscribe">
      </form> 
    </div>
    <div class="navLink">
      <ul>
        <li><a href="">Privacy Policy</a></li>|
        <li><a href="">About</a></li>|
        <li><a href="">Terms of Use</a></li>
      </ul>
    </div>
    </section>
    </body>
    </html>

