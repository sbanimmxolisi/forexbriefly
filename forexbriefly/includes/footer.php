
    <footer>
      
                <h2 class="brand"><a href="index.php"> Fo<span style="color: #ff591cbb">rex</span>Briefly </a></h2>
                <div id="clockbox" style="color:#aaa;text-align:center;"></div>
                <script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
                <div class="footer-main-container">
                  <div>
                    <a href="javascript:void(0)" class="sub-container">Useful links</a>
                    <hr>
                    <p>affialte links below. </a> <br>      
                    <i class="fa fa-info-circle"></i> Donations accepted <br>
                    
                   <a href="Our-Terms.php"> Terms & Conditions </a>|<a href="Privacy-policy.php"> Privacy policy</a> <br>

                    Contact us: Feedback is very much appreciated! <br>
                   <a href="mailto:forexbriefly@gmail.com">Email: forexbriefly@gmail.com</a>  </p>
                  </div>
                  <div>
                  <a href="javascript:void(0)" class="sub-container">Useful links</a>
                  <hr>
                  <a href="index.php"> Home</a><br>
                  <a href="category.php?catid=24"> Forex</a>  <br>
                  <a href="category.php?catid=25"> Prop Firms</a> <br>           
                  <a href="category.php?catid=26"> Brokers</a><br>
		  <a href="category.php?catid=27"> Wall Of Scammers</a><br>
               
                  
                </div>
                
               
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Socials</a><br>
                  <hr>
                  <a href="https://www.facebook.com/forexbriefly/" class="facb"><i class="fa fa-facebook"></i> Facebook</a><br>
                  <a href="https://www.instagram.com/forexbriefly/" class="insg"><i class="fa fa-instagram"></i> Instagram</a><br>
                  <a href="https://twitter.com/forexbriefly" class="twit"><i class="fa fa-twitter"></i> Twitter</a><br>
                 
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Help & Support</a><br>
                  <hr>
                  <a href="contact-us.php"> Contact Us</a><br>
                  <a href="about-us.php"> About Us</a><br>
                  <a href="Advertise-with-us.php"> Advertise With Us</a><br>
                  <a href="Write-for-us.php"> Write for Us</a>
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Our Apps</a><br>
                  <hr>
                  <img src="android-app.jpg" alt="android app">
                  <img src="ios-app.jpg" alt="Ios app">
                  
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Translate</a><br>
                  <hr>
                  <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=dark&autoMode=false" type="text/javascript"></script>
                  
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Subscribe</a><br>
                  <hr>
                   </div>
                
                </div>
                <p class="footer-terms">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Mxolisi Ngcobo. All right reserved</p>
              </footer>