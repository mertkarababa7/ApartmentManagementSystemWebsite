 <?php 
 include 'checklogin.php';
 include '../db_conn.php';
 include 'navbar.php';
 
 ?>

 <style>
 $dark-color: #333a4d;

.clear {
  clear: both;
}
body {
  margin: 0;
  padding: 0;
}
main {
  background: $dark-color;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.liveDemo__link {
  color: #fafafa;
  font-family: sans-serif;
  font-size: 20px;
  font-weight: 600;
  margin: 16px 0;
  display: block;
}
p {
  line-height: 1.5;
  color: #545454;
  font-weight: 100;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
}
/*MESSAGE */
.message_cont {
  padding: 15px 30px 20px;
  background: #fafafa;
  border-radius: 10px;
  width: calc(50% - 30px);
  box-sizing: border-box;
  border: 2px solid #eee;
  float: left;
  margin: 30px 15px;
  min-height: 475px;
  max-width: 400px;
}
.message {
  margin: 5px 0 15px;
}
.message_title {
  font-weight: 600 !important;
  padding: 0;
  margin: 5px 5px 15px;
}
.message_blurb {
  position: relative;
  background: #003A79;
  padding: 15px;
  border-radius: 10px;
  width: max-content;
  max-width: 90%;
}
.message_blurb::before {
  content: '';
  position: absolute;
  border-right: 15px solid #003A79;
  border-left: 20px solid transparent;
  border-top: 30px solid transparent;
  transform: rotate(80deg) skew(-0.06turn, 18deg);
  left: 25px;
  width: 0;
  height: 0;
  top: -30px;
}
.message:nth-of-type(even) .message_blurb {
  background: #ddd;
  float: right;
  position: relative;
}
.message:nth-of-type(even) .message_blurb::before {
  border-right: 15px solid #ddd;
  left: calc(100% - 60px);
  top: 0;
  transform: rotate(211deg) skew(-0.06turn, 38deg);
}
.message_title_rt {
  text-align: right;
}
.message:nth-of-type(even) .message_blurb p {
  color: #545454;
  font-weight: 400;
}
.message_blurb p {
  color: #fff;
  font-weight: 400;
  margin: 0;
}
@media screen and (max-width: 695px) {
  .message_cont {
    width: calc(100% - 32px); 
    margin: 0 32px;
  }
}


</style>


<main>
<div class="message_cont">
                            <!--- START MESSAGE --->
                            <div class="message">
                                <p class="message_title">You:
                                </p>
                                <div class="message_blurb">
                                    <p class="message_blurb_p">
                                        <?php 
                                     
         $query = "SELECT * FROM messages  ";

$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


   if($total!=0)

   {
while($result = mysqli_fetch_assoc($data)){ 
	echo $result['head'];
}}

                                         ?>
                                    </p>
                                </div>
                            </div>
                            <!---- END MESSAGE ---->


                            <!--- START MESSAGE --->
                            <div class="message">
                                <p class="message_title message_title_rt">Them: 
                               </p>
                            
                                <div class="message_blurb">
                                    <p class="message_blurb_p">
                                        Great! What’s the job outlook like in that field?
                                    </p>
                                   
                                </div>
                                  <div class="clear"></div>
                            </div>

                            <!---- END MESSAGE ---->

                            <!--- START MESSAGE --->
                            <div class="message">
                                <p class="message_title">You:
                                </p>
                                <div class="message_blurb">
                                    <p class="message_blurb_p">
                                        Hmm… I guess I should look at salaries. And job openings.
                                    </p>
                                </div>
                            </div>
                            <!---- END MESSAGE ---->
                        </div>
 
  <a href="https://www.desertfinancial.com/news-and-knowledge/articles/These-5-Friends-Will-Make-Your-Life-Better" class="liveDemo__link">Live Demo</a>
</main>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
